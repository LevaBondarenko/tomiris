<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    public function postLogin()
    {
        $rules = array('email'=>'required','password'=>'required');
        $valudator = Validator::make(Input::all(),$rules);

        if($valudator->fails())
        {
            return redirect('login')->withErrors($valudator);
        }

        $auth = Auth::attempt(array(
            'email'=>Input::get('email'),
            'password'=>Input::get('password')
        ),false);

        if(! $auth){
            return redirect('login')->withErrors(array('Ошибка авторизации'));
        }
        return redirect('admin');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   protected function create(Request $data)
    {
       return User::create([
           'name' => $data->name,
           'email' => $data->email,
           'password' => bcrypt($data->password),
        ]);
       return redirect('admin')->with('status','Юзер создан');
   }



    protected function logout()
    {
        Auth::logout();
        return redirect('admin/')->with('status','Вы вышли');
    }


}
