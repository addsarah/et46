@extends('userdashboard.user_master')
@section('title')
    Edit Data KKTP
@endsection
@section('userdashboard')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">Administrasi Guru</a>
            <span class="breadcrumb-item active">KKTP</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Edit Data KKTP</h5>
            </div>
            <!-- sl-page-title -->
            <form action="{{ route('kktp.update', [$kktp->id]) }}" method="POST" class="form-horizontal">
                @csrf
                {{ method_field('PUT') }}
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Elemen: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="elemen" value="{{ $kktp->elemen }}"
                                        placeholder="Enter elemen">
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Tujuan Pembelajaran: <span
                                            class="tx-danger">*</span></label>
                                    <textarea class="form-control" type="text" name="tp" value="" placeholder="Enter Tujuan Pembelajaran">{{ $kktp->tp }}</textarea>
                                </div>
                            </div>
                            <!-- col-12-->
                            <div class="col-lg-12">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Interval: <span class="tx-danger">*</span></label>
                                    <select name="interval" class="form-control select2">
                                        <option value="pb" @if ($kktp->interval == 'pb')  @endif>Perlu Bimbingan
                                        </option>
                                        <option value="cukup" @if ($kktp->interval == 'cukup')  @endif>Cukup
                                        </option>
                                        <option value="baik" @if ($kktp->interval == 'baik')  @endif>Baik
                                        </option>
                                        <option value="sb" @if ($kktp->interval == 'sb')  @endif>Sangat Baik
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
