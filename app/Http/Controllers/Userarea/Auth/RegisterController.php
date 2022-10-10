<?php

namespace App\Http\Controllers\Userarea\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

     /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
     public function showRegistrationForm()
     {
        return view('userarea.auth.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:191',
            // 'last_name' => 'required|max:191',
            'email'  => 'required|email|max:191',
            'password' => 'required|min:6',
            // 'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'required|min:6'
        ]);
        $url = 'https://staging.katibeen.com/api/v1/customers/save';
        $data = $request->all();
        unset($data['password_confirmation']);
        unset($data['_token']);
        $data['domain_id'] = config('app.domain_id');

        $response = curlPostRequest($url, $data);
        $response = json_decode($response);

        if(isset($response->status) && $response->status==1 && isset($response->is_already) && $response->is_already==1){
            if($request->ajax()){
                return response()->json(['status' => 2, 'message' => 'Already registered please login']);
            }else{
                return redirect()->back()->with('error','Already registered please login.')->withInput($request->all());
                // return redirect()->route('frontend.order')->with('success','Welcome');
            }
        }
        if(isset($response->status) && $response->status==1 && isset($response->is_already) && $response->is_already==0){
            Session::put('current_user', $response->data);
            if($request->ajax()){
                return response()->json(['status' => 1, 'message' => 'Welcome']);
            }else{
                return redirect()->route('frontend.order')->with('success','Welcome');
            }
            // return redirect()->route('frontend.order')->with('success','Welcome');
        }else{
            if($request->ajax()){
                return response()->json(['status' => 0, 'message' => 'Something went wrong']);
            }else{
                return redirect()->back()->with('error','Something went wrong.')->withInput($request->all());
            }
        }
    }
}
