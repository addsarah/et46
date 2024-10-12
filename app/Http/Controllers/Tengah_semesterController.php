<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Tengah_semester;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Tengah_semesterController extends Controller
{
    
    public function index(Request $request)
    {
        $tengah_semester = Tengah_semester::orderBy('id', 'asc')->with('user', 'siswa','mapel');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            Tengah_semester::whereHas('user','siswa','mapel', function ($query) use ($filterKeyword) {
                $query->where('name', "%$filterKeyword");
            })->with('user','siswa','mapel',);
        }

        $tengah_semester = $tengah_semester -> where('users_id',auth()->Id())->paginate(25); 

        return view('tengah_semester.index', compact('tengah_semester'));
    }


    public function create()
    {
        $tengah_semester = Tengah_semester::all();
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        $user = User::all();


        // return $suppliers;
        // return $barangs;

        return view('tengah_semester.create', compact('tengah_semester','user','siswa','mapel'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'nilai_tengah_semester'=>'required|numeric',
            'mapels_id'=>'required|max:150',
            'users_id'=>'required',
            'siswas_id'=>'required',
        ]);

        $input['users_id'] = Auth::id();

        if($validator->fails())
        {
            return redirect()->route('tengah_semester.create')->withInput()->withErrors($validator);
        }

        Tengah_semester::create($input);
        Alert::success('Berhasil', 'Data Tengah Semester Berhasil ditambahkan');
        return redirect()->route('tengah_semester.index')->with('success','Tengah_semester berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $tengah_semester = Tengah_semester::findOrfail($id);
        $tengah_semester->load('user', 'siswa','mapel');

        return view('tengah_semester.show',compact('tengah_semester'));
    }

   
    public function edit(string $id)
    {
        $tengah_semester = Tengah_semester::findOrfail($id);

        $users = User::all();
        $mapels = Mapel::all();
        $siswas = Siswa::all();

    
        return view('tengah_semester.edit',compact('tengah_semester', 'users', 'siswas','mapels'));
    }

    
    public function update(Request $request, $id)
    {
        $tengah_semester = Tengah_semester::findOrfail($id);

        // Validasi input
        $input = $request->validate([
            'nilai_tengah_semester' => 'required|numeric',
            'mapels_id' => 'required|max:150',
            'users_id' => 'required',
            'siswas_id' => 'required',
        ]);

        // Update data tengah semester
        $tengah_semester->update($input);

        // Tambahkan notifikasi atau pesan lainnya jika perlu
        Alert::success('Edit', 'Data Tengah Semester berhasil diperbarui');

        return redirect()->route('tengah_semester.index')->with('success', 'Tengah_semester berhasil di edit');
    }

    
    public function destroy(string $id)
    {
        $data = Tengah_semester::findOrfail($id);
        $data->delete();
        return redirect()->route('tengah_semester.index')->with('status','Tengah_semester berhasil di hapus');
    }
}
