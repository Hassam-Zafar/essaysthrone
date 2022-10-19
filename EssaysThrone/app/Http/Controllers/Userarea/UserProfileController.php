<?php

namespace App\Http\Controllers\Userarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userarea.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    { 
        $data['user'] = current_user();
        return view('userarea.profile',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
         $this->validate($request, [
            'first_name' => 'required|max:191',
            // 'last_name' => 'required|max:191',
            'phone' => 'required|max:191',
            // 'email'  => 'required|email|max:191',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $url = 'https://staging.katibeen.com/api/v1/customers/update';
        $data = $request->all();
        unset($data['_token']);
        $data['domain_id'] = 2;
        $data['email'] = current_user()->email ?? "";
        $data['customer_id'] = $id;    

        $response = curlPostRequest($url, $data);
        $response = json_decode($response);

        if(isset($response->status) && $response->status==1){
            Session::forget('current_user');
            Session::put('current_user', $response->data);
            return redirect()->back()->with('success','Profile updated successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong.')->withInput($request->all());
        }
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
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
