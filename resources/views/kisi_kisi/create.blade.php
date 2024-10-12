@extends('userdashboard.user_master')
@section('title')
Tambah Data Kisi - Kisi
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Berkas Asesmen</a>
      <span class="breadcrumb-item active">Kisi - Kisi</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Tambah Data Kisi-Kisi</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('kisi_kisi.store') }}" method="POST" class="form-horizontal">
         @csrf
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Nama Guru: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="users_id">
                               <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                       </select>                        
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kompetensi Dasar: <span class="tx-danger">*</span></label>
                        <input class="form-control" required="true" type="text" name="kompeda" value="{{ old('kompeda') }}" placeholder="Enter Kompetensi Dasar">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Materi: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true"  name="materi" value="{{ old('materi') }}" placeholder="Enter Materi"></textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Ranah Kognitif: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true"  name="rako" value="{{ old('rako') }}" placeholder="Enter Ranah Kognitif"></textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Indikator Soal: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true"  name="indikator" value="{{ old('indikator') }}" placeholder="Enter Indikator Soal"></textarea>
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