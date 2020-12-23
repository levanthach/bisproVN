<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->

    <!-- Uncomment this to display the close button of the panel
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    -->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
        </div>
    </div>
    <!-- end:: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper">
                <div class="kt-header__topbar-user">

                <span class="kt-header__topbar-username kt-hidden-mobile">
                    
                    <div class="btn btn-outline-success">Chào, {{ Auth::user()->username}}</div>
                    &emsp;
                    <a href="{{ route('admin.logout') }}" class="btn btn-outline-warning">Đăng xuất</a>
            </span>
                </div>
            </div>

        </div>
        <!--end: User Bar -->

    </div>
    <!-- end:: Header Topbar -->

</div>
<!-- end:: Header -->
