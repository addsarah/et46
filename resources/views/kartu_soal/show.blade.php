@extends('userdashboard.user_master')
@section('title')
Detail Data Kartu Soal
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Berkas Asesmen</a>
        <span class="breadcrumb-item active">Kartu Soal</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Kartu Soal</h5>
        </div>
        <div class="card pd-20 pd-sm-25">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Kompetensi Dasar</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->kisi_kisi->kompeda }}</td>
                        </tr>
                        <tr>
                            <td>Materi</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->kisi_kisi->materi }}</td>
                        </tr>
                        <tr>
                            <td>Indikator Soal</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->kisi_kisi->indikator }}</td>
                        </tr>
                        <tr>
                            <td>Buku Acuan</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->buac }}</td>
                        </tr>
                        <tr>
                            <td>Kunci Jawab</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->kj }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Soal</td>
                            <td>:</td>
                            <td>{{ $kartu_soal->desk_soal }}</td>
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('kartu_soal.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection


