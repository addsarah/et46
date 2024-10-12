@extends('userdashboard.user_master')
@section('title')
Edit Data Nilai Sikap
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Nilai</a>
      <span class="breadcrumb-item active">Sikap</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Nilai Sikap</h5>
      </div>
      <!-- sl-page-title -->
      <form action="{{ route('sikap.update', [$sikap->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                <div class="form-group">
                     <label>Nama Siswa</label>
                     <select class="form-control" name="siswas_id">
                        <option value="{{ auth()->user()->siswa->id }}">{{ auth()->user()->siswa->nama_siswa }}</option>
                     </select>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Guru Pengampu: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="users_id">
                           <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                       </select>
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kelas: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="siswas_id">
                           <option value="{{ auth()->user()->siswa->id }}">{{ auth()->user()->siswa->kelas }}</option>
                       </select>   
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                         <label class="form-control-label">Nilai: <span class="tx-danger">*</span></label>
                         <select name="nilai" class="form-control select2">
                             <option value="sangatbaik" @if ($sikap->nilai == 'sangatbaik')  @endif>Sangat Baik
                             </option>
                             <option value="baik" @if ($sikap->nilai == 'baik')  @endif>Baik
                             </option>
                             <option value="cukup" @if ($sikap->nilai == 'cukup')  @endif>Cukup
                             </option>
                             <option value="kurang" @if ($sikap->nilai == 'kurang')  @endif>Kurang
                             </option>
                         </select>
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