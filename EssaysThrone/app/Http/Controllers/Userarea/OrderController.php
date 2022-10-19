<?php

namespace App\Http\Controllers\Userarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(current_user()->id)){
            $data['domain_id'] = current_user()->domain_id;
            $data['customer_id'] = current_user()->id;
            $data['orders'] = $this->orders($data);
            $data['page_heading'] = "All Orders";
            return view('userarea.orders.index',$data);
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function awaitingPayment()
    {
        if(isset(current_user()->id)){
            $data['domain_id'] = current_user()->domain_id;
            $data['customer_id'] = current_user()->id;
            $data['status_id'] = 1;
            $data['orders'] = $this->orders($data);
            $data['page_heading'] = "Awaiting Payment Orders";
            return view('userarea.orders.index',$data);
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inProcess()
    {
        if(isset(current_user()->id)){
            $data['domain_id'] = current_user()->domain_id;
            $data['customer_id'] = current_user()->id;
            $data['status_id'] = 2;
            $data['orders'] = $this->orders($data);
            $data['page_heading'] = "In Process Orders";
            return view('userarea.orders.index',$data);
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delivered()
    {
        if(isset(current_user()->id)){
            $data['domain_id'] = current_user()->domain_id;
            $data['customer_id'] = current_user()->id;
            $data['status_id'] = 5;
            $data['orders'] = $this->orders($data);
            $data['page_heading'] = "Delivered Orders";
            return view('userarea.orders.index',$data);
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completed()
    {
        if(isset(current_user()->id)){
            $data['domain_id'] = current_user()->domain_id;
            $data['customer_id'] = current_user()->id;
            $data['status_id'] = 7;
            $data['orders'] = $this->orders($data);
            $data['page_heading'] = "Completed Orders";
            return view('userarea.orders.index',$data);
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        if(isset(current_user()->id)){
            if(isset($id)){
                $id = base64_decode($id);
                $url = config('app.crm_api_url').'/orders/show';
                $data['domain_id'] = current_user()->domain_id;
                $data['order_id'] = $id;
                $response = curlPostRequest($url, $data);
                $response = json_decode($response);
                if(isset($response->status) && $response->status==1){
                    if(isset($response->data->order_statuses)){
                        unset($response->data->order_statuses);
                    }
                    $resp['order'] = $response->data;
                    $resp['order']->line_spacing = $resp['order']->line_spacing==1 ? "Double Line Space" : "Single Line Space";
                    unset($resp['order']->domain_id);
                    unset($resp['order']->lead_id);
                    unset($resp['order']->writer_deadline);
                    unset($resp['order']->writer_submit_date);
                    unset($resp['order']->customer_sent_date);
                    unset($resp['order']->writer_id);
                    unset($resp['order']->is_reassigned);
                    unset($resp['order']->customer);
                    return response()->json([
                        'status' => 1,
                        'message' =>'data',
                        'data' => $resp ?? null
                    ]);
                    // return view('userarea.orders.detail',$data);
                }else{
                    return redirect()->route('frontend.index')->with('error','Login First');
                }

            }else{
                abort('404');
            }
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markModify(Request $request)
    {
        if(isset(current_user()->id)){
            if(isset($request->order_id)){
                $id = base64_decode($request->order_id);
                $comment = $request->comments ?? "--";
                $url = config('app.crm_api_url').'/orders/mark-modified';
                $data['domain_id'] = current_user()->domain_id;
                $data['order_id'] = $id;
                $data['status_id'] = 6;
                $data['comment'] = $comment;

                if(isset($request->attachments) && count($request->attachments)){
                    foreach ($request->attachments as $index => $file) {
                        $data['attachments[' . $index . ']'] = new \CURLFile($file->getRealPath(),$file->getClientOriginalExtension(),$file->getClientOriginalName());
                    }
                }

                $response = curlPostRequest($url, $data);
                $response = json_decode($response);
                if(isset($response->status) && $response->status==1){
                    return redirect()->route('userarea.orders.index')->with('success','Marked modified');
                }else{
                    return redirect()->route('userarea.orders.index')->with('success','Marked modified');
                }

            }else{
                abort('404');
            }
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markCompleted($id)
    {
        if(isset(current_user()->id)){
            if(isset($id)){
                $id = base64_decode($id);
                $url = config('app.crm_api_url').'/orders/update-order-status';
                $data['domain_id'] = current_user()->domain_id;
                $data['order_id'] = $id;
                $data['status_id'] = 7;
                $response = curlPostRequest($url, $data);
                $response = json_decode($response);
                if(isset($response->status) && $response->status==1){
                    return response()->json([
                        'status' => 1,
                        'message' =>'Order completed successfully',
                        'data' => $resp ?? null
                    ]);
                }else{
                    return response()->json([
                        'status' => 0,
                        'message' =>'error in response',
                        'data' => null
                    ]);
                }

            }else{
                abort('404');
            }
        }
        else{
            return redirect()->route('frontend.index')->with('error','Login First');
        }
    }

    private function orders($data)
    {
        $url = 'https://staging.katibeen.com/api/v1/orders/get';
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            return $response->data;
        }else{
            return null;
        }
    }
}
