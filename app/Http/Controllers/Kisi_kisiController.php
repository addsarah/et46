<?php

namespace App\Http\Controllers;

use App\Models\Kisi_kisi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Kisi_kisiController extends Controller
{
    public function index(Request $request)
    {
        $kisi_kisi = Kisi_kisi::orderBy('kompeda', 'asc')->with('user');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            Kisi_kisi::whereHas('user', function ($query) use ($filterKeyword) {
                $query->where('kompeda', "%$filterKeyword");
            })->with('user');
        }

        $kisi_kisi = Kisi_kisi::where('users_id', auth()->Id())->paginate(25);

        return view('kisi_kisi.index', compact('kisi_kisi'));
    }

    public function create()
    {
        $users = User::all();

        // return $posts;

        return view('kisi_kisi.create', compact('users'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'kompeda' => 'required',
            'materi' => 'required',
            'rako' => 'required',
            'indikator' => 'required',
            'users_id' => 'required',
        ]);

        $input['users_id'] = Auth::id();

        if ($validator->fails()) {
            return redirect()->route('kisi_kisi.create')->withInput()->withErrors($validator);
        }

    
        Kisi_kisi::create($input);

        Alert::success('Berhasil', 'Data Kisi - kisi Berhasil ditambahkan');
        return redirect()->route('kisi_kisi.index')->with('success', 'Kisi_kisi berhasil ditambah');
    }

    public function show(string $id)
    {
        $kisi_kisi = Kisi_kisi::findOrfail($id);
        $kisi_kisi->load('user');

        return view('kisi_kisi.show', compact('kisi_kisi'));
    }

    public function edit(string $id)
    {
        $kisi_kisi = Kisi_kisi::findOrfail($id);
        $users = User::all();

        // return compact('Kisi_kisi', 'users');

        return view('kisi_kisi.edit', compact('kisi_kisi', 'users'));
    }

    public function update(Request $request, string $id)
    {
        // ini perintah untuk update data
        $kisi_kisi = Kisi_kisi::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'kompeda' => 'required',
            'materi' => 'required',
            'rako' => 'required',
            'indikator' => 'required',
            'users_id' => 'required',
        ]);

        //ini perintah untuk cek validasi
        if ($validator->fails()) {
            return redirect()->route('kisi_kisi.edit', [$id])->withInput()->withErrors($validator);
        }

        $kisi_kisi->update($input);
        Alert::success('Berhasil','Kisi Kisi Berhasil diperbarui');
        Alert::success('Berhasil', 'Data Kisi - kisi Berhasil diperbarui');
        return redirect()->route('kisi_kisi.index')->with('success', 'Kisi kisi berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Kisi_kisi::findOrfail($id);
        $data->delete();
        return redirect()->route('kisi_kisi.index')->with('status', 'Kisi kisi berhasil di hapus');
    }
}
