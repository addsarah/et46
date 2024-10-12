<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\Sikap;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SikapController extends Controller
{
    // Menampilkan daftar sikap
    public function index(Request $request)
    {
        $sikap=Sikap::orderBy('id','asc')->with('user','siswa');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            Sikap::whereHas('user','siswa', function ($query) use ($filterKeyword){
                $query->where('materi', "%$filterKeyword%");
            })->with('user','siswa');
        }

        $sikap = Sikap::where('users_id', auth()->Id())->paginate(25);
        return view('sikap.index', compact('sikap'));


    }

    // Menampilkan formulir tambah sikap
    public function create()
    {
        $users = User::all();
        $siswas = Siswa::all();


        // return $users;

        return view('sikap.create', compact('users','siswas'));    }

    // Menyimpan sikap baru ke dalam database
    public function store(Request $request)
    {
        $input = $request->all();

        // Validasi input
        $validator = Validator::make($input, [
            'siswas_id' => 'required',
            'users_id' => 'required',
            'nilai' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->route('sikap.create')->withInput()->withErrors($validator);
        }

        Sikap::create($input);

        Alert::success('Berhasil', 'Data Sikap Berhasil ditambahkan');
        return redirect()->route('sikap.index')->with('success', 'Data sikap berhasil ditambahkan.');
    }

    // Menampilkan detail sikap
    public function show(string $id)
    {
        $sikap = Sikap::findOrfail($id);
        $sikap->load('user','siswa');

        return view('sikap.show', compact('sikap'));
    }

    // Menampilkan formulir untuk mengedit sikap
    public function edit(string $id)
    {
        $sikap = Sikap::findOrfail($id);
        $users = User::all();
        $siswas = Siswa::all();

        return view('sikap.edit', compact('sikap','users','siswas'));
    }

    // Memperbarui sikap dalam database
    public function update(Request $request, string $id)
    {
        $sikap = Sikap::findOrfail($id);
        $input = $request->all();

        $input = $request->all();
        $validator = Validator::make($input, [
            'siswas_id' => 'required',
            'users_id' => 'required',
            'nilai' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sikap.edit', [$id])->withInput()->withErrors($validator);
        }

        $sikap->update($input);

        Alert::success('Berhasil', 'Data Sikap Berhasil diperbarui');

        return redirect()->route('sikap.index')->with('success', 'Data sikap berhasil diperbarui.');
    }

    // Menghapus sikap dari database
    public function destroy(string $id)
    {
        $data = Sikap::findOrfail($id);

        $data->delete();

        return redirect()->route('sikap.index')->with('success', 'Data sikap berhasil dihapus.');
    }
}