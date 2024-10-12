@extends('userdashboard.user_master')
@section('title')
Data Kisi - Kisi
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Berkas Asesmen</a>
        <span class="breadcrumb-item active">Kisi - Kisi</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Data Kisi - Kisi</h5>
            {{-- <button class="btn btn-info mg-r-5">Add Nilai </button> --}}
            <div class="box-header with-border">
                <a class="btn btn-info" href="{{ route('kisi_kisi.create') }}">
                    <i class="fa fa-plus"></i> Tambah </a>
                <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <form method="get" action="{{ route('userdashboard') }}">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="row">
                <div class="col-md-3 ml-auto">
                    <!-- Setengah lebar halaman dan rata ke kanan -->
                    <form method="get" action="{{ route('kisi_kisi.index') }}">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                                value="{{ request('kompeda') }}" placeholder="Search by Kompetensi Dasar">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-5p">No</th>
                            <th class="wd-8p">Guru Pengampu</th>
                            <th class="wd-20p">Kompetensi Dasar</th>
                            <th class="wd-10p">Materi</th>
                            <th class="wd-15p">Ranah Kognitif</th>
                            <th class="wd-15p">Indikator Soal</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kisi_kisi as $row)
                        @if ($row->users_id == Auth::id())
                        <tr>
                            <td>{{ $loop->iteration + $kisi_kisi->perpage() * ($kisi_kisi->currentPage() - 1) }}</td>
                            <td>{{ $row->user->name }}</td>
                            <td>{{ $row->kompeda }}</td>
                            <td>{{ $row->materi }}</td>
                            <td>{{ $row->rako }}</td>
                            <td>{{ $row->indikator }}</td>
                            <td>
                                <form method="POST" action="{{ route('kisi_kisi.destroy', [$row->id]) }}"
                                    onsubmit="return confirm('Apakah anda yakin akan menghapus Data Kisi-Kisi tersebut {{ $row->element }}?')">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-info" href="{{ route('kisi_kisi.edit', [$row->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="btn bt-info" href="{{ route('kisi_kisi.edit', [$row->id]) }}"></a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-warning" href="{{ route('kisi_kisi.show', [$row->id]) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        {{ $kisi_kisi->links() }}
                    </div>
                </div>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- card -->
    </div>
    <!-- sl-page-title -->
    <!-- card -->
</div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection