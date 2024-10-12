<?php

namespace App\Http\Controllers;

use App\Models\Akhir_semester;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Akhir_semesterController extends Controller
{
    
    public function index(Request $request)
    {
        $akhir_semester= Akhir_semester::orderBy('users_id','asc')->with('user', 'siswa','mapel');

        $filterKeyword = $request->keyword;
        if($filterKeyword)
        {
            Akhir_semester::whereHas('user','siswa','mapel', function ($query) use ($filterKeyword) {
                $query->where('name', "%$filterKeyword");
            })->with('user','siswa','mapel',);
        }

        $akhir_semester = $akhir_semester -> where('users_id',auth()->Id())->paginate(25); 

        // return $akhir_semester;
        return view('akhir_semester.index',compact('akhir_semester'));
    }

    public function create()
    {
        $akhir_semester = Akhir_semester::all();
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        $user = User::all();


        // return $siswa;
        // return $users;

        return view('akhir_semester.create', compact('akhir_semester', 'user', 'siswa','mapel'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
        'nilai_akhir_semester' => 'required|numeric',
        'siswas_id' => 'required',
        'mapels_id' => 'required',
        'users_id' => 'required',
        ]);

        $input['users_id'] = Auth::id();

        if($validator->fails())
        {
            return redirect()->route('akhir_semester.create')->withInput()->withErrors($validator);
        }

        Akhir_semester::create($input);
        Alert::success('Berhasil', 'Data Akhir Semester Berhasil ditambahkan');
        return redirect()->route('akhir_semester.index')->with('success','Akhir semester berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $akhir_semester = Akhir_semester::findOrfail($id);
        $akhir_semester->load('user', 'siswa','mapel');

        return view('akhir_semester.show',compact('akhir_semester'));
    }

   
    public function edit(string $id)
    {
       
        $akhir_semester = Akhir_semester::findOrfail($id);
        $akhir_semester->load('User', 'Siswa','Mapel');

        $users = User::all();
        $mapels = Mapel::all();
        $siswas = Siswa::all();


        return view('akhir_semester.edit',compact('akhir_semester', 'users', 'siswas','mapels'));
    }

    
    public function update(Request $request, $id)
    {
         // Ini perintah untuk update data
        $akhir_semester = Akhir_semester::findOrFail($id);

        $input = $request->validate([
            'nilai_akhir_semester' => 'required|numeric',
            'mapels_id' => 'required',
            'siswas_id' => 'required',
            'users_id' => 'required',
        ]);

        $akhir_semester->update($input);
        Alert::success('Berhasil', 'Data Akhir Semester Berhasil diperbarui');

        return redirect()->route('akhir_semester.index')->with('success', 'Akhir_semester berhasil di edit');
    }

    
    public function destroy(string $id)
    {
        $data = Akhir_semester::findOrfail($id);
        $data->delete();
        return redirect()->route('akhir_semester.index')->with('status','Akhir_semester berhasil di hapus');
    }
}
