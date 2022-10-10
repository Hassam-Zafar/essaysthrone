<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Setting;

class OrderController extends Controller
{
    public function saveCustomer(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email'  => 'required|email|max:191'
        ]);
        $url = 'https://staging.katibeen.com/api/v1/customers/save';
        $data['first_name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = $request->first_name . '9510';
        $data['domain_id'] = config('app.domain_id');
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        return response()->json(['status' => 1, 'customer_id' => $response->data->id]);
    }

    public function saveCustomerPassword(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'password' => 'required|max:191',
        ]);
        $url = 'https://staging.katibeen.com/api/v1/customers/password/update';
        $data['customer_id'] = $request->customer_id;
        $data['password'] = $request->password;
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        session(['user_password_set'=> 'Password added successfully']);
        if ($response && $response->status == 1) {
            return redirect()->back()->with('success_msg','Password added successfully');
        } else {
            return redirect()->back()->with('error_msg','Error while adding password');
        }
    }

    public function saveGuestCustomer(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|max:191',
            'email'  => 'required|email|max:191'
        ]);
        $url = 'https://staging.katibeen.com/api/v1/leads/save';
         
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['domain_id'] = config('app.domain_id');
        $response = curlPostRequest($url, $data);
     
        $response = json_decode($response);
        if ($response && $response->status == 1 && isset($response->customer)) {
            return response()->json(['status' => 1, 'customer_id' => $response->data]);
        }else{
            return response()->json(['status' => 1, 'lead_id' => $response->data]);
        }
    }

    public function store(OrderStoreRequest $request)
    {
        // dd($request->price_plan_style_id);
        /*
        domain_id:11
        customer_id:1
        price_plan_type_of_work_id:1
        price_plan_level_id:1
        price_plan_urgency_id:1
        price_plan_no_of_page_id:1
        total_amount:1
        grand_total_amount:1
        manual_discount_amount:0.0
         */
        $data['status_id'] = 1;
        $data['customer_id'] = $request->customer_id ?? null;
        $data['lead_id'] = $request->lead_id;
        $data['instructions'] = $request->instructions ?? null;
        $data['coupon_id'] = $request->coupon_id ?? null;
        $data['topic'] = $request->topic ?? null;
        $data['price_plan_type_of_work_id'] = $request->price_plan_type_of_work_id;
        $data['price_plan_level_id'] = $request->price_plan_level_id;
        $data['price_plan_urgency_id'] = $request->price_plan_urgency_id;
        $data['price_plan_no_of_page_id'] = $request->price_plan_no_of_page_id;
        $data['price_plan_indentation_id'] = $request->price_plan_indentation_id ?? null;
        $data['price_plan_subject_id'] = $request->price_plan_subject_id ?? null;
        $data['price_plan_style_id'] = $request->price_plan_style_id ?? null;
        $data['price_plan_language_id'] = $request->price_plan_language_id ?? null;
        $data['total_amount'] = $request->total_amount;
        $data['manual_discount_amount'] = $request->manual_discount_amount;
        $data['discount_amount'] = $request->discount_amount;
        $data['addons_amount'] = $request->addons_amount;
        $data['service_amount'] = $request->service_amount;
        $data['addOns'] = $request->addOns;
        $data['grand_total_amount'] = $request->grand_total_amount;
        $data['line_spacing'] = $request->line_spacing;
        $data['reference'] = $request->reference;
        $data['font_style'] = $request->font_style;
        $data['created_by'] = null;
        $data['domain_id'] = config('app.domain_id');
        $data = self::http_build_query_for_curl($data);
        if(isset($request->attachments) && count($request->attachments)){
            foreach ($request->attachments as $index => $file) {
                $data['attachments[' . $index . ']'] = new \CURLFile($file->getRealPath(),$file->getClientOriginalExtension(),$file->getClientOriginalName());
            }
        }
        $url = 'https://staging.katibeen.com/api/v1/orders/store';
        // dd($data);
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        // dd($response);
        if ($response && $response->status == 1) {
            return redirect()->route('frontend.preview', ['id' => base64_encode($response->data)]);
        } else {
            return response()->json(['status' => 0, 'data' => null]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($id)
    {
        if(isset($id)){
            $id = base64_decode($id);
            $url = 'https://staging.katibeen.com/api/v1/orders/show';
            $data['domain_id'] = config('app.domain_id');
            $data['order_id'] = $id;
            $response = curlPostRequest($url, $data);
            $response = json_decode($response);
            if(isset($response->status) && $response->status==1){
                $data['order'] = $response->data;
                session(['current_user'=> $response->data->customer]);

                $data['fb'] = $this->settings(1);
                // $data['linkedin'] = $this->settings(2);
                $data['instagram'] = $this->settings(3);
                $data['twitter'] = $this->settings(4);
                $data['email'] = $this->settings(5);
                $data['phone'] = $this->settings(6);
                $data['analytics'] = $this->settings(7);
                $data['og_script'] = $this->settings(8);
                $data['google_tag_manager'] = $this->settings(10);
                $data['tawk_to'] = $this->settings(11);

                return view('frontend.preview',$data);
            }else{
                abort('404');
            }

        }else{
            abort('404');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(isset($id)){
            $id = base64_decode($id);
            $url = 'https://staging.katibeen.com/api/v1/orders/show-edit';
            $data['domain_id'] = config('app.domain_id');
            $data['order_id'] = $id;
            $response = curlPostRequest($url, $data);
            $response = json_decode($response);
            if(isset($response->status) && $response->status==1){
                $data['order'] = $response->data;
                session(['current_user'=> $response->data->customer]);

                $data['fb'] = $this->settings(1);
                // $data['linkedin'] = $this->settings(2);
                $data['instagram'] = $this->settings(3);
                $data['twitter'] = $this->settings(4);
                $data['email'] = $this->settings(5);
                $data['phone'] = $this->settings(6);
                $data['analytics'] = $this->settings(7);
                $data['og_script'] = $this->settings(8);
                $data['google_tag_manager'] = $this->settings(10);
                $data['tawk_to'] = $this->settings(11);

                return view('frontend.edit_order',$data);
            }else{
                abort('404');
            }

        }else{
            abort('404');
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function thankyou($id,$status=null)
    {
        if(isset($id)){
            $id = base64_decode($id);
            $url = config('app.crm_api_url').'/orders/show';
            $data['domain_id'] = config('app.domain_id');
            $data['order_id'] = $id;
            $response = curlPostRequest($url, $data);
            $response = json_decode($response);
            if(isset($response->status) && $response->status==1){
                $data['order'] = $response->data;
                $data['payment_status'] = isset($status) ? $status : "n/a";

                $data['fb'] = $this->settings(1);
                // $data['linkedin'] = $this->settings(2);
                $data['instagram'] = $this->settings(3);
                $data['twitter'] = $this->settings(4);
                $data['email'] = $this->settings(5);
                $data['phone'] = $this->settings(6);
                $data['analytics'] = $this->settings(7);
                $data['og_script'] = $this->settings(8);
                $data['google_tag_manager'] = $this->settings(10);
                $data['google_tag_manager_no_script'] = $this->settings(11);

                return redirect()->route('frontend.thankyou_page');
            }else{
                abort('404');
            }

        }else{
            abort('404');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thankyouPage()
    {
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['google_tag_manager_no_script'] = $this->settings(11);
        return view('frontend.thankyou',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelPayment()
    {
        $data['fb'] = $this->settings(1);
        // $data['linkedin'] = $this->settings(2);
        $data['instagram'] = $this->settings(3);
        $data['twitter'] = $this->settings(4);
        $data['email'] = $this->settings(5);
        $data['phone'] = $this->settings(6);
        $data['analytics'] = $this->settings(7);
        $data['og_script'] = $this->settings(8);
        $data['google_tag_manager'] = $this->settings(10);
        $data['google_tag_manager_no_script'] = $this->settings(11);
        return view('frontend.cancel',$data);
    }

    public function cancel()
    {
        return redirect()->route('frontend.thankyou',['id'=>$order_id, 'status'=>"Not Paid"])->with('error','Payment Not Successful');
    }

    public static function http_build_query_for_curl( $arrays, &$new = array(), $prefix = null ) {
        if ( is_object( $arrays ) ) {
            $arrays = get_object_vars( $arrays );
        }

        foreach ( $arrays AS $key => $value ) {
            $k = isset( $prefix ) ? $prefix . '[' . $key . ']' : $key;
            if ( is_array( $value ) OR is_object( $value )  ) {
                self::http_build_query_for_curl( $value, $new, $k );
            } else {
                $new[$k] = $value;
            }
        }
        return $new;
    }

    public function update(Request $request, $id)
    {
        /*
        domain_id:11
        customer_id:1
        price_plan_type_of_work_id:1
        price_plan_level_id:1
        price_plan_urgency_id:1
        price_plan_no_of_page_id:1
        total_amount:1
        grand_total_amount:1
        manual_discount_amount:0.0
         */
        $data['status_id'] = 1;
        $data['order_id'] = $id;
        $data['customer_id'] = $request->customer_id ?? null;
        $data['lead_id'] = $request->lead_id ?? null;
        $data['instructions'] = $request->instructions ?? null;
        $data['coupon_id'] = $request->coupon_id ?? null;
        $data['topic'] = $request->topic ?? null;
        $data['price_plan_type_of_work_id'] = $request->price_plan_type_of_work_id;
        $data['price_plan_level_id'] = $request->price_plan_level_id;
        $data['price_plan_urgency_id'] = $request->price_plan_urgency_id;
        $data['price_plan_no_of_page_id'] = $request->price_plan_no_of_page_id;
        $data['price_plan_indentation_id'] = $request->price_plan_indentation_id ?? null;
        $data['price_plan_subject_id'] = $request->price_plan_subject_id ?? null;
        $data['price_plan_style_id'] = $request->price_plan_style_id ?? null;
        $data['price_plan_language_id'] = $request->price_plan_language_id ?? null;
        $data['total_amount'] = $request->total_amount;
        $data['manual_discount_amount'] = $request->manual_discount_amount;
        $data['discount_amount'] = $request->discount_amount;
        $data['addons_amount'] = $request->addons_amount;
        $data['service_amount'] = $request->service_amount;
        $data['addOns'] = $request->addOns;
        $data['grand_total_amount'] = $request->grand_total_amount;
        $data['line_spacing'] = $request->line_spacing;
        $data['reference'] = $request->reference;
        $data['font_style'] = $request->font_style;
        $data['created_by'] = null;
        $data['domain_id'] = config('app.domain_id');
        // dd($data);
        $data = self::http_build_query_for_curl($data);
        $url = 'https://staging.katibeen.com/api/v1/orders/update-order';
        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if ($response && $response->status == 1) {
            return redirect()->route('frontend.preview', ['id' => base64_encode($response->data)]);
        } else {
            return response()->json(['status' => 0, 'order_id' => null]);
        }
    }

    private function settings($id)
    {
        return Setting::find($id, ['value']);
    }
}