<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($id)
    {
        if(isset($id)){
            $id = base64_decode($id);
            $url = 'https://staging.katibeen.com/api/v1/orders/show';
            $data['domain_id'] = 2;
            $data['order_id'] = $id;
            $response = curlPostRequest($url, $data);
            $response = json_decode($response);
            if(isset($response->status) && $response->status==1){
                $data['order'] = $response->data;
                session(['current_user'=> $response->data->customer]);
                return view('stripe',$data);
            }else{
                abort('404');
            }

        }else{
            abort('404');
        }
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(config('app.stripe_secret'));
        Stripe\Charge::create ([
            "amount" => ($request->amount*100),
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from writersgeek." 
        ]);

        $id = base64_decode($request->order_id);
        $url = config('app.crm_api_url').'/orders/mark-paid';
        $data['domain_id'] = config('app.domain_id');
        $data['order_id'] = $id;
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            $data['order'] = $response->data;
            return redirect()->route('frontend.thankyou',['id'=>$request->order_id])->with('success','Payment Successful');
        }else{
            return redirect()->route('frontend.thankyou',['id'=>$request->order_id])->with('error','Payment Not Successful');
        }
    }

    public function stripePostNew(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            //'amount' => 'required',
        ]);
        $input = $request->all();
        if ($validator->passes()) { 
            $input = array_except($input,array('_token'));
            $stripe = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                ]);
                if (!isset($token['id'])) {
                    return redirect()->route('addmoney.paymentstripe');
                }
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount' => 20.49,
                    'description' => 'wallet',
                ]);

                if($charge['status'] == 'succeeded') {
                    echo "<pre>";
                    print_r($charge);exit();
                    return redirect()->route('addmoney.paymentstripe');
                } else {
                    \Session::put('error','Money not add in wallet!!');
                    return redirect()->route('addmoney.paymentstripe');
                }
            } catch (Exception $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addmoney.paymentstripe');
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addmoney.paywithstripe');
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                \Session::put('error',$e->getMessage());
                return redirect()->route('addmoney.paymentstripe');
            }
        }
    }

}