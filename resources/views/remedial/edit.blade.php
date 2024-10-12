@extends('userdashboard.user_master')
@section('title')
    Tambah Data Remedial
@endsection
@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Nilai</a>
            <span class="breadcrumb-item active">Remedial</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Tambah Data Remedial</h5>
            </div>
            <!-- sl-page-title -->
            @include('error.error')
            <form action="{{ route('remedial.edit', $nilai->id) }}" method="POST" class="form-horizontal">
                @csrf
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label>Tahun Ajaran</label>
                                    <select class="form-control" name="nilais_id">
                                        <option value="{{ $nilai->id }}">
                                            {{ $nilai->ta }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Siswa: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="nilais_id">
                                        <option value="{{ $nilai->siswa->id }}">
                                            {{ $nilai->siswa->nama_siswa }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label>Mata Pelajaran</label>
                                    <select class="form-control" name="nilais_id">
                                        <option value="{{ $nilai->mapel->id }}">
                                            {{ $nilai->mapel->nama_mapel }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nilai sebelum:</label>
                                    <select class="form-control" name="nilai_sebelum">
                                        @if ($nilai->mapel->kkm > $nilai->nilai_ulangan_harian)
                                            <option value="ulangan_harian">
                                                Nilai Ulangan Harian: {{ $nilai->nilai_ulangan_harian }}
                                            </option>
                                        @endif
                                        @if ($nilai->mapel->kkm > $nilai->nilai_tengah_semester)
                                            <option value="tengah_semester">
                                                Nilai Tengah Semester: {{ $nilai->nilai_tengah_semester }}
                                            </option>
                                        @endif
                                        @if ($nilai->mapel->kkm > $nilai->nilai_akhir_semester)
                                            <option value="akhir_semester">
                                                Nilai Akhir Semester: {{ $nilai->nilai_akhir_semester }}
                                            </option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nilai sesudah: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="sesudah" value="{{ old('sesudah') }}"
                                        placeholder="Enter Nilai sesudah">
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
