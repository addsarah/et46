@extends('userdashboard.user_master')
@section('title')
    Detail Data Program Tahunan
@endsection

@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Administrasi Guru</a>
            <span class="breadcrumb-item active">Program Tahunan</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Detail Data Program Tahunan</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table class="table display responsive nowrap">
                        <tbody>
                            <tr>
                                <td>Materi</td>
                                <td>:</td>
                                <td>{{ $programtahunan->materi }}</td>
                            </tr>
                            <tr>
                                <td>Alokasi Waktu</td>
                                <td>:</td>
                                <td>{{ $programtahunan->alokasi_waktu }}</td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td>:</td>
                                <td>
                                    @if ($programtahunan->semester == 'semester_gjl')
                                        Semester Ganjil
                                    @elseif($programtahunan->semester == 'semester_gnp')
                                        Semester Genap
                                    @else
                                        {{ $programtahunan->semester }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>{{ $programtahunan->mapel->nama_mapel }}</td>
                            </tr>
                            <tr>
                                <td>Guru Pengampu</td>
                                <td>:</td>
                                <td>{{ $programtahunan->user->name }}</td>
                            </tr>
                            <!-- Tambahkan kolom lain yang Anda butuhkan -->
                        </tbody>
                    </table>
                </div>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('programtahunan.index') }}">
                        <i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
