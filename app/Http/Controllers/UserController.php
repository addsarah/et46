<?php

namespace App\Http\Controllers;

use Carbon\Carbon; 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function Index(){
        return view('auth.login');
    } // END METHOD 


    public function UserDashboard(){
        return view('user.index');
    }// END METHOD 


 public function UserLogin(Request $request){
        // dd($request->all());

        $check = $request->all();
        if(Auth::guard('user')->attempt(['email' => $check['email'], 'password' => $check['password']  ])){
            return redirect()->route('user.dashboard')->with('error','user Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }

    } // end mehtod 


    public function UserLogout(){

         Auth::guard('user')->logout();
        return redirect()->route('user_login_form')->with('error','user Logout Successfully');
    } // end mehtod 


    public function UserRegister(){
        return view('auth.register');
    }// end mehtod 


    public function UserRegisterCreate(Request $request){

        // dd($request->all());

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

        Alert::success('Berhasil', 'Akun berhasil dibuat');
        return redirect()->route('user.dashboard');

    } // end mehtod 



}