@extends('userdashboard.user_master')
@section('title')
    Tambah Data Nilai
@endsection
@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Nilai</a>
            <span class="breadcrumb-item active">Nilai</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Tambah Data Nilai</h5>
            </div>
            <!-- sl-page-title -->
            @include('error.error')
            <form action="{{ route('nilai.store') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="form-group">
                                <label class="form-control-label">Nama Siswa: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="siswas_id">
                                    @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">
                                        {{ $siswa->nama_siswa }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>                            
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label>Mata Pelajaran</label>
                                    <select class="form-control" name="mapels_id">
                                        @foreach ($mapels as $mapel)
                                        <option value="{{ $mapel->id }}">
                                            {{ $mapel->nama_mapel }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label>KKM</label>
                                    <select class="form-control" name="mapels_id">
                                        @foreach ($mapels as $mapel)
                                        <option value="{{ $mapel->id }}">
                                            {{ $mapel->kkm }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="form-group">
                                <label class="form-control-label">Nilai Tugas : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="nilai_tugas" value="{{ old('nilai_tugas') }}" placeholder="Enter Nilai Tugas">
                            </div>
                            <!-- col-12 -->
                            <div class="form-group">
                                <label class="form-control-label">Nilai Ulangan : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="nilai_ulangan_harian" value="{{ old('nilai_ulangan_harian') }}" placeholder="Enter Nilai Tugas">
                            </div>
                            <!-- col-12 -->
                            <div class="form-group">
                                <label class="form-control-label">Nilai Tengah Semester : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="nilai_tengah_semester" value="{{ old('nilai_tengah_semester') }}" placeholder="Enter Nilai Tengah Semester">
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label class="form-control-label">Nilai Akhir Semester : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="nilai_akhir_semester" value="{{ old('nilai_akhir_semester') }}" placeholder="Enter Nilai Akhir Semester">
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Semester <span class="tx-danger">*</span></label>
                                    <select name="semester" class="form-control select2">
                                        <option label="Pilih semester"></option>
                                        <option value="ganjil">Ganjil</option>
                                        <option value="genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Tahun Ajaran<span class="tx-danger">*</span></label>
                                    <select name="ta" class="form-control select2">
                                        <option label="Pilih Tahun Ajaran"></option>
                                        <option value="2022/2023">2022 / 2023</option>
                                        <option value="2023/2024">2023 / 2024</option>
                                        <option value="2024/2025">2024 / 2025</option>
                                    </select>
                                </div>
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
