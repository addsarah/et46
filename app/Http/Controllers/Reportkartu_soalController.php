<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartu_soal;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportKartu_soalController extends Controller
{
    public function index(Request $request)
    {
        $kartu_soal = Kartu_soal::orderBy('created_at','DESC')->simplePaginate(2);
        return view('reportkartu_soal.index',compact('kartu_soal'));
    }

    //ini method untuk mencetak laporan tabel kartu_soal
    public function cetak_kartu_soal()
    {
        $R_kartu_soal = Kartu_soal::orderBy('created_at','DESC')->get();
        $pdf = PDF ::loadview('reportkartu_soal.lapkartu_soal_pdf', compact('R_kartu_soal'));
        return $pdf->stream();
    }
}