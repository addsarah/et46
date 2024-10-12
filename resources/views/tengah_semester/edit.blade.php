@extends('userdashboard.user_master')
@section('title')
Edit Data Nilai Tengah Semester
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Nilai</a>
      <span class="breadcrumb-item active">Tengah Semester</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Nilai Tengah Semester</h5>
      </div>
      <!-- sl-page-title -->
      <form action="{{ route('tengah_semester.update', $tengah_semester->id) }}" method="POST" class="form-horizontal">
         @csrf
         @method('PUT')
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Nama Siswa</label>
                        <select class="form-control" name="siswas_id">
                           <option value="{{ auth()->user()->siswa->id }}">{{ auth()->user()->siswa->nama_siswa }}</option>
                       </select>                        
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Mata Pelajaran</label>
                        <select class="form-control" name="mapels_id">
                           <option value="{{ auth()->user()->mapel->id }}">{{ auth()->user()->mapel->nama_mapel }}</option>
                       </select>                        
                     </div>
                  </div>
                  <!-- col-12 -->
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
                  <div class="form-group">
                    <label for="nilai_tengah_semester">Nilai Tugas</label>
                    <input type="text" name="nilai_tengah_semester" class="form-control" value="{{ $tengah_semester->nilai_tengah_semester }}" placeholder="Nilai Tengah Semester">
                </div>
               </div>
               <!-- row -->
               <div class="form-layout-footer">
                  <button type="submit" class="btn btn-success">Save</button>
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