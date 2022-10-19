<?php

namespace App\Http\Controllers\Userarea\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('userarea.auth.login');
    }

     /**
     * Check the user authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function authenticate(Request $request)
     {
        $this->validate($request, [
            'email'  => 'required|email|max:191',
            'password' => 'required|min:6',
        ]);

        $url = 'https://staging.katibeen.com/api/v1/customers/show';
        $data['email'] = $request->email;
        $data['domain_id'] = config('app.domain_id');

        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            if(\Hash::check($request->password,$response->data->password)){
                session(['current_user'=> $response->data]);
                return response()->json(['status' => 1, 'message' => 'Welcome To Dashboard']);
                // return redirect()->route('frontend.order');
            }else{
                return response()->json(['status' => 0, 'message' => 'Please Enter Correct Email and Password']);
                // return redirect()->back()->with('error','Please Enter Correct Email and Password')->withInput($request->all());
            }
        }
        return response()->json(['status' => 0, 'message' => 'Please Enter Correct Email and Password']);
        // return redirect()->back()->with('error','Please Enter Correct Email and Password ')->withInput($request->all());
    }

    /**
     * Check the user authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userareaAuthenticate($email)
    {
        $url = config('app.crm_api_url').'/customers/show';
        $data['email'] = $email;
        $data['domain_id'] = config('app.domain_id');

        $response = curlPostRequest($url, $data);
        $response = json_decode($response);
        if(isset($response->status) && $response->status==1){
            // if(\Hash::check($request->password,$response->data->password)){
            session(['current_user'=> $response->data]);
            return redirect()->route('userarea.orders.index');
            // }else{
                // return redirect()->back()->with('error','Wrong Credentials')->withInput($request->all());
            // }
        }
        return redirect()->back()->with('error','Wrong Credential ')->withInput(request()->all());
    }

    public function logout()
    {
        Session::forget('current_user');
        return redirect()->route('frontend.index');
    }
}
