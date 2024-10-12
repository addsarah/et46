@extends('admin.admin_master')
@section('title')
    Data Guru
@endsection
@section('admin')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">User Management</a>
            <span class="breadcrumb-item active">Guru</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Data Guru</h5>
                {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
                <div class="box-header with-border">
                    <a class="btn btn-info" href="{{ route('adduser.create') }}">
                        <i class="fa fa-plus"></i> Tambah </a>
                    <div class="row">
                        <div class="col-md-3 offset-md-9">
                            <form method="get" action="{{ route('admin') }}">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card pd-20 pd-sm-40">
                <div class="row">
                    <div class="col-md-3 ml-auto">
                        <!-- Setengah lebar halaman dan rata ke kanan -->
                        <form method="get" action="{{ route('adduser.index') }}">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                                    value="{{ request('name') }}" placeholder="Search by name">
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
                                <th class="wd-30p">Nama</th>
                                <th class="wd-20p">Email</th>
                                <th class="wd-15p">Dibuat Pada</th>
                                <th class="wd-15p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration + $user->perpage() * ($user->currentPage() - 1) }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->created_at->diffForHumans() }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('adduser.destroy', [$row->id]) }}"
                                            onsubmit="return confirm('Apakah anda yakin akan menghapus user, {{ $row->name }}?')">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <a class="btn btn-info" href="{{ route('adduser.edit', [$row->id]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="btn bt-info" href="{{ route('adduser.edit', [$row->id]) }}"></a>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <a class="btn btn-warning" href="{{ route('adduser.show', [$row->id]) }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $user->links() }}
                        </div>
                    </div
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
