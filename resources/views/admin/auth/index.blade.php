<!DOCTYPE html>

<html lang="en">

  <!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Bispro Portal </title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->
    
    <link rel="shortcut icon" href="{{ asset('./assets/imgs/favicon.png') }}" />

    @include('admin.layout.style')
    
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="overflow-x: hidden;">
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                <!--begin::Aside-->
                <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url({{ asset('./assets/media/bg/bg-4.jpg') }});">
                <div class="kt-grid__item">
                    <a href="#" class="kt-login__logo">
                    <img alt="Logo" src="{{ asset('./assets/imgs/logo_s.png') }}" style="width: 45%">
                    </a>
                </div>
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                    <div class="kt-grid__item kt-grid__item--middle">
                    <h3 class="kt-login__title">Welcome to Bispro Portal</h3>
                    
                    </div>
                </div>
                <div class="kt-grid__item">
                    <div class="kt-login__info">
                    <div class="kt-login__copyright">
                        &copy 2020 Bispro
                    </div>
                    
                    </div>
                </div>
                </div>

                <!--begin::Aside-->

                <!--begin::Content-->
                <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
                    <!--begin::Body-->
                    <div class="kt-login__body">

                        <!--begin::Signin-->
                        <div class="kt-login__form">
                        <div class="kt-login__title">
                            <h3>Đăng nhập</h3>
                        </div>
                        <!--begin::Form-->
                        <form method="POST" class="kt-form" action="{{ route('admin.login') }}" novalidate="novalidate" id="kt_login_form">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off" required>
                            </div>

                            @if(session('error'))
                                {!! session('error') !!}
                            @endif

                            <!--begin::Action-->
                            <div class="kt-login__actions">
                                <a href="{{ route('password.reset') }}" class="kt-link kt-login__link-forgot">
                                    Quên mật khẩu ?
                                </a>
                                <button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Đăng nhập</button>
                            </div>
                            <!--end::Action-->

                        </form>
                        <!--end::Form-->

                        </div>
                        <!--end::Signin-->

                    </div>
                <!--end::Body-->

                </div>
                <!--end::Content-->

            </div>
        </div>
    </div>

    @include('admin.layout.script')
</body>
</html>