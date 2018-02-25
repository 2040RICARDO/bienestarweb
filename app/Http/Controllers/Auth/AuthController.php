<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Publicacion;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;



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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

       protected function getLogin()
    {
        $rutaarchivos= "../storage/archivos/";
        $publicacion =\DB::table('publicacion')->where('estado',1)->get();
        return view("principal",compact('publicacion','rutaarchivos'));
    }


       

public function postLogin(Request $request)
   {
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
    ]);



    $credentials = $request->only('username', 'password');

    if ($this->auth->attempt($credentials, $request->has('remember')))
    {

        
        return view('admin');
    }

    return view("principal");

    }



//login

 //registro   


        protected function getRegister()
    {
        return view("auth.registro");
    }


        

    protected function postRegister(Request $request)

   {
    $this->validate($request, [
        'name' => 'required',
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);


    $data = $request;


    $user=new User;
    $user->name=$data['name'];
    $user->username=$data['username'];
    $user->email=$data['email'];
    $user->password=bcrypt($data['password']);


    if($user->save()){

         return redirect('/');
               
    }
   
}

//registro

protected function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('/');
    }


}
