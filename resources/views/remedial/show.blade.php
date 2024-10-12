@extends('admin.admin_master')
@section('title')
Detail Data  Remedial
@endsection

@section('admin')
<div class="container">
    <h1>Detail Remedial</h1>
    <p>KKM: {{ $remedial->kkm }}</p>
    <p>Nilai Sebelum: {{ $remedial->sebelum }}</p>
    <p>Nilai Sesudah: {{ $remedial->sesudah }}</p>
    
    <h2>Informasi Terkait:</h2>
    <p>Nilai: {{ $remedial->nilais->nama_nilai }}</p>
    <p>Mata Pelajaran: {{ $remedial->mapels->nama_mapel }}</p>

    <!-- Tambahkan informasi lain yang ingin Anda tampilkan -->
</div>
@endsection