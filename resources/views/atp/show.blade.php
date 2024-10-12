@extends('userdashboard.user_master')
@section('title')
Detail Data TP / ATP
@endsection
@section('userdashboard')
<div class="sl-mainpanel">
   <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="">Administrasi Guru</a>
      <span class="breadcrumb-item active">TP / ATP</span>
   </nav>
   <div class="sl-pagebody">
      <div class="sl-page-title">
         <h5>Detail Data TP / ATP</h5>
      </div>
      <div class="card pd-20 pd-sm-40">
         <div class="table-wrapper">
            <table class="table display responsive nowrap">
               <tbody>
                  <tr>
                     <td>Elemen</td>
                     <td>:</td>
                     <td>{{ $atp->elemen }}</td>
                  </tr>
                  <tr>
                     <td>Capaian Pembelajaran</td>
                     <td>:</td>
                     <td>{{ $atp->cp }}</td>
                  </tr>
                  <tr>
                     <td>Tujuan Pembelajaran</td>
                     <td>:</td>
                     <td>{{ $atp->tp }}</td>
                  </tr>
                  <tr>
                     <td>Alur Tujuan Pembelajaran</td>
                     <td>:</td>
                     <td>{{ $atp->atp }}</td>
                  </tr>
                  <tr>
                     <td>Kriteria Ketercapaian Tujuan Pembelajaran</td>
                     <td>:</td>
                     <td>{{ $atp->kktp->elemen}}</td>
                  </tr>
                  <tr>
                     <td>Rencana Asesmen</td>
                     <td>:</td>
                     <td>{{ $atp->renas}}</td>
                  </tr>
                  <!-- Tambahkan kolom lain yang Anda butuhkan -->
               </tbody>
            </table>
         </div>
         <div class="box">
            <a class="btn btn-primary" href="{{ route('atp.index') }}">
            <i class="fa fa-angle-left"></i> Back</a>
         </div>
      </div>
   </div>
</div>
@endsection