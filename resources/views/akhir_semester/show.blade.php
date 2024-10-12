@extends('userdashboard.user_master')
@section('title')
Detail Data Nilai Akhir Semester
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Nilai</a>
        <span class="breadcrumb-item active">Akhir Semester</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Nilai Akhir Semester</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $akhir_semester->siswa->nama_siswa }}</td>
                           </tr> 
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>:</td>
                            <td>{{ $akhir_semester->mapel->nama_mapel }}</td>
                           </tr> 
                           <tr>
                            <td>Guru Pengampu</td>
                            <td>:</td>
                            <td>{{ $akhir_semester->user->name}}</td>
                           </tr>
                           <tr>
                            <td>Nilai Akhir Semester</td>
                            <td>:</td>
                            <td>{{ $akhir_semester->nilai_akhir_semester}}</td>
                           </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('akhir_semester.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
