@extends('userdashboard.user_master')
@section('title')
Data Kartu Soal
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Berkas Asesmen</a>
        <span class="breadcrumb-item active">Kartu Soal</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Data Kartu Soal</h5>
            {{-- <button class="btn btn-info mg-r-5">Add Nilai </button> --}}
            <div class="box-header with-border">
                <a class="btn btn-info" href="{{ route('kartu_soal.create') }}">
                    <i class="fa fa-plus"></i> Tambah </a>
                <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <form method="get" action="{{ route('userdashboard') }}">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card pd-20 pd-sm-25">
            <div class="row">
                <div class="col-md-3 ml-auto">
                    <!-- Setengah lebar halaman dan rata ke kanan -->
                    <form method="get" action="{{ route('kartu_soal.index') }}">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                                value="{{ request('test') }}" placeholder="Search by test">
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
                            <th class="wd-15p">Kompetensi Dasar</th>
                            <th class="wd-10p">Materi</th>
                            <th class="wd-15p">Indikator Soal</th>
                            <th class="wd-15p">Buku Acuan</th>
                            <th class="wd-10p">Kunci Jawab</th>
                            <th class="wd-15p">Deskripsi Soal</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kartu_soal as $row)
                        @if ($row->users_id == Auth::id())
                        <tr>
                            <td>{{ $loop->iteration + $kartu_soal->perpage() * ($kartu_soal->currentPage() - 1) }}</td>
                            <td>{{ $row->kisi_kisi->kompeda }}</td>
                            <td>{{ $row->kisi_kisi->materi }}</td>
                            <td>{{ $row->kisi_kisi->indikator }}</td>
                            <td>{{ $row->buac }}</td>
                            <td>{{ $row->kj }}</td>
                            <td>{{ $row->desk_soal }}</td>                            
                            <td>
                                <form method="POST" action="{{ route('kartu_soal.destroy', [$row->id]) }}"
                                    onsubmit="return confirm('Apakah anda yakin akan menghapus Data Kartu Soal tersebut, {{ $row->buac }}?')">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-info" href="{{ route('kartu_soal.edit', [$row->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="btn bt-info" href="{{ route('kartu_soal.edit', [$row->id]) }}"></a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-warning" href="{{ route('kartu_soal.show', [$row->id]) }}">
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
                        {{ $kartu_soal->links() }}
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