<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Ulangan_harian;
use App\Models\Siswa as ModelsSiswa;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class Ulangan_harianController extends Controller
{
    public function index(Request $request)
    {
        $ulangan_harian = Ulangan_harian::orderBy('id', 'asc')->with('user', 'siswa','mapel');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            Ulangan_harian::whereHas('user','siswa','mapel', function ($query) use ($filterKeyword) {
                $query->where('name', "%$filterKeyword");
            })->with('user', 'siswa','mapel');
        }

        $ulangan_harian = $ulangan_harian -> where('users_id',auth()->Id())->paginate(25); 
        return view('ulangan_harian.index', compact('ulangan_harian'));
    }

    public function create()
    {
        $ulangan_harian = Ulangan_harian::all();
        $siswa = Siswa::all();
        $mapel = Mapel::all();
        $user = User::all();

        // return $posts;
        // return $Siswas;

        return view('ulangan_harian.create', compact('ulangan_harian', 'siswa','mapel','user'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'mapels_id' => 'required',
            'siswas_id' => 'required',
            'nilai_tugas' => 'required|numeric',
            'nilai_ulangan' => 'required|numeric',
        ]);

        $input['users_id'] = Auth::id();

        if ($validator->fails()) {
            return redirect()->route('ulangan_harian.create')->withInput()->withErrors($validator);
        }

        Ulangan_harian::create($input);

        Alert::success('Berhasil', 'Data Ulangan Harian Berhasil ditambahkan');
        return redirect()->route('ulangan_harian.index')->with('success', 'Ulangan harian berhasil ditambah');
    }

    public function show(string $id)
    {
        $ulangan_harian = Ulangan_harian::findOrfail($id);
        $ulangan_harian->load('user', 'siswa','mapel');

        return view('ulangan_harian.show', compact('ulangan_harian'));
    }

    public function edit(string $id)
    {
        $ulangan_harian = Ulangan_harian::findOrFail($id);
        $users = User::all();
        $mapels = Mapel::all();
        $siswas = Siswa::all();

        return view('ulangan_harian.edit', compact('ulangan_harian', 'users', 'siswas', 'mapels'));

    }

    public function update(Request $request, string $id)
    {

        // Ambil data ulangan harian yang akan diupdate
        $ulangan_harian = Ulangan_harian::findOrfail($id);

        // Validasi input
        $input = $request->validate([
            'mapels_id' => 'required',
            'siswas_id' => 'required',
            'nilai_tugas' => 'required|numeric',
            'nilai_ulangan' => 'required|numeric',
        ]);

        // Update data ulangan harian
        $ulangan_harian->update($input);

        Alert::success('Edit','Data Ulangan Harian Berhasil diperbarui');
        
        return redirect()->route('ulangan_harian.index')->with('success', 'Ulangan harian berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $data = Ulangan_harian::findOrfail($id);
        $data->delete();
        return redirect()->route('ulangan_harian.index')->with('status', 'Ulangan harian berhasil di hapus');
    }
}
