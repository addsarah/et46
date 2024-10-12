@extends('userdashboard.user_master')
@section('title')
    Data Nilai
@endsection
@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Nilai</a>
            <span class="breadcrumb-item active">Nilai</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Data Nilai</h5>
                {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
                <div class="box-header with-border">
                    <a class="btn btn-info" href="{{ route('nilai.create') }}">
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
                        <form method="get" action="{{ route('nilai.index') }}">
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
                <div class="table-responsive">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-5p">No</th>
                                <th class="wd-10p">Nama Siswa</th>
                                <th class="wd-10p">Mata Pelajaran</th>
                                <th class="wd-5p">KKM</th>
                                <th class="wd-5p">Tugas</th>
                                <th class="wd-5p">Ulangan Harian</th>
                                <th class="wd-5p">Tengah Semester</th>
                                <th class="wd-5p">Akhir Semester</th>
                                <th class="wd-5p">Semester</th>
                                <th class="wd-5p">Tahun Ajaran</th>
                                <th class="wd-10p">Guru Pengampu</th>
                                <th class="wd-15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->siswa->nama_siswa }}</td>
                                        <td>{{ $row->mapel->nama_mapel }}</td>
                                        <td>{{ $row->mapel->kkm }}</td>
                                        <td>{{ $row->nilai_tugas }}</td>
                                        <td>{{ $row->nilai_ulangan_harian }}</td>
                                        <td>{{ $row->nilai_tengah_semester }}</td>
                                        <td>{{ $row->nilai_akhir_semester }}</td>
                                        <td>
                                            @if($row->semester == 'ganjil')
                                            Semester Ganjil
                                            @elseif($row->semester == 'genap')
                                            Semester Genap
                                            @else
                                            {{ $row->semester }}
                                            @endif
                                         </td>                                        
                                         <td>{{ $row->ta }}</td>
                                        <td>{{ $row->user->name }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('nilai.destroy', [$row->id]) }}"
                                                onsubmit="return confirm('Apakah anda yakin akan menghapus nilai, {{ $row->id }}?')">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <a class="btn btn-info" href="{{ route('nilai.edit', [$row->id]) }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="btn bt-info" href="{{ route('nilai.edit', [$row->id]) }}"></a>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a class="btn btn-warning" href="{{ route('nilai.show', [$row->id]) }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </form>
                                            @if (
                                                $row->mapel->kkm > $row->nilai_ulangan_harian ||
                                                    $row->mapel->kkm > $row->nilai_tengah_semester ||
                                                    $row->mapel->kkm > $row->nilai_akhir_semester)
                                                <a class="btn btn-primary" href="{{ route('remedial.create', [$row->id]) }}">Buat Remedial</a>
                                            @endif
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $nilai->links() }}
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
