<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
        return view('admin.auth.login');
    }

     /**
     * Check the user authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' =>'required'
        ];

        $validator = \Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            dd($validator->getMessageBag());
            return redirect()->back()->withInput($request->all)->withErrors($validator->getMessageBag());
        }

        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        if(Auth::attempt(['email'=>$email,'password'=>$password,'status'=>1,'is_verified'=>1],$remember))
        {
            return redirect('admin/dashboard')->with('success','Welcome to dashboard');
        }

        if(Auth::attempt(['email'=>$email,'password'=>$password,'status'=>0,'is_verified'=>1],$remember))
        {
            Auth::logout();
            return redirect()->back()->with('error','Your account is deactivated');
        }

        if(Auth::attempt(['email'=>$email,'password'=>$password,'status'=>1,'is_verified'=>0],$remember))
        {
            Auth::logout();
            return redirect()->back()->with('error','Your account is not verified');
        }

        else
        {
            return redirect()->back()->with('error','Wrong Credentials')->withInput($request->all());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
