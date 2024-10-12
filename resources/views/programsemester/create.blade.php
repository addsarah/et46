@extends('userdashboard.user_master')
@section('title')
Tambah Data Program Semester
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Program Semester</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Tambah Data Program Semester</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('programsemester.store') }}" method="POST" class="form-horizontal">
         @csrf
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kompetensi Dasar: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="komdas" value="{{ old('komdas') }}" placeholder="Enter Kompetensi Dasar">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Alokasi Waktu: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="alokasi_waktu" value="{{ old('alokasi_waktu') }}" placeholder="Enter alokasi waktu, seperti 4JP (Jam Pelajaran)">
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Semester: <span class="tx-danger">*</span></label>
                        <select name="semester" class="form-control select2">
                           <option label="Pilih Semester"></option>
                           <option value="semester_gjl">Semester Ganjil</option>
                           <option value="semester_gnp">Semester Genap</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Bulan: <span class="tx-danger">*</span></label>
                        <select name="bulan" class="form-control select2">
                           <option label="Pilih bulan"></option>
                           <option value="januari">Januari</option>
                           <option value="februari">Februari</option>
                           <option value="maret">Maret</option>
                           <option value="april">April</option>
                           <option value="mei">Mei</option>
                           <option value="juni">Juni</option>
                           <option value="juli">Juli</option>
                           <option value="agustus">Agustus</option>
                           <option value="september">September</option>
                           <option value="oktober">Oktober</option>
                           <option value="november">November</option>
                           <option value="desember">Desember</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="keterangan" value="{{ old('keterangan') }} placeholder="Enter Keterangan, seperti Minggu Ke 1 & 2"></textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Mata Pelajaran</label>
                        <select class="form-control" name="mapels_id">
                            <option value="{{ auth()->user()->mapel->id  }}">{{ auth()->user()->mapel->nama_mapel }}</option>
                        </select>
                     </div>
                  </div>        
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Guru Pengampu</label>
                        <select class="form-control" name="users_id">
                           <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
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