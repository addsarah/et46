@extends('userdashboard.user_master')
@section('title')
    Detail Data Mata Pelajaran
@endsection

@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Administrasi Guru</a>
            <span class="breadcrumb-item active">Mata Pelajaran</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Detail Data Mata Pelajaran</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table class="table display responsive nowrap">
                        <tbody>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>{{ $mapel->nama_mapel }}</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td>{{ $mapel->kelas }}</td>
                            </tr>
                            <tr>
                                <td>KKM</td>
                                <td>:</td>
                                <td>{{ $mapel->kkm }}</td>
                            </tr>
                            <tr>
                                <td>Guru Pengampu</td>
                                <td>:</td>
                                <td>{{ $mapel->user->name }}</td>
                            </tr>
                            <!-- Tambahkan kolom lain yang Anda butuhkan -->
                        </tbody>
                    </table>
                </div>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('mapel.index') }}">
                        <i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
