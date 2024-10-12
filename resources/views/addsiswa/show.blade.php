@extends('userdashboard.user_master')
@section('title')
Detail Data Siswa
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Administrasi Guru</a>
        <span class="breadcrumb-item active">Siswa</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Detail Data Siswa</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table class="table display responsive nowrap">
                    <tbody>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{ $siswa->kelas }}</td>
                        </tr>
                        <tr>
                            <td>Kompetensi</td>
                            <td>:</td>
                            <td>
                                @if($siswa->kompetensi == 'akl')
                                    Akuntansi Keuangan Lembaga
                                @elseif($siswa->kompetensi == 'br')
                                    Bisnis Retail
                                @elseif($siswa->kompetensi == 'dkv')
                                    Desain Komunikasi Visual
                                @elseif($siswa->kompetensi == 'mp')
                                    Manajemen Perkantoran
                                @elseif($siswa->kompetensi == 'rpl')
                                    Rekayasa Perangkat Lunak
                                @else
                                    {{ $siswa->kompetensi }}
                                @endif
                            </td>
                        </tr>                        
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $siswa->email }}</td>
                        </tr>
                        <!-- Tambahkan kolom lain yang Anda butuhkan -->
                    </tbody>
                </table>
            </div>
            <div class="box">
                <a class="btn btn-primary" href="{{ route('addsiswa.index') }}">
                    <i class="fa fa-angle-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection