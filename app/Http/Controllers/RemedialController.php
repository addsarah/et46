<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Remedial;
use App\Models\nilai;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class remedialController extends Controller
{
    public function index(Request $request)
    {
        $remedial = Remedial::orderBy('id', 'asc')->with('user','nilai','mapel');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            remedial::whereHas('user', function ($query) use ($filterKeyword) {
                $query->where('id', "%$filterKeyword");
            })->with('user','nilai','mapel');
        }

        $remedial = $remedial -> where('users_id',auth()->Id())->paginate(25); 
        return view('remedial.index', compact('remedial'));
    }


    public function create(Nilai $nilai)
    {
        $users = User::all();

        //return $nilai->siswa;

        $remedial = Remedial::where('users_id', auth()->id())->get();

        return view('remedial.create', compact('users','nilai'));
    }

    public function store(Request $request, Nilai $nilai)
    {
        
        $validate = [
            'users_id' => 'required',
            'sesudah' => 'required',
            'sebelum' => 'required',
            'nama_ulangan' => 'required',
            'nilais_id' => 'required',
            'siswas_id' => 'required',
            'mapels_id' => 'required',
        ];

        // Membuat validator
        $validator = Validator::make($request->all(), $validate);

        if ($validator->fails()) {
            return redirect()->route('remedial.create')->withInput()->withErrors($validator);
        }

        Remedial::create($request->all());

        Alert::success('Berhasil', 'Data Remedial Berhasil ditambahkan');

        return redirect()->route('remedial.index')->with('success', 'Remedial berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $remedial = Remedial::findOrfail($id);
        $remedial->load('user','nilai','mapel');

        return view('remedial.show', compact('remedial'));
    }

    public function edit(string $id)
    {
        $remedial = remedial::findOrfail($id);
        $users = User::all();
        $nilais = Nilai::all();
        $mapels = Mapel::all();

        return view('remedial.create', compact('users', 'nilais', 'mapels'));
    }


    public function update(Request $request, string $id)
    {

        // ini perintah untuk update data
        $remedial = remedial::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'users_id' => 'required',
            'sesudah' => 'required',
            'sebelum' => 'required',
            'nama_ulangan' => 'required',
            'nilais_id' => 'required',
            'mapels_id' => 'required',
        ]);

        //ini perintah untuk cek validasi
        if ($validator->fails()) {
            return redirect()->route('remedial.create', [$id])->withInput()->withErrors($validator);
        }

        
        $remedial->update($input);
        // alert()->success('Edit','Data Sudah Di Edit');
        Alert::success('Berhasil', 'Data Remedial Berhasil diperbarui');
        return redirect()->route('remedial.index')->with('success', 'remedial berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Remedial::findOrfail($id);
        $data->delete();
        return redirect()->route('remedial.index')->with('status', 'remedial berhasil di hapus');
    }
}


// 'user_id'=>'required',
// 'nama_remedial' => 'required|max:200',
// 'kelas' => 'required|max:100',