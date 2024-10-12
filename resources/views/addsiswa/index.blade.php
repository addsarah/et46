@extends('userdashboard.user_master')
@section('title')
Data Siswa
@endsection  
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Administrasi Guru</a>
    <span class="breadcrumb-item active">Siswa</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Data Siswa</h5>
         {{--  <button class="btn btn-info mg-r-5">Add Nilai </button>  --}}
         <div class="box-header with-border">
            <a class="btn btn-info" href="{{ route('addsiswa.create') }}">
                <i class="fa fa-plus"></i> Tambah 
            </a>
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
                <form method="get" action="{{ route('addsiswa.index') }}">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-sm" id="keyword" name="keyword" value="{{ request('nama_siswa') }}" placeholder="Search by Nama Siswa">
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
                     <th class="wd-25p">Nama</th>
                     <th class="wd-5p">Kelas</th>
                     <th class="wd-20p">Kompetensi</th>
                     <th class="wd-20p">Email</th>
                     <th class="wd-25p">Action</th>
                  </tr>
               </thead>
               <tbody>
                @foreach ($siswa as $row)
                    <tr>
                        <td>{{ $loop->iteration + $siswa->perpage() * ($siswa->currentPage() - 1) }}</td>
                        <td>{{ $row->nama_siswa }}</td>
                        <td>{{ $row->kelas }}</td>
                        <td>
                            @if($row->kompetensi == 'akl')
                                Akuntansi Keuangan Lembaga
                            @elseif($row->kompetensi == 'br')
                                Bisnis Retail
                            @elseif($row->kompetensi == 'dkv')
                                Desain Komunikasi Visual
                            @elseif($row->kompetensi == 'mp')
                                Manajemen Perkantoran
                            @elseif($row->kompetensi == 'rpl')
                                Rekayasa Perangkat Lunak
                            @else
                                {{ $row->kompetensi }}
                            @endif
                        </td>
                        <td>{{ $row->email }}</td>
                        <td>
                            <form method="POST" action="{{ route('addsiswa.destroy', [$row->id]) }}"
                                onsubmit="return confirm('Apakah anda yakin akan menghapus siswa, {{ $row->nama_siswa }}?')">
                                @csrf
                                {{ method_field('DELETE') }}
                                <a class="btn btn-info" href="{{ route('addsiswa.edit', [$row->id]) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="btn bt-info" href="{{ route('addsiswa.edit', [$row->id]) }}"></a>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a class="btn btn-warning" href="{{ route('addsiswa.show', [$row->id]) }}">
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
                    {{ $siswa->links() }}
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