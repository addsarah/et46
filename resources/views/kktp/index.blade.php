@extends('userdashboard.user_master')

@section('title')
Data KKTP
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Administrasi Guru</a>
        <span class="breadcrumb-item active">KKTP</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Data KKTP</h5>
            <div class="box-header with-border">
                <a class="btn btn-info" href="{{ route('kktp.create') }}">
                    <i class="fa fa-plus"></i> Tambah </a>
            </div>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="row">
                <div class="col-md-3 ml-auto">
                    <form method="get" action="{{ route('kktp.index') }}">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-sm" id="keyword" name="keyword"
                                value="{{ request('elemen') }}" placeholder="Search by elemen">
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
                            <th class="wd-10p">No</th>
                            <th class="wd-30p">Elemen</th>
                            <th class="wd-30p">Tujuan Pembelajaran</th>
                            <th class="wd-10p">Interval</th>
                            <th class="wd-25p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kktp as $row)
                        @if ($row->users_id == Auth::id())
                        <tr>
                            <td>{{ $loop->iteration + $kktp->perPage() * ($kktp->currentPage() - 1) }}</td>
                            <td>{{ $row->elemen }}</td>
                            <td>{{ $row->tp }}</td>
                            <td>
                                @switch($row->interval)
                                @case('pb')
                                Perlu Bimbingan
                                @break
                                @case('cukup')
                                Cukup
                                @break
                                @case('baik')
                                Baik
                                @break
                                @case('sb')
                                Sangat Baik
                                @break
                                @default
                                {{ $row->interval }}
                                @endswitch
                            </td>
                            <td>
                                <form method="POST" action="{{ route('kktp.destroy', [$row->id]) }}"
                                    onsubmit="return confirm('Apakah anda yakin akan menghapus elemen, {{ $row->elemen }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="{{ route('kktp.edit', [$row->id]) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <a class="btn btn-warning" href="{{ route('kktp.show', [$row->id]) }}">
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
                      {{ $kktp->links() }}
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
