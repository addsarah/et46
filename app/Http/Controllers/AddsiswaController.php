<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AddsiswaController extends Controller
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

        $siswa = Siswa::orderBy('id', 'asc');


        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            $siswa->where('nama_siswa', 'like', "%$filterKeyword%");
        }

        $siswa = $siswa->paginate(36);

        return view('addsiswa.index', compact('siswa'));
    }

    public function create()
    {

        return view('addsiswa.create');
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_siswa' => 'required|max:200',
            'kelas' => 'required',
            'kompetensi' => 'required',
            'email' => 'required|email|max:150|unique:siswas',
            'password' => 'required|min:8',
        ]);
    
        $data['password'] = bcrypt($data['password']);
    
        Siswa::create(array_merge($data));
    
        Alert::success('Berhasil', 'Data Siswa Berhasil Ditambahkan');
        return redirect()->route('addsiswa.index')->with('success', 'data siswa berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $siswa = Siswa::findOrfail($id);

        return view('addsiswa.show',compact('siswa'));
    }

   
    public function edit(string $id)
    {
        $siswa = Siswa::findOrfail($id);

        return view('addsiswa.edit',compact('siswa'));
    }

    
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $data = $request->validate([
            'nama_siswa' => 'required|max:200',
            'kelas' => 'required',
            'kompetensi' => 'required',
            'email' => 'required|email|max:150|unique:siswas,email,' . $id,
            'password' => 'required|min:8',
        ]);

        // Hapus bagian ini, tidak diperlukan
        // if ($request->fails()) {
        //     return redirect()->route('addsiswa.create')->withInput()->withErrors($request);
        // }

        if ($request->input('password')) {
            $data['password'] = bcrypt($data['password']);
        } else {
            $data = Arr::except($data, ['password']);
        }

        $siswa->update($data);

        Alert::success('Berhasil', 'Perubahan sudah tersimpan');

        return redirect()->route('addsiswa.index')->with('success', 'siswa berhasil diperbarui');
    }

    
    public function destroy(string $id)
    {
        $data = Siswa::findOrfail($id);
        $data->delete();

        Alert::success('Berhasil', 'Data sudah dihapus');
        return redirect()->route('addsiswa.index')->with('status','siswa berhasil di hapus');
    }

    
}