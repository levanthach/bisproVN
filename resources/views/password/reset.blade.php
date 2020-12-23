<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Newnet">
    <title>Đặt lại mật khẩu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <base href="{{asset('')}}">
    <link href="web/img/favicon.png" rel="icon">
    <link href="web/img/apple-touch-icon.png" rel="apple-touch-icon">



<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="web/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="web/lib/animate/animate.min.css" rel="stylesheet">
<link href="web/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="web/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="web/css/style.css" rel="stylesheet">

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="web/form_login/css/util.css">
  <link rel="stylesheet" type="text/css" href="web/form_login/css/main.css">
<!--===============================================================================================-->
</head>
<body class="@yield('body-class')">

<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center w-100">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Quên<span> mật khẩu</span></h2>
          <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
              @if(session('success'))
                <h3>{{ session('success') }}</h3>
              @endif
              <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width: 800px">
                <form class="login100-form validate-form" method="POST" action="{{ route('password.send-mail') }}">
                  @csrf
                  <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Nhập địa chỉ Email" required>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                  </div>
                  <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                      <div class="login100-form-bgbtn"></div>
                      <button class="login100-form-btn">
                        Gửi
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


        </div>

        <div class="col-md-6 order-md-last order-first">
          <img src="web/img/details-2-office-team-work.svg" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

<!--===============================================================================================-->
<!-- Form Login -->
  <script src="web/form_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="web/form_login/vendor/bootstrap/js/popper.js"></script>
  <script src="web/form_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="web/form_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="web/form_login/vendor/daterangepicker/moment.min.js"></script>
  <script src="web/form_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="web/form_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="web/form_login/js/main.js"></script>

</body>
</html>
