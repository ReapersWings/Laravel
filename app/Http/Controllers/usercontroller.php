<?php

namespace App\Http\Controllers;

use App\Mail\mainemail;
use App\Models\User;
//use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class usercontroller extends Controller
{   
    //laravel part 10 start
    public function register(){
        return view('register');
    }
    public function f_register(request $request){
        $formregister=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users','email')],
            'age'=>['numeric','required'],
            'password'=>'required|confirmed'
        ]);
        
        $formregister['password']=bcrypt($request->password);

        
        $user=User::create($formregister);
        //dd($user);
        auth()->login($user);
        Mail::to($user->email)->send(new mainemail($user));
        return redirect('/listing')->with('login','login successful');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('message','logout successful');
    }
    //mail password :span njmb njyq xull
    //laravel part 10 end
    //laravel part 11 start
    public function login(){
        return view('login');
    }
    public function f_login(Request $request){
        $formlogin=$request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        if (auth()->attempt($formlogin)) {
            $request->session()->regenerate();
            return redirect('/listing')->with('login','login successful');
        }else{
            return back()->with('message','Login failed!');
        }
    }
    //laravel part 11 end
}
