<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
        
    public function Index(){
        return view('siswa.siswa_login');   
    } // end mehtod 


    public function Dashboard(){
        return view('siswa.index');
    }// end mehtod 


    public function Login(Request $request){
        // dd($request->all());

        $check = $request->all();
        if(Auth::guard('siswa')->attempt(['email' => $check['email'], 'password' => $check['password']  ])){
            return redirect()->route('siswa.dashboard')->with('error','Siswa Berhasil Login');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }

    } // end mehtod 


    public function siswaLogout(){

        Auth::guard('siswa')->logout();
        return redirect()->route('siswa_login_form')->with('error','Siswa berhasil Logout');

    } // end mehtod 


    public function siswaRegister(){

        return view('siswa.siswa_register');

    } // end mehtod 

    public function siswaRegisterCreate(Request $request){

        // dd($request->all());

        Siswa::insert([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'kompetensi' => $request->kompetensi,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

         return redirect()->route('siswa_login_form')->with('error','Akun Siswa Berhasil dibuat');

    } // end mehtod 

}
