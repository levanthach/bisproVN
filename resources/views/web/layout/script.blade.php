
  <!-- JavaScript Libraries -->
  <script src="web/lib/jquery/jquery.min.js"></script>
  <script src="web/lib/jquery/jquery-migrate.min.js"></script>
  <script src="web/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="web/lib/easing/easing.min.js"></script>
  <script src="web/lib/mobile-nav/mobile-nav.js"></script>
  <script src="web/lib/wow/wow.min.js"></script>
  <script src="web/lib/waypoints/waypoints.min.js"></script>
  <script src="web/lib/counterup/counterup.min.js"></script>
  <script src="web/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="web/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="web/lib/lightbox/js/lightbox.min.js"></script>
  <script src="web/lib/magic-popup/jquery.magnific-popup.js"></script>
  <script src="web/lib/sweetalert/sweetalert.min.js"></script>
  <script src="web/lib/swiper/swiper.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="web/js/main.js?v=3225"></script>
    @yield('script')

    @if(session('success'))
      {{-- <script>
          $(".regis-notify").toggleClass("regis-active");
          $("#regis-notifyType").toggleClass("regis-success");

          setTimeout(function() {
              $(".regis-notify").removeClass("regis-active");
              $("#regis-notifyType").removeClass("regis-success");
          }, 4000);
      </script> --}}
      <script>
          swal("Thành công!", "Cảm ơn bạn đã đăng ký dịch vụ. Chúng tôi sẽ liên lạc bạn sớm!", "success");
          $('html,body').css('overflow', 'hidden');

          $('.swal-button--confirm').click(function() {
              console.log("Đã click");
              $('html,body').css('overflow', 'unset');
          });
      </script>
    @endif
  @if(session('resetpassword'))
      <script>
          swal("Thành công!", "Khôi phục mật khẩu thành công!", "success");
          $('html,body').css('overflow', 'hidden');

          $('.swal-button--confirm').click(function() {
              console.log("Đã click");
              $('html,body').css('overflow', 'unset');
          });
      </script>
  @endif
