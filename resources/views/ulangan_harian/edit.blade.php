@extends('userdashboard.user_master')
@section('title')
Edit Data Nilai Ulangan Harian
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Nilai</a>
      <span class="breadcrumb-item active">Ulangan Harian</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Nilai Ulangan Harian</h5>
      </div>
      <!-- sl-page-title -->
      <form action="{{ route('ulangan_harian.update', $ulangan_harian->id) }}" method="POST" class="form-horizontal">
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
                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="text" name="nilai_tugas" class="form-control" value="{{ $ulangan_harian->nilai_tugas }}" placeholder="Nilai Tengah Semester">
                </div>
             </div>
            <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                    <label for="nilai_ulangan">Nilai Ulangan</label>
                    <input type="text" name="nilai_ulangan" class="form-control" value="{{ $ulangan_harian->nilai_ulangan }}" placeholder="Nilai Tengah Semester">
                </div>
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