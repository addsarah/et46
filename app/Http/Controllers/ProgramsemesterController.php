<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\Programsemester;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProgramsemesterController extends Controller
{
    public function index(Request $request)
    {
        $programsemester=Programsemester::orderBy('komdas','asc')->with('user','mapel');

        $filterKeyword = $request->keyword;

        if ($filterKeyword) {
            Programsemester::whereHas('user','mapel', function ($query) use ($filterKeyword){
                $query->where('komdas', "%$filterKeyword%");
            })->with('user','mapel');
        }

        $programsemester = Programsemester::where('users_id', auth()->Id())->paginate(25);
        return view('programsemester.index', compact('programsemester'));
    }


    public function create()
    {
        $users = User::all();
        $mapels = Mapel::all();
        $programsemester = Programsemester::where('users_id', auth()->id())->get();
        // return $mapels;

        return view('programsemester.create', compact('users','mapels'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'users_id' => 'required',
            'mapels_id' => 'required',
            'komdas'=>'required|max:249',
            'alokasi_waktu'=>'required|max:100',
            'semester'=>'required',
            'bulan'=>'required',
            'keterangan'=>'required|max:100',
        ]);
        
        if ($validator->fails()) {
            return redirect()->route('programsemester.create')->withInput()->withErrors($validator);
        }


        Programsemester::create($input);
        Alert::success('Berhasil', 'Data Program Semester Berhasil ditambahkan');
        return redirect()->route('programsemester.index')->with('success', 'program tahunan berhasil ditambah');
    }

    public function show(string $id)
    {
        $programsemester = Programsemester::findOrfail($id);
        $programsemester->load('user','mapel');

        return view('programsemester.show', compact('programsemester'));
    }

    public function edit(string $id)
    {
        $programsemester = Programsemester::findOrfail($id);
        $users = User::all();
        $mapels = Mapel::all();
        $programsemesters = Programsemester::where('users_id', auth()->id())->get(); 

        return view('programsemester.edit', compact('programsemester', 'users','mapels'));
    }


    public function update(Request $request, string $id)
    {

        $programsemester = Programsemester::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'users_id' => 'required',
            'mapels_id' => 'required',
            'komdas' => 'required|max:249',
            'alokasi_waktu' => 'required|max:100',
            'semester' => 'required',
            'bulan' => 'required',
            'keterangan' => 'required|max:100',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('programsemester.edit', [$id])->withInput()->withErrors($validator);
        }
    
        $programsemester->update($request->all());
    
        Alert::success('Berhasil', 'Data Program Semester Berhasil diperbarui');
        return redirect()->route('programsemester.index')->with('success', 'Program tahunan berhasil di edit');
    }

    public function destroy(string $id)
    {
        $data = Programsemester::findOrfail($id);
        $data->delete();
        return redirect()->route('programsemester.index')->with('status', 'program tahunan berhasil di hapus');
    }
}