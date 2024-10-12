@extends('userdashboard.user_master')
@section('title')
Edit Data Kartu Soal
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Berkas Asesmen</a>
      <span class="breadcrumb-item active">Kartu Soal</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Kartu Soal</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('kartu_soal.update', [$kartu_soal->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-25">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <!-- col-12 -->
                  <div class="col-lg-12">
                  <div class="form-group">
                     <label for="kisi_kisis_id">Kompetensi Dasar</label>
                     <select name="kisi_kisis_id" class="form-control">
                         <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->kompeda }}</option>
                     </select>
                 </div>
               </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                  <div class="form-group">
                     <label for="kisi_kisis_id">Materi</label>
                     <select name="kisi_kisis_id" class="form-control">
                        <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->materi }}</option>
                     </select>
                 </div>
               </div>
               <!-- col-12 -->
               <div class="col-lg-12">
               <div class="form-group">
                  <label for="kisi_kisis_id">Indikator Soal:</label>
                  <select name="kisi_kisis_id" class="form-control">
                      <option value="{{ auth()->user()->kisi_kisi->id }}">{{ auth()->user()->kisi_kisi->indikator }}</option>
                  </select>
              </div>
            </div>
            <!-- col-12 -->
            <div class="col-lg-12">
               <div class="form-group">
                  <label class="form-control-label">Buku Acuan: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="buac" value="" placeholder="Enter Buku Acuan">{{ $kartu_soal->buac }}</textarea>
               </div>
            </div>
            <!-- col-12 -->
                 <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kunci Jawab: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="kj" value="" placeholder="Enter Kunci Jawab">{{ $kartu_soal->kj }}</textarea>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Deskripsi Soal: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="desk_soal" value="" placeholder="Enter Deskripsi Soal">{{ $kartu_soal->desk_soal }}</textarea>
                     </div>
                  </div>
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