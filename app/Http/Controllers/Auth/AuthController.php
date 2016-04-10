<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Laravel\Socialite\Facades\Socialite;

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

    protected function socialValidator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users'
        ]);
    }

    protected function socialLogInValidator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:255|exists:users',
            'email' => 'required|email|max:255|exists:users'
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

    protected function createGoogleUser(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'isGoogleAccount'=>true
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
        if (!(User::where('id', $request->id)->first()->isSuperAdmin)){
            User::destroy($request->id);
        }
        return back();
    }

    public function getSocialRedirect($provider){
        $providerKey = \Config::get('services.' . $provider);
        if(empty($providerKey))
            return view('pages.status')
                ->with('error','No such provider');

        return Socialite::driver( $provider )->redirect();
    }

    public function getSocialHandle($provider){
        if (Auth::guest()){
            $socialUser = Socialite::driver($provider)->user();

            $matchUser = ['name' => $socialUser->name, 'email' => $socialUser->email];

            $registeredUser = User::where($matchUser)->first();
            if (is_null($registeredUser)){
                $valUser = ['name' => "", 'email' => ""];
            }else{
                $valUser = ['name' => $registeredUser->name, 'email' => $registeredUser->email];
            }

            $validator = $this->socialLogInValidator($valUser);

            if ($validator->fails()){
                $validator->errors()->add('google', 'Antud google kasutaja ei ole administraator');
                return redirect('/login')->withErrors($validator);
            }else{
                Auth::guard($this->getGuard())->login($registeredUser);
                return redirect('/admin');
            }
        }else{
            $socialUser = Socialite::driver($provider)->user();
            $newUser = ['name' => $socialUser->name, 'email' => $socialUser->email];

            $validator = $this->socialValidator($newUser);

            if ($validator->fails()){
                $validator->errors()->add('google', 'Antud kasutaja on juba registreeritud');
            }else{
                $this->createGoogleUser($newUser);
            }
            return redirect('/admin/register')->withErrors($validator);
        }
    }
}
