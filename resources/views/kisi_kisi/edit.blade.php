@extends('userdashboard.user_master')
@section('title')
Edit Data Kisi-Kisi
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Berkas Asesmen</a>
      <span class="breadcrumb-item active">Kisi - Kisi</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Kisi-Kisi</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('kisi_kisi.update', [$kisi_kisi->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Nama Guru</label>
                        <select class="form-control" name="users_id">
                           <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                        </select>
                     </div>
                  </div>                  
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kompetensi Dasar: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="kompeda" value="" placeholder="Enter Kompetensi Dasar">{{ $kisi_kisi->kompeda }}</textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Materi: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="materi" value="" placeholder="Enter Materi">{{ $kisi_kisi->materi }}</textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Ranah Kognitif: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="rako" value="" placeholder="Enter Ranah Kognitif">{{ $kisi_kisi->rako }}</textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Indikator Soal: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="indikator" value="" placeholder="Enter Indikator">{{ $kisi_kisi->indikator }}</textarea>
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