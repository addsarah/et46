@extends('admin.admin_master')
@section('title')
    Detail Data Guru
@endsection

@section('admin')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="">User Management</a>
            <span class="breadcrumb-item active">Guru</span>
        </nav>
        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Detail Data Guru</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table class="table display responsive nowrap">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Dibuat Pada</td>
                                <td>:</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box">
                    <a class="btn btn-primary" href="{{ route('adduser.index') }}">
                        <i class="fa fa-angle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
