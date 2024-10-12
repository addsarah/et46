<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AddUserController extends Controller
{
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Otentikasi berhasil, alur otentikasi khusus Anda
            return redirect()->route('dashboard');
        }

        // Otentikasi gagal
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
    
    public function index(Request $request)
    {
        $user=User::orderBy('name','asc');
        $filterKeyword = $request->get('keyword');
        if($filterKeyword)
        {
            $user = User::where('name','LIKE',"%$filterKeyword")->paginate(1);
        }  

        $user = $user -> paginate(30); 

        return view('adduser.index',compact('user'));
    }

    public function create()
    {
        return view('adduser.create');
    }

   
    public function store(Request $request)
    {
        $simpan = $request->all();
        $validasi = Validator::make($simpan,[
            'name'=>'required|max:150',
            'email'=>'required|email|max:150|unique:users',
            'password'=>'required|min:7',
        ]);
        if($validasi->fails())
        {
            return redirect()->route('adduser.create')->withInput()->withErrors($validasi);
        }

        $simpan['password'] = bcrypt($simpan['password']);
        User::create($simpan);
        Alert::success('Berhasil', 'Data sudah tersimpan');
        return redirect()->route('adduser.index')->with('success','User berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $user = User::findOrfail($id);
        return view('adduser.show',compact('user'));
    }

   
    public function edit(string $id)
    {
        $user = User::findOrfail($id);
        return view('adduser.edit',compact('user'));
    }

    
    public function update(Request $request, string $id)
    {
        $user = User::findOrfail($id);
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:150',
            'email'=>'required|email|max:150|unique:users,email,'.$id,
            'password'=>'required|min:7',
        ]);

        if($validasi->fails())
        {
            return redirect()->route('adduser.create')->withInput()->withErrors($validasi);
        }

        if($request->input('password'))
        {
            $data['password'] = bcrypt($data['password']);
        } else 
        {
            $data = Arr::except($data,['password']);
        }
        $user->update($data);
        Alert::success('Berhasil', 'Perubahan sudah tersimpan');
        return redirect()->route('adduser.index')->with('success','User berhasil ditambah');
    }

    
    public function destroy(string $id)
    {
        $data = User::findOrfail($id);
        $data->delete();
        Alert::success('Berhasil', 'Data sudah dihapus');
        return redirect()->route('adduser.index')->with('status','User berhasil di hapus');
    }
}