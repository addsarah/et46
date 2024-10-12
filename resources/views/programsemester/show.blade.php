@extends('userdashboard.user_master')
@section('title')
Detail Data Program Semester
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Administrasi Guru</a>
        <span class="breadcrumb-item active">Program Semester</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Program Semester</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Kompetensi Dasar</td>
                            <td>:</td>
                            <td>{{ $programsemester->komdas }}</td>
                        </tr>
                        <tr>
                            <td>Alokasi Waktu</td>
                            <td>:</td>
                            <td>{{ $programsemester->alokasi_waktu }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td>
                                @if($programsemester->semester == 'semester_gjl')
                                    Semester Ganjil
                                @elseif($programsemester->semester == 'semester_gnp')
                                    Semester Genap
                                @else
                                    {{ $programsemester->semester }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Bulan</td>
                            <td>:</td>
                            <td>{{ $programsemester->bulan }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td>{{ $programsemester->keterangan }}</td>
                        </tr>                         
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>:</td>
                            <td>{{ $programsemester->mapel->nm_mapel}}</td>
                        </tr>
                        <tr>
                            <td>Guru Pengampu</td>
                            <td>:</td>
                            <td>{{ $programsemester->user->name}}</td>
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('programsemester.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
