<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo   = '/admin';

    protected $guard        = 'admin';

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check())
        {
            return redirect('admin');
        }

        return view('admin.auth.login');
    }
    
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    
    public function resetPassword()
    {
        return view('admin.auth.passwords.email');
    }
    
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }    
}
