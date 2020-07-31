<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Validator;
use Session;

class ClientController extends Controller
{
    //
    public function login(Request $request){
      return view('auth.login');
    }

    public function register(Request $request){
      return view('auth.register');
    }

    public function logout(Request $request){
      Auth::logout();
      Session::flush();
      return redirect('/login')->with('status', 'Logged out');
    }


    // POST
    public function login_post(Request $request){
      $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $email = strval($request->input('email'));
        $password = strval($request->input('password'));

        Auth::attempt(['email'=>$email, 'password'=>$password]);

        return redirect('/')->with('status', 'Logged in');

    }

    public function register_post(Request $request){

      $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $email = strval($request->input('email'));
        $name = strval($request->input('name'));
        $password = strval($request->input('password'));

        $pos_user = User::where('email', $email)->first();
        if($pos_user){
          return back()->with('status', 'Another user with the same email already exists.');
        }

        $user = new User;
        $user->password = Hash::make($password);
        $user->email = $email;
        $user->name = $name;
        $user->save();

        Auth::attempt(['email'=>$email, 'password'=>$password]);

        return redirect('/')->with('status', 'Logged in');
    }
}
