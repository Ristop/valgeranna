<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
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
    //protected $redirectTo = '/admin';
    //protected $redirectPath = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        //$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegister(){
        if (Auth::guest()) {
            return view('auth.login');
        }
        $users = User::all();

        return view('auth.register', compact('users'));
    }

    public function register(Request $request){
        if (Auth::guest()) {
            return view('auth.login');
        }
        $validator = $this->validator($request->all());

        if ($validator->fails()){
            $this->throwValidationException(
                $request, $validator
            );
        }
        $this->create($request->all());
        return redirect('/admin/register');

    }

    // Delete post
    public function removeUser(Request $request){
        if (Auth::guest()){
            return view('auth.login');
        }
        User::destroy($request->id);
        return back();
    }
}
