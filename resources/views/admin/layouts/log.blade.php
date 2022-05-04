<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vormia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Monoton&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/admin/mazer/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/admin/mazer/css/app.css">
    <link rel="stylesheet" href="/admin/mazer/css/pages/auth.css">

    <link rel="shortcut icon" href="/admin/mazer/images/favicon.svg" type="image/x-icon">

    <!-- Load Vormia CSS -->
    <link rel="stylesheet" href="/admin/vormia/vrm/css/vrm-auth.min.css?<?= time() ?>">

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo vrm-logo-text">
                        <a href="{{ url('/vrm/dashboard') }}">
                            <img src="/admin/vormia/vrm/img/logo/logo-blue.png" alt="Logo">
                            <span>Vormia</span>
                        </a>
                    </div>
                    @yield('about')

                    <!-- Main Page -->
                    @yield('content')
                    <!-- End Main Page -->

                    @yield('next')
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>

    </div>
</body>

</html>
