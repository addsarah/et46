@extends('userdashboard.user_master')
@section('title')
Data Nilai Sikap
@endsection  
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Nilai</a>
    <span class="breadcrumb-item active">Sikap</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data Nilai Sikap</h5>
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('sikap.create') }}">
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
            <div class="col-md-3 ml-auto"> <!-- Setengah lebar halaman dan rata ke kanan -->
                <form method="get" action="{{ route('sikap.index') }}">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-sm" id="keyword" name="keyword" value="{{ request('test') }}" placeholder="Search by test">
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
                     <th class="wd-20p">Nama Siswa</th>
                     <th class="wd-20p">Guru Pengampu</th>
                     <th class="wd-20p">Kelas</th>
                     <th class="wd-10p">Nilai</th>
                     <th class="wd-25p">Action</th>
                  </tr>
               </thead>
               <tbody>
                @foreach ($sikap as $row)
                @if ($row->users_id == Auth::id())
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->siswa->nama_siswa }}</td>
                        <td>{{ $row->user->name }}</td>
                        <td>{{ $row->siswa->kelas }}</td>
                        <td>
                            @switch($row->nilai)
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
                            {{ $row->nilai }}
                            @endswitch
                        </td>
                        <td>
                            <form method="POST" action="{{ route('sikap.destroy', [$row->id]) }}"
                                onsubmit="return confirm('Apakah anda yakin akan menghapus nilai dari siswa, {{ $row->siswa->nama_siswa }}?')">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a class="btn btn-info" href="{{ route('sikap.edit', [$row->id]) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="btn bt-info" href="{{ route('sikap.edit', [$row->id]) }}"></a>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a class="btn btn-warning" href="{{ route('sikap.show', [$row->id]) }}">
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
                    {{ $sikap->links() }}
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