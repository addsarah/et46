<?php

namespace App\Http\Controllers;

use App\Models\Akhir_semester;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class nilaiController extends Controller
{
    
    public function index(Request $request)
    {
        $nilai = Nilai::orderBy('id', 'asc')->with('siswa','mapel');

        $filterKeyword = $request->keyword;
        if ($filterKeyword) {
            Nilai::whereHas('siswa','mapel', function ($query) use ($filterKeyword) {
                $query->where('semester', "%$filterKeyword");
            });
        }

        $nilai = $nilai ->paginate(25); 

        return view('nilai.index', compact('nilai'));
    }


    public function create()
    {
        $siswas = Siswa::all();
        $mapels = Mapel::all();

        return view('nilai.create', compact('siswas', 'mapels'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'nilai_tugas' => 'nullable|integer',
            'nilai_ulangan_harian' => 'nullable|integer',
            'nilai_tengah_semester' => 'nullable|integer',
            'nilai_akhir_semester' => 'nullable|integer',
            'siswas_id' => 'required',
            'mapels_id' => 'required',
            'semester' => 'required',
            'ta' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('nilai.create')->withInput()->withErrors($validator);
        }

        Nilai::create($input);

        Alert::success('Berhasil', 'Data Nilai Berhasil ditambahkan');
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambah');
    }

   
    public function show(string $id)
    {
        $nilai = Nilai::with(['siswa', 'mapel'])->findOrFail($id);

        return view('nilai.show', compact('nilai'));
    }

   
    public function edit(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        $siswas = Siswa::all();
        $mapels = Mapel::all();
    
        return view('nilai.edit', compact('nilai','siswas', 'mapels'));
    }

    
    public function update(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);

        $input = $request->validate([
            'nilai_tugas' => 'nullable|integer',
            'nilai_ulangan_harian' => 'nullable|integer',
            'nilai_tengah_semester' => 'nullable|integer',
            'nilai_akhir_semester' => 'nullable|integer',
            'siswas_id' => 'required',
            'mapels_id' => 'required',
            'semester' => 'required',
            'ta' => 'required',
        ]);

        $nilai->update($input);

        Alert::success('Edit', 'Data Nilai berhasil diperbarui');
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil di edit');
    }

    
    public function destroy(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus');
    }
}
