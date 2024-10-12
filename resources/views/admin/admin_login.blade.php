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

    <title>Easy Teacher 46</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Login <span
                    class="tx-info tx-normal">Admin</span></div>
            <div class="tx-center mg-b-60">Silahkan Login</div>
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session::get('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('admin.login') }}" class="d-block" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" required="" class="form-control"
                        placeholder="Enter email anda">
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" name="password" required="" class="form-control"
                        placeholder="Enter password anda">
                    <a href="" class="tx-info tx-12 d-block mg-t-10">Lupa Password?</a>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Login</button>
                <div class="sk-circle12 sk-child"></div>
                <div class="mg-t-60 tx-center">Belum masuk ke sistem ? <a href="{{ route('admin.register') }}"
                        class="tx-info">Register</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    </form>
    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>

</body>

</html>
