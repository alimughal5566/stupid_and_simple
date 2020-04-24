<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
//    protected $redirectTo ='/admin-dash';
    protected function redirectTo(){
        return redirect()->route('admindash');
    }


    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $email = $user['email'];
        $password = $user['password'];
        $requestPassword=$request->password;
        if (Hash::check($requestPassword,$password) && $email)
        {
            Auth::login($user);
            return $this->redirectTo();
        }
        else{
            return redirect()->back()->with('message','Invalid Email or Password')->withInput(['email'=>$email]);
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
