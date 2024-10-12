@extends('userdashboard.user_master')
@section('title')
Data Mata Pelajaran
@endsection  
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Mata Pelajaran</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data Mata Pelajaran</h5>
         {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('mapel.create') }}">
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
               <form method="get" action="{{ route('mapel.index') }}">
                  <div class="input-group">
                     <input type="search" class="form-control form-control-sm" placeholder="Search by mata pelajaran" id="keyword" name="keyword" value="{{Request::get('nama_mapel')}}">
                     <div class="input-group-append">
                        <button class="btn btn-sm btn-default" type="submit">
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
                     <th class="wd-7p">No</th>
                     <th class="wd-30p">Mata Pelajaran</th>
                     <th class="wd-10p">Kelas</th>
                     <th class="wd-10p">KKM</th>
                     <th class="wd-30p">Guru Pengampu</th>
                     <th class="wd-20p">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($mapel as $row)
                  {{-- Periksa apakah index ini terkait dengan pengguna yang saat ini terautentikasi --}}
                  @if ($row->users_id == Auth::id())
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $row->nama_mapel }}</td>
                     <td>{{ $row->kelas }}</td>
                     <td>{{ $row->kkm }}</td>
                     <td>{{ $row->user->name }}</td>
                     <td>
                        <form method="POST" action="{{ route('mapel.destroy', [$row->id]) }}"
                           onsubmit="return confirm('Apakah anda yakin akan menghapus mapel, {{ $row->nama_mapel }}?')">
                           @csrf
                           {{ method_field('DELETE') }}
                           <a class="btn btn-info" href="{{ route('mapel.edit', [$row->id]) }}">
                           <i class="fa fa-edit"></i>
                           </a>
                           <a href="btn bt-info" href="{{ route('mapel.edit', [$row->id]) }}"></a>
                           <button type="submit" class="btn btn-danger">
                           <i class="fa fa-trash"></i>
                           </button>
                           <a class="btn btn-warning" href="{{ route('mapel.show', [$row->id]) }}">
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
                   {{ $mapel->links() }}
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