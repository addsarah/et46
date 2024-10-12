<?php

namespace App\Http\Controllers;

use App\Models\Atp;
use App\Models\Kktp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AtpController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id(); // Get the ID of the authenticated user

        $atp = Atp::orderBy('elemen', 'asc')->where('users_id', $userId)->with('kktp', 'user');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            $atp->where('elemen', 'like', "%$filterKeyword%");
        }

        $atp = $atp->paginate(25);

        return view('atp.index', compact('atp'));
    }

    public function create()
    {
        $kktps = Kktp::all();
        $users = User::all();

        return view('atp.create', compact('kktps','users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kktps_id' => 'required',
            'elemen' => 'required|max:254',
            'cp' => 'required|max:254',
            'tp' => 'required|max:254',
            'atp' => 'required|max:254',
            'renas' => 'required|max:254',
        ]);

        $data['users_id'] = Auth::id(); // Assign the authenticated user's ID

        Atp::create([
            'users_id' => $request->users_id,
            'kktps_id' => $request->kktps_id,
            'elemen' => $request->elemen,
            'cp' => $request->cp,
            'tp' => $request->tp,
            'atp' => $request->atp,
            'renas' => $request->renas
        ]);

        
        Alert::success('Berhasil', 'Data TP / ATP Berhasil ditambahkan');
        return redirect()->route('atp.index')->with('success', 'Data TP / ATP berhasil ditambah');
    }

    public function show(string $id)
    {
        $atp = Atp::findOrFail($id);
        $atp->load('kktp', 'user');

        return view('atp.show', compact('atp'));
    }

    public function edit(string $id)
    {
        $atp = Atp::findOrFail($id);
        $kktps = Kktp::all();
        $users = User::all();

        return view('atp.edit', compact('atp', 'kktps', 'users'));
    }

    public function update(Request $request, string $id)
    {
        $atp = Atp::findOrFail($id);

        // Perintah untuk validasi input
        $validator = Validator::make($request->all(), [
            'kktps_id' => 'required',
            'elemen' => 'required|max:254',
            'cp' => 'required|max:254',
            'tp' => 'required|max:254',
            'atp' => 'required|max:254',
            'renas' => 'required|max:254',
        ]);

        // Periksa hasil validasi
        if ($validator->fails()) {
            return redirect()->route('atp.edit', [$id])->withInput()->withErrors($validator);
        }

        // Update data
        $atp->update($request->all());

        Alert::success('Berhasil', 'Data TP / ATP Berhasil diperbarui');
        return redirect()->route('atp.index')->with('success', 'Data TP / ATP berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Atp::findOrFail($id);
        $data->delete();

        return redirect()->route('atp.index')->with('status', 'program tahunan berhasil dihapus');
    }
}