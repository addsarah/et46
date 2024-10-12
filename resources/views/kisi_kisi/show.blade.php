@extends('userdashboard.user_master')
@section('title')
Detail Data Kisi-Kisi
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Berkas Asesmen</a>
        <span class="breadcrumb-item active">Kisi - Kisi</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Kisi-Kisi</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Guru</td>
                            <td>:</td>
                            <td>{{ $kisi_kisi->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Kompetensi Dasar</td>
                            <td>:</td>
                            <td>{{ $kisi_kisi->kompeda }}</td>
                        </tr>
                        <tr>
                            <td>Materi</td>
                            <td>:</td>
                            <td>{{ $kisi_kisi->materi }}</td>
                        </tr>
                        <tr>
                            <td>Ranah Kognitif</td>
                            <td>:</td>
                            <td>{{ $kisi_kisi->rako }}</td>
                        </tr>
                        <tr>
                            <td>Indikator</td>
                            <td>:</td>
                            <td>{{ $kisi_kisi->indikator }}</td>
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('kisi_kisi.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection