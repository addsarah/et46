@extends('userdashboard.user_master')
@section('title')
    Tambah Data Mata Pelajaran
@endsection
@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Administrasi Guru</a>
            <span class="breadcrumb-item active">Mata Pelajaran</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Tambah Data Mata Pelajaran</h5>
            </div>
            <!-- sl-page-title -->
            @include('error.error')
            <form action="{{ route('mapel.store') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Mata Pelajaran: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="nama_mapel" value="{{ old('nama_mapel') }}"
                                        placeholder="Enter Nama Mapel">
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label>Kelas</label>
                                    <select class="form-control" name="kelas">
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="form-group">
                                <label class="form-control-label">KKM: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="kkm" value="{{ old('kkm') }}" placeholder="Enter KKM">
                            </div>
                            <!-- col-12 -->
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
