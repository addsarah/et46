@extends('userdashboard.user_master')
@section('title')
Edit Data TP / ATP
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">TP / ATP</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data TP / ATP</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('atp.update', [$atp->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Elemen: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="elemen" value="{{ $atp->elemen }}" placeholder="Enter Elemen">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Capaian Pembelajaran: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="cp" value="" placeholder="Enter Capaian Pembelajaran, maksimal 254 kata">{{ $atp->cp }}</textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Tujuan Pembelajaran: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="tp" value="" placeholder="Enter Tujuan Pembelajaran, maksimal 254 kata">{{ $atp->tp }}</textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Alur Tujuan Pembelajaran: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="atp" value="" placeholder="Enter Alur Tujuan Pembelajaran, maksimal 254 kata">{{ $atp->atp }}</textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Kriteria Ketercapaian Tujuan Pembelajaran</label>
                        <select class="form-control" name="kktps_id">
                           <option value="{{ auth()->user()->kktp->id }}">{{ auth()->user()->kktp->elemen }}</option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Rencana Asesmen: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="renas" value="" placeholder="Enter Rencana Asesmen, maksimal 254 kata">{{ $atp->renas }}</textarea>
                     </div>
                  </div>
                  <!-- col-12-->
                  
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