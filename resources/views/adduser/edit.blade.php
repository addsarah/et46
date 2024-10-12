@extends('admin.admin_master')
@section('title')
    Edit Data Guru
@endsection
@section('admin')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">User Management</a>
            <span class="breadcrumb-item active">Guru</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Edit Data Guru</h5>
            </div>
            <!-- sl-page-title -->
            <form action="{{ route('adduser.update', [$user->id]) }}" method="POST" class="form-horizontal">
                @csrf
                {{ method_field('PUT') }}
                <div class="card pd-20 pd-sm-40">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}"
                                        placeholder="Enter Nama">
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email" value="{{ $user->email }}"
                                        placeholder="Enter Email, domain@gmail.com">
                                </div>
                            </div>
                            <!-- col-12 -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="password" name="password"
                                        value="{{ $user->password }}" placeholder="Enter password">
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
