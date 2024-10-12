@extends('userdashboard.user_master')
@section('title')
Data Program Tahunan
@endsection  
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Program Tahunan</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data Program Tahunan</h5>
         {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('programtahunan.create') }}">
            <i class="fa fa-plus"></i>Tambah</a>
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
               <form method="get" action="{{ route('programtahunan.index') }}">
                  <div class="input-group">
                     <input type="search" class="form-control form-control-sm" placeholder="Search by materi" id="keyword" name="keyword" value="{{Request::get('materi')}}">
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
                     <th class="wd-5p">No</th>
                     <th class="wd-20p">Materi</th>
                     <th class="wd-15p">Alokasi Waktu</th>
                     <th class="wd-10p">Semester</th>
                     <th class="wd-20p">Mata Pelajaran</th>
                     <th class="wd-10p">Guru Pengampu</th>
                     <th class="wd-15p">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($programtahunan as $row)
                  {{-- Periksa apakah index ini terkait dengan pengguna yang saat ini terautentikasi --}}
                  @if ($row->users_id == Auth::id())
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $row->materi }}</td>
                     <td>{{ $row->alokasi_waktu }}</td>
                     <td>
                        @if($row->semester == 'semester_gjl')
                        Semester Ganjil
                        @elseif($row->semester == 'semester_gnp')
                        Semester Genap
                        @else
                        {{ $row->semester }}
                        @endif
                     </td>
                     <td>{{ $row->mapel->nama_mapel }}</td>
                     <td>{{ $row->user->name }}</td>
                     <td>
                        <form method="POST" action="{{ route('programtahunan.destroy', [$row->id]) }}"
                           onsubmit="return confirm('Apakah anda yakin akan menghapus materi, {{ $row->materi }}?')">
                           @csrf
                           {{ method_field('DELETE') }}
                           <a class="btn btn-info" href="{{ route('programtahunan.edit', [$row->id]) }}">
                           <i class="fa fa-edit"></i>
                           </a>
                           <a href="btn bt-info" href="{{ route('programtahunan.edit', [$row->id]) }}"></a>
                           <button type="submit" class="btn btn-danger">
                           <i class="fa fa-trash"></i>
                           </button>
                           <a class="btn btn-warning" href="{{ route('programtahunan.show', [$row->id]) }}">
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
                   {{ $programtahunan->links() }}
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