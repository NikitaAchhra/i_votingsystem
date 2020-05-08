<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use\Laravel\Socialite\Facades\Socialite;
use App\User;

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

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $email=$user->email;
        $exist=User::where('user_email',$email)->first();
        if($exist){

            if($exist->status==2){

                return view('admin/admin')->with('user1',$exist);

            }

                

            return view('layouts/app')->with('user1',$exist);
            
        }
        else
        {
            
            if (preg_match('/@ves.ac.in$/',$email, $matches)) {
            
                $create_user = new User;
                $create_user->user_name = $user->name;
                $create_user->user_email = $user->email;
                if (preg_match('/^[0-9]{4}+.[a-z]+.[a-z]+@ves.ac.in$/', $email, $matches)) {
            
                    $create_user->status=0;
                 }
                else{
                    $create_user->status=1;
                }
                $create_user->save();


                $find_user=User::where('user_email',$email)->first();
                return view('layouts/app')->with('user1',$find_user);
                
            }
    
            return view('layouts/index');
        }

        
        
    

    }
}
