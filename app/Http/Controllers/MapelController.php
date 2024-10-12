<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    public function index(Request $request)
    {
        $mapel = Mapel::orderBy('nama_mapel', 'asc')->with('user');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            mapel::whereHas('user', function ($query) use ($filterKeyword) {
                $query->where('nama_mapel', "%$filterKeyword");
            })->with('user');
        }

        $mapel = $mapel -> where('users_id',auth()->Id())->paginate(25); 
        return view('mapel.index', compact('mapel'));
    }


    public function create()
    {
        $users = User::all();

        //  return auth()->id();
        $mapel = Mapel::where('users_id', auth()->id())->get();
        return view('mapel.create', compact('users'));
    }

    public function store(Request $request)
    {
        
        $input = $request->all();

        $validator = Validator::make($input, [
            'users_id' => 'required',
            'kelas'=>'required',
            'nama_mapel' => 'required',
            'kkm' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->route('mapel.create')->withInput()->withErrors($validator);
        }


        Mapel::create($input);
        Alert::success('Berhasil', 'Data Mata pelajaran Berhasil ditambahkan');
        return redirect()->route('mapel.index')->with('success', 'mapel berhasil ditambah');
    }

    public function show(string $id)
    {
        $mapel = Mapel::findOrfail($id);
        $mapel->load('user');

        return view('mapel.show', compact('mapel'));
    }

    public function edit(string $id)
    {
        $mapel = Mapel::findOrfail($id);
        $users = User::all();

        return view('mapel.edit', compact('mapel', 'users'));
    }


    public function update(Request $request, string $id)
    {

        // ini perintah untuk update data
        $mapel = Mapel::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'users_id' => 'required',
            'nama_mapel' => 'required',
            'kkm' => 'required',
            'kelas'=>'required',
        ]);

        //ini perintah untuk cek validasi
        if ($validator->fails()) {
            return redirect()->route('mapel.create', [$id])->withInput()->withErrors($validator);
        }

        
        $mapel->update($input);
        // alert()->success('Edit','Data Sudah Di Edit');
        Alert::success('Berhasil', 'Data Mata Pelajaran Berhasil diperbarui');
        return redirect()->route('mapel.index')->with('success', 'mapel berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Mapel::findOrfail($id);
        $data->delete();
        return redirect()->route('mapel.index')->with('status', 'mapel berhasil di hapus');
    }
}


// 'user_id'=>'required',
// 'nama_mapel' => 'required|max:200',
// 'kelas' => 'required|max:100',