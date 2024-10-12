@extends('userdashboard.user_master')
@section('title')
Detail Data Nilai Ulangan Harian
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Nilai</a>
        <span class="breadcrumb-item active">Ulangan Harian</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Nilai Ulangan Harian</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $ulangan_harian->siswa->nama_siswa }}</td>
                           </tr> 
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>:</td>
                            <td>{{ $ulangan_harian->mapel->nama_mapel }}</td>
                           </tr> 
                           <tr>
                            <td>Guru Pengampu</td>
                            <td>:</td>
                            <td>{{ $ulangan_harian->user->name}}</td>
                           </tr>
                           <tr>
                            <td>Nilai Tugas</td>
                            <td>:</td>
                            <td>{{ $ulangan_harian->nilai_tugas}}</td>
                           </tr>
                           <tr>
                            <td>Nilai Tengah Semester</td>
                            <td>:</td>
                            <td>{{ $ulangan_harian->nilai_ulangan}}</td>
                           </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('ulangan_harian.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
