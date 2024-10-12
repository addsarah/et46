<?php

namespace App\Http\Controllers;

use App\Models\Kartu_soal;
use App\Models\Kisi_kisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Kartu_soalController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id(); // Get the ID of the authenticated user

        $kartu_soal = Kartu_soal::orderBy('id', 'asc')->with('kisi_kisi', 'user');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            $kartu_soal->where('materi', "%$filterKeyword");
        }

        $kartu_soal = $kartu_soal->paginate(25);

        return view('kartu_soal.index', compact('kartu_soal'));
    }

    public function create()
    {
        $kisi_kisis = Kisi_kisi::all();
        $users = User::all();


        return view('kartu_soal.create', compact('kisi_kisis','users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kisi_kisis_id' => 'required',
            'kj' => 'required',
            'desk_soal' => 'required',
            'buac' => 'required',
        ]);
    
        $data['users_id'] = Auth::id(); // Assign the authenticated user's ID
    
        Kartu_soal::create($data);
    
        Alert::success('Berhasil', 'Data Kartu Soal Berhasil ditambahkan');
        return redirect()->route('kartu_soal.index')->with('success', 'Kartu_soal berhasil ditambah');
    }

    public function show(string $id)
    {
        $kartu_soal = Kartu_soal::findOrfail($id);
        $kartu_soal->load('kisi_kisi','user');

        return view('kartu_soal.show', compact('kartu_soal'));
    }

    public function edit(string $id)
    {
        $kartu_soal = Kartu_soal::findOrFail($id);

        $kisi_kisis = Kisi_kisi::all(); // Perbaiki nama variabel menjadi $kisi_kisis
        $users = User::all();

        return view('kartu_soal.edit', compact('kartu_soal', 'kisi_kisis', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kisi_kisis_id' => 'required',
            'kj' => 'required',
            'desk_soal' => 'required',
            'buac' => 'required',
        ]);
    
        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return redirect()->route('kartu_soal.edit', [$id])->withInput()->withErrors($validator);
        }
    
        // Update data
        $kartu_soal = Kartu_soal::findOrFail($id);
        $kartu_soal->update($request->all());
    
        Alert::success('Berhasil', 'Data Kartu Soal Berhasil diperbarui');
        return redirect()->route('kartu_soal.index')->with('success', 'Kartu soal berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Kartu_soal::findOrfail($id);
        $data->delete();

        return redirect()->route('kartu_soal.index')->with('status', 'Kartu soal berhasil di hapus');
    }
}
