<?php

namespace App\Http\Controllers;

use App\Models\Kktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class KktpController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id(); // Ambil ID pengguna yang sedang login

        $kktp = Kktp::orderBy('elemen', 'asc')->where('users_id', $userId)->with('user');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            $kktp->where('elemen', 'like', "%$filterKeyword");
        }

        $kktp = $kktp->paginate(25);

        return view('kktp.index', compact('kktp'));
    }

    public function create()
    {
        $users = User::all();

        return view('kktp.create', compact('users'));
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'elemen' => 'required|max:255',
            'tp' => 'required|max:255',
            'interval' => 'required',
        ]);

        $data['users_id'] = Auth::id(); // Assign the authenticated user's ID

        Kktp::create([
            'users_id' => $request->users_id,
            'elemen' => $request->elemen,
            'tp' => $request->tp,
            'interval' => $request->interval
        ]);

        Alert::success('Berhasil', 'Data KKTP Berhasil ditambah');
        return redirect()->route('kktp.index')->with('success', 'kktp berhasil ditambah');
    }

    public function show(string $id)
    {
        $kktp = Kktp::findOrFail($id);
        $kktp->load('User');
        return view('kktp.show', compact('kktp'));
    }

    public function edit(string $id)
    {
        $kktp = Kktp::findOrFail($id);
        $users = User::all();

        return view('kktp.edit', compact('kktp', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $kktp = Kktp::findOrFail($id);
        $data = $request->validate([
            'elemen' => 'required|max:255',
            'tp' => 'required|max:255',
            'interval' => 'required',
        ]);

        
        $kktp->update($data);

        Alert::success('Berhasil', 'Data KKTP Berhasil diperbarui');
        return redirect()->route('kktp.index')->with('success', 'kktp berhasil diedit');
    }

    public function destroy(string $id)
    {
        $kktp = Kktp::findOrFail($id);
        $kktp->delete();

        Alert::success('Berhasil', 'Data sudah dihapus');
        return redirect()->route('kktp.index')->with('status', 'kktp berhasil dihapus');
    }
}