@extends('userdashboard.user_master')
@section('title')
Detail Data Nilai Sikap
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Nilai</a>
        <span class="breadcrumb-item active">Sikap</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Sikap</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $sikap->siswa->nama_siswa  }}</td>
                        </tr>
                        <tr>
                            <td>Guru Pengampu</td>
                            <td>:</td>
                            <td>{{ $sikap->user->name  }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{ $sikap->siswa->kelas  }}</td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td>:</td>
                            <td>
                                @switch($sikap->nilai)
                                    @case('sangatbaik')
                                        Sangat Baik
                                    @break

                                    @case('baik')
                                        Baik
                                    @break

                                    @case('cukup')
                                        Cukup
                                    @break

                                    @case('kurang')
                                        Kurang
                                    @break

                                    @default
                                        {{ $sikap->nilai }}
                                @endswitch
                            </td>                        
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('sikap.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection