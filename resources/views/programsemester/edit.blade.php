@extends('userdashboard.user_master')
@section('title')
Edit Data Program Semester
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">Program Semester</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Edit Data Program Semester</h5>
      </div>
      <!-- sl-page-title -->
      @include('error.error')
      <form action="{{ route('programsemester.update', [$programsemester->id]) }}" method="POST" class="form-horizontal">
         @csrf
         {{ method_field('PUT') }}
         <div class="card pd-20 pd-sm-40">
            <div class="form-layout">
               <div class="row mg-b-25">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Kompetensi Dasar: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="komdas" value="{{ $programsemester->komdas }}" placeholder="Enter Kompetensi Dasar">
                     </div>
                  </div>
                  <!-- col-12 -->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Alokasi Waktu: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="alokasi_waktu" value="{{ $programsemester->alokasi_waktu }}" placeholder="Enter alokasi waktu, seperti 15 menit">
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Semester : <span class="tx-danger">*</span></label>
                        <select name="semester" class="form-control select2">
                        <option value="semester_gjl" @if ($programsemester->semester == 'semester_gjl')  @endif>Semester Ganjil
                        </option>
                        <option value="semester_gnp" @if ($programsemester->semester == 'semester_gnp')  @endif>Semester Genap
                        </option>
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Bulan : <span class="tx-danger">*</span></label>
                        <select name="bulan" class="form-control select2">
                        <option value="januari" @if ($programsemester->bulan == 'januari')  @endif>Januari
                        </option>
                        <option value="februari" @if ($programsemester->bulan == 'februari')  @endif>Februari
                        </option>
                        <option value="maret" @if ($programsemester->bulan == 'maret')  @endif>Maret
                        </option>
                        <option value="april" @if ($programsemester->bulan == 'april')  @endif>April
                        </option>
                        <option value="mei" @if ($programsemester->bulan == 'mei')  @endif>Mei
                        </option>
                        <option value="juni" @if ($programsemester->bulan == 'juni')  @endif>Juni
                        </option>
                        <option value="juli" @if ($programsemester->bulan == 'juli')  @endif>Juli
                        </option>
                        <option value="agustus" @if ($programsemester->bulan == 'agustus')  @endif>Agustus
                        </option>
                        <option value="september" @if ($programsemester->bulan == 'september')  @endif>September
                        </option>
                        <option value="oktober" @if ($programsemester->bulan == 'oktober')  @endif>Oktober
                        </option>
                        <option value="november" @if ($programsemester->bulan == 'november')  @endif>November
                        </option>
                        <option value="desember" @if ($programsemester->bulan == 'desember')  @endif>Desember
                        </option>
                        </select>
                     </div>
                  </div>
                  <!-- col-12-->
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="keterangan" value="" placeholder="Enter Keterangan">{{ $programsemester->keterangan }}</textarea>
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