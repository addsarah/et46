@extends('userdashboard.user_master')

@section('title')
    Tabel Data Soal
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
       <a class="breadcrumb-item" href="">Berkas Asesmen</a>
       <span class="breadcrumb-item active">Data Soal</span>
    </nav>
    <div class="sl-pagebody">
       <div class="sl-page-title">
          <h5>Data Soal</h5>
       </div>
       <!-- sl-page-title -->
       <form action="{{ route('kisi_kisi.store') }}" method="POST" class="form-horizontal">
          @csrf
          <div class="card pd-20 pd-sm-25">
             <div class="form-layout">
                <div class="row mg-b-25">
    <section class="content">
        <div class="col">
            <div class="col-md-25">
                <div class="box-header with-border">
                    <a target="_blank" href = "{{route('cetak_kartu_soal')}}" class="btn btn-danger float-left pd-sm-15">Print PDF</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-50p">Deskripsi Soal</th>
                            <th class="wd-45p">Kunci Jawab</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kartu_soal as $row)
                            <tr>
                                <td>{{ $loop->iteration + $kartu_soal->perpage() * ($kartu_soal->currentPage() - 1) }}</td>
                                <td>{{ $row->desk_soal }}</td>  
                                <td>{{ $row->kj }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $kartu_soal->appends(Request::all())->links() }}
            </div>
        </div>
    </section>
@endsection