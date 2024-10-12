@extends('userdashboard.user_master')
@section('title')
Data Tengah Semester
@endsection  
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Nilai</a>
      <span class="breadcrumb-item active">Tengah Semester</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data Tengah Semester</h5>
         {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('tengah_semester.create') }}">
            <i class="fa fa-plus"></i> Tambah</a>
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
                <form method="get" action="{{ route('tengah_semester.index') }}">
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
                <th class="wd-10p">No</th>
                <th class="wd-20p">Nama Siswa</th>
                <th class="wd-15p">Mata Pelajaran</th>
                <th class="wd-20p">Guru Pengampu</th>
                <th class="wd-15p">Nilai Tengah Semester</th>
                <th class="wd-25p">Aksi</th>
                  </tr>
               </thead>
               <tbody>
               @foreach ($tengah_semester as $row)
               @if ($row->users_id == Auth::id())
                  <tr>
                      <td>{{ $loop->iteration + ($tengah_semester ->perpage() * ($tengah_semester->currentPage()-1))}}</td>
                      <td>{{$row->siswa->nama_siswa}}</td>
                      <td>{{$row->mapel->nama_mapel}}</td>
                      <td>{{$row->user->name}}</td>
                      <td>{{$row->nilai_tengah_semester}}</td>
                      <td>
                          <form method="POST" action="{{ route('tengah_semester.destroy', [$row->id]) }}"
                              onsubmit="return confirm('Apakah anda yakin akan menghapus,{{ $row->name }}?..')">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                              </button>
                               <a class="btn btn-info" href="{{ route('tengah_semester.edit', [$row->id]) }}">
                                  <i class="fa fa-edit"></i>
                              </a>
                              <a class="btn btn-warning" href="{{ route('tengah_semester.show', [$row->id]) }}">
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
                   {{ $tengah_semester->links() }}
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