@extends('userdashboard.user_master')
@section('title')
Tambah Data Siswa
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Siswa</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Tambah Data Siswa</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('addsiswa.store') }}" method="POST" class="form-horizontal">
         @csrf
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Nama Siswa: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_siswa" value="{{ old('nama_siswa') }}" placeholder="Enter Nama Siswa">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kelas: <span class="tx-danger">*</span></label>
                        <select name="kelas" class="form-control select2">
                           <option label="Pilih Kelas"></option>
                           <option value="10">Kelas 10</option>
                           <option value="11">Kelas 11</option>
                           <option value="12">Kelas 12</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kompetensi: <span class="tx-danger">*</span></label>
                        <select name="kompetensi" class="form-control select2">
                           <option label="Pilih Kompetensi"></option>
                           <option value="akl">Akutansi Keuangan Lembaga</option>
                           <option value="br">Bisnis Retail</option>
                           <option value="dkv">Desain Komunikasi Visual</option>
                           <option value="mp">Manajemen Perkantoran</option>
                           <option value="rpl">Rekayasa Perangkat Lunak</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                         <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                         <input class="form-control" required="true" type="text" name="email" value="{{ old('email') }}" placeholder="Enter Email, domain@gmail.com">
                     </div>
                 </div>
                 <!-- col-12-->
                 <div class="col-lg-12">
                     <div class="form-group">
                         <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                         <input class="form-control" required="true" type="password" name="password" value="{{ old('password') }}" placeholder="Enter Password, minimal 8">
                     </div>
                 </div>
                 <!-- col-12-->
               </div>
               <!-- row -->
               <div class="form-layout-footer">
                  <button class="btn btn-success">Save</button>
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