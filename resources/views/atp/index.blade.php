@extends('userdashboard.user_master')
@section('title')
Data TP / ATP
@endsection  

@section('styles')
   <style>
      .table-container {
         overflow-x: auto;
      }
   </style>
@endsection

@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">TP / ATP</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data TP / ATP</h5>
         {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('atp.create') }}">
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
               <form method="get" action="{{ route('atp.index') }}">
                  <div class="input-group">
                     <input type="search" class="form-control form-control-sm" placeholder="Search by elemen" id="keyword" name="keyword" value="{{Request::get('elemen')}}">
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
         <div class="table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th class="wd-5p">No</th>
                     <th class="wd-5p">Elemen</th>
                     <th class="wd-15p">Capaian Pembelajaran</th>
                     <th class="wd-10p">Tujuan Pembelajaran</th>
                     <th class="wd-20p">Alur Tujuan Pembelajaran</th>
                     <th class="wd-10p">Kriteria Ketercapaian Tujuan Pembelajaran</th>
                     <th class="wd-10p">Rencana Asesmen</th>
                     <th class="wd-25p">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($atp as $row)
                  {{-- Periksa apakah index ini terkait dengan pengguna yang saat ini terautentikasi --}}
                  @if ($row->users_id == Auth::id())
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $row->elemen }}</td>
                     <td>{{ $row->cp }}</td>
                     <td>{{ $row->tp}}</td>
                     <td>{{ $row->atp}}</td>
                     <td>{{ $row->kktp->elemen }}</td>
                     <td>{{ $row->renas}}</td>
                     <td>
                        <form method="POST" action="{{ route('atp.destroy', [$row->id]) }}"
                           onsubmit="return confirm('Apakah anda yakin akan menghapus elemen, {{ $row->elemen }}?')">
                           @csrf
                           {{ method_field('DELETE') }}
                           <a class="btn btn-info" href="{{ route('atp.edit', [$row->id]) }}">
                           <i class="fa fa-edit"></i>
                           </a>
                           <a href="btn bt-info" href="{{ route('atp.edit', [$row->id]) }}"></a>
                           <button type="submit" class="btn btn-danger">
                           <i class="fa fa-trash"></i>
                           </button>
                           <a class="btn btn-warning" href="{{ route('atp.show', [$row->id]) }}">
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
                   {{ $atp->links() }}
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


