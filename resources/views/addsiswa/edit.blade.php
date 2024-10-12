@extends('userdashboard.user_master')
@section('title')
Edit Data Siswa
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Siswa</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Siswa</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('addsiswa.update', [$siswa->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Nama siswa: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" placeholder="Enter Nama Siswa">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kelas : <span class="tx-danger">*</span></label>
                        <select name="kelas" class="form-control select2">
                        <option value="10" @if ($siswa->kelas == '10')  @endif>Kelas 10
                        </option>
                        <option value="11" @if ($siswa->kelas == '11')  @endif>Kelas 11
                        </option>
                        <option value="12" @if ($siswa->kelas == '12')  @endif>Kelas 12
                        </option>
                        </select>
                     </div>
                  </div>                  
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kompetensi : <span class="tx-danger">*</span></label>
                        <select name="kompetensi" class="form-control select2">
                        <option value="akl" @if ($siswa->kompetensi == 'akl')  @endif>Akutansi Keuangan Lembaga
                        </option>
                        <option value="br" @if ($siswa->kompetensi == 'br')  @endif>Bisnis Retail
                        </option>
                        <option value="dkv" @if ($siswa->kompetensi == 'dkv')  @endif>Desain Komunikasi Visual
                        </option>
                        <option value="mp" @if ($siswa->kompetensi == 'mp')  @endif>Manajemen Perkantoran
                        </option>
                        <option value="rpl" @if ($siswa->kompetensi == 'rpl')  @endif>Rekayasa Perangkat Lunak
                        </option>
                        </select>
                     </div>
                  </div>                  
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="email" value="{{ $siswa->email }}" placeholder="Enter email">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                         <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                         <input class="form-control" type="password" name="password"
                             value="{{ $siswa->password }}" placeholder="Enter password">
                     </div>
                 </div>
                 <!-- col-12 -->
               </div>

               <!-- row -->
               <div class="form-layout-footer">
                  <button class="btn btn-primary">Save</button>
                  <button class="btn btn-secondary">Cancel</button>
               </div>
               <!-- form-layout-footer -->
            </div>
            <!-- form-layout -->
         </div>
         <!-- card -->
      </form>
   </div>
   <!-- sl-pagebody -->
   <footer class="sl-footer">
      <div class="footer-left">
         <div class="mg-b-2">Copyright &copy; 2023. ET46. All Rights Reserved.</div>
         <div>Made by .</div>
      </div>
   </footer>
</div>
<!-- sl-mainpanel -->
@endsection