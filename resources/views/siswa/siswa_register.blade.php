<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 siswa Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Register <span
                    class="tx-info tx-normal">Siswa</span></div>
            <div class="tx-center mg-b-60">Silahkan siswa Register Terlebih Dahulu</div>

            <form action="{{ route('siswa.register.create') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" required="" name="nama_siswa"
                        placeholder="Enter nama anda">
                </div><!-- form-group -->

                <div class="form-group">
                    <select name="kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                        <option value="10">Kelas 10</option>
                        <option value="11">Kelas 11</option>
                        <option value="12">Kelas 12</option>
                    </select>
                </div><!-- form-group -->

                <div class="form-group">
                    <select name="kompetensi" class="form-control">
                        <option value="">Pilih Kompetensi</option>
                        <option value="akl">Akutansi Keuangan Lembaga</option>
                        <option value="br">Bisnis Retail</option>
                        <option value="dkv">Desain Komunikasi Visual</option>
                        <option value="mp">Manajemen Perkantoran</option>
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                    </select>
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="email" name="email" required="" class="form-control"
                        placeholder="Enter email anda, domain gmail">
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" name="password" required="" class="form-control"
                        placeholder="Password harus 8 karakter !..">
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" name="password_confirmation" required="" class="form-control"
                        placeholder="Enter konfirmasi password">
                </div><!-- form-group -->

                <button type="submit" class="btn btn-info btn-block">Daftar</button>

                <div class="mg-t-40 tx-center">Sudah masuk ke sistem ? <a href="{{ route('siswa_login_form') }}"
                        class="tx-info">Login</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    </form>
    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>
    <script>
        $(function() {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>

</body>

</html>
