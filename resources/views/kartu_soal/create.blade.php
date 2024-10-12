@extends('userdashboard.user_master')
@section('title')
Kartu Soal
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Berkas Asesmen</a>
      <span class="breadcrumb-item active">Kartu Soal</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Tambah Data Kartu Soal</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('kartu_soal.store') }}" method="POST" class="form-horizontal">
         @csrf
         <div class="card pd-20 pd-sm-25">
            <div class="form-layout">
               <div class="row mg-b-25">
                   <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                         <label>Kompetensi Dasar: <span class="tx-danger">*</span></label>
                         <select class="form-control" name="kisi_kisis_id">
                           <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->kompeda }}</option>
                        </select>
                     </div>
                 </div>                 
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Materi: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="kisi_kisis_id">
                           <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->materi }}</option>
                       </select>                        
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label>Indikator Soal: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="kisi_kisis_id">
                           <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->indikator }}</option>
                       </select>                        
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Buku Acuan: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true" name="buac" value="{{ old('buac') }}" placeholder="Enter Buku Acuan"></textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kunci Jawab: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true" name="kj" value="{{ old('kj') }}" placeholder="Enter Kunci Jawab"></textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Deskripsi Soal: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" required="true" name="desk_soal" value="{{ old('desk_soal') }}" placeholder="Enter Deskripsi Soal"></textarea>
                     </div>
                  </div>
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