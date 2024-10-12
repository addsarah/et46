@extends('userdashboard.user_master')
@section('title')
    Detail Data KKTP
@endsection

@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Administrasi Guru</a>
            <span class="breadcrumb-item active">KKTP</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Detail Data KKTP</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table class="table display responsive nowrap">
                        <tbody>
                            <tr>
                                <td>Elemen</td>
                                <td>:</td>
                                <td>{{ $kktp->elemen }}</td>
                            </tr>
                            <tr>
                                <td>Tujuan Pembelajaran</td>
                                <td>:</td>
                                <td>{{ $kktp->tp }}</td>
                            </tr>
                            <tr>
                                <td>Interval</td>
                                <td>:</td>
                                <td>
                                    @switch($kktp->interval)
                                        @case('pb')
                                            Perlu Bimbingan
                                        @break

                                        @case('baik')
                                            Baik
                                        @break

                                        @case('cukup')
                                            Cukup
                                        @break

                                        @case('sb')
                                            Sangat Baik
                                        @break

                                        @default
                                            {{ $kktp->interval }}
                                    @endswitch
                                </td>
                            </tr>
                            <!-- Tambahkan kolom lain yang Anda butuhkan -->
                        </tbody>
                    </table>
                </div>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('kktp.index') }}">
                        <i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
