@extends('userdashboard.user_master')
@section('title')
Detail Data Nilai
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Nilai</a>
        <span class="breadcrumb-item active">Nilai</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $nilai->siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>:</td>
                            <td>{{ $nilai->mapel->nama_mapel }}</td>
                        </tr>
                        <tr>
                            <td>KKM</td>
                            <td>:</td>
                            <td>{{ $nilai->mapel->kkm }}</td>
                        </tr>
                        <tr>
                            <td>Ulangan Harian</td>
                            <td>:</td>
                            <td>{{ $nilai->ulangan_harian->nilai_ulangan}}</td>
                        </tr>
                        <tr>
                            <td>Tengah Semester</td>
                            <td>:</td>
                            <td>{{ $nilai->tengah_semester->nilai_tengah_semester}}</td>
                        </tr>
                        <tr>
                            <td>Akhir Semester</td>
                            <td>:</td>
                            <td>{{ $nilai->akhir_semester->nilai_akhir_semester}}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>{{ $nilai->semester}}</td>
                        </tr>
                        <tr>
                            <td>Tahun Ajaran</td>
                            <td>:</td>
                            <td>{{ $nilai->ta}}</td>
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('nilai.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection