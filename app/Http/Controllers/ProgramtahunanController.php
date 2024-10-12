<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\Programtahunan;
use Illuminate\Support\Facades\Auth;
use App\Http\ProgramtahunanControllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProgramtahunanController extends Controller
{
    public function index(Request $request)
    {
        $programtahunan=Programtahunan::orderBy('materi','asc')->with('user','mapel');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            Programtahunan::whereHas('user','mapel', function ($query) use ($filterKeyword){
                $query->where('materi', "%$filterKeyword%");
            })->with('user','mapel');
        }

        $programtahunan = Programtahunan::where('users_id', auth()->Id())->paginate(25);
        return view('programtahunan.index', compact('programtahunan'));

    }


    public function create()
    {
        $users = User::all();
        $mapels = Mapel::all();


        // return $users;

        return view('programtahunan.create', compact('users','mapels'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'users_id' => 'required',
            'mapels_id' => 'required',
            'materi' => 'required',
            'alokasi_waktu' => 'required',
            'semester' => 'required',
        ]);
    
        // Add the following line to assign the authenticated user's ID
        $input['users_id'] = Auth::id();
    
        if ($validator->fails()) {
            return redirect()->route('programtahunan.create')->withInput()->withErrors($validator);
        }
    
        Programtahunan::create($input);
    
        Alert::success('Berhasil', 'Program Tahunan Berhasil ditambahkan');
        return redirect()->route('programtahunan.index')->with('success', 'program tahunan berhasil ditambah');
    }

    public function show(string $id)
    {
        $programtahunan = Programtahunan::findOrfail($id);
        $programtahunan->load('user','mapel');

        return view('programtahunan.show', compact('programtahunan'));
    }

    public function edit(string $id)
    {
        $programtahunan = Programtahunan::findOrfail($id);
        $users = User::all();
        $mapels = Mapel::all();

        return view('programtahunan.edit', compact('programtahunan', 'users','mapels'));
    }


    public function update(Request $request, string $id)
    {
        // ini perintah untuk update data
        $programtahunan = Programtahunan::findOrfail($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'users_id' => 'required',
            'mapels_id' => 'required',
            'materi' => 'required',
            'alokasi_waktu' => 'required',
            'semester' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('programtahunan.edit', [$id])->withInput()->withErrors($validator);
        }
    
        $programtahunan->update($input);
    
        Alert::success('Berhasil', 'Data Program Tahunan Berhasil diperbarui');
        return redirect()->route('programtahunan.index')->with('success', 'program tahunan berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Programtahunan::findOrfail($id);
        $data->delete();
        return redirect()->route('programtahunan.index')->with('status', 'Data Program Tahunan berhasil dihapus');
    }
}