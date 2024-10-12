@extends('siswa.siswa_master')
@section('title')
    Dashboard
@endsection

<!-- siswa nama folder -->
@section('siswa')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">E.T.46</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Ulangan Harian</h6>
                            <a href="" class="tx-white-8 hover-white"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">Rata-rata</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">[ - ] Minimal</span>
                                <h6 class="tx-white mg-b-0">60</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">[ + ] Maksimal</span>
                                <h6 class="tx-white mg-b-0">89</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Tengah Semester</h6>
                            <a href="" class="tx-white-8 hover-white"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">Rata-rata</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">[ - ] Minimal</span>
                                <h6 class="tx-white mg-b-0">50</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">[ + ] Maksimal</span>
                                <h6 class="tx-white mg-b-0">90</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Akhir Semester</h6>
                            <a href="" class="tx-white-8 hover-white"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">Rata-rata</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">[ - ] Minimal</span>
                                <h6 class="tx-white mg-b-0">80</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">[ + ] Maksimal</span>
                                <h6 class="tx-white mg-b-0">87</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Sikap</h6>
                            <a href="" class="tx-white-8 hover-white"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">Rata-rata</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">[ - ] Minimal</span>
                                <h6 class="tx-white mg-b-0">Cukup Baik</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">[ + ] Maksimal</span>
                                <h6 class="tx-white mg-b-0">Sangat Baik</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->
            <div class="card pd-20 pd-sm-25 mg-t-20">
                <div class="chartjs-size-monitor"
                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>

                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong class="d-block d-sm-inline-block-force">Harap Bersabar, sedaang !...</strong>
                    <center>
                        <h1 class="tx-inverse ">UJI COBA</h1>
                </div>

                <canvas id="chartBar4" height="298" width="652" style="display: block; width: 652px; height: 298px;"
                    class="chartjs-render-monitor"></canvas>
            </div>
        </div><!-- sl-pagebody -->
    @endsection
