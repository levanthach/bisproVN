<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">

            <div class="col-sm-6">

              <div class="footer-info">
                <img class="img img-responsive" src="web/img/logo_s.png"
                  style="max-width: 170px; margin-bottom: 20px;" />
                <p>Hệ thống quản trị doanh nghiệp Bispro.vn - Điều hành doanh nghiệp mọi lúc mọi nơi.</p>
              </div>

            </div>

            <div class="col-sm-6">
              <br>
              <div class="footer-links">
                <h4>Liên hệ</h4>
                <p>
                  <strong>CÔNG TY TNHH CÔNG NGHỆ B2B</strong><br>
                  <strong>Địa chỉ:</strong> Tầng 8, Tòa nhà Loyal, 151 Võ Thị Sáu, P.6, Quận 3, Tp.HCM<br>
                  <strong>Phone:</strong> 098.999.5627 (Mr. Nam)<br>
                  <strong>Email:</strong> namvn@b2btech.com.vn<br>
                </p>
              </div>

              {{-- <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-skype"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div> --}}

            </div>

          </div>

        </div>

        <div class="col-lg-6">
       <form method="POST" action="{{ route('admin.contact.save-contact') }}" class="contactForm">
        @csrf
          <div class="form">
            <br>
            <h4>Hỗ trợ tư vấn</h4>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-12 col-md-6">
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Họ tên">
                    <div class="validation"></div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                      <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Doanh nghiệp">
                      <div class="validation"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Nội dung"></textarea>
                <div class="validation"></div>
              </div>

               {{-- @if(count($errors) > 0)
                  @foreach($errors->all() as $err)
                  <div class="alert alert-danger">
                      {{$err}} <br>
                  </div>
                  @endforeach
              @endif
              @if(session('success-'))
                  <div class="alert alert-success">
                      {{session('success')}}
                  </div>
              @endif --}}

              <div class="text-center"><button type="submit" title="Send Message">Gửi</button></div>
          </div>
        </form>

        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      © Copyright <strong>BISPRO.VN</strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
      Thiết kế bởi <a href="https://lethach.com" target="_blank">Lê Thạch</a>
    </div>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div class="socials-share">
  {{-- <a class="bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://bisprodemo.lethach.com/" target="_blank"><span class="fa fa-facebook"></span></a> --}}
  <a class="bg-twitter" href="Skype:live:.cid.bd0c78d715855b0c?chat"><span class="fa fa-skype"></span></a>
  {{-- <a class="bg-google-plus" href="https://plus.google.com/share?url=http://bisprodemo.lethach.com/" target="_blank"><span class="fa fa-google-plus"></span></a>
  <a class="bg-email" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=&body=" target="_blank"><span class="fa fa-envelope"></span></a> --}}
</div>

<div class="zalo-chat-widget" data-oaid="210758210054561998" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>

<!-- Load Facebook SDK for JavaScript -->
<div class="facebook-social">
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v8.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="640458643247595"
logged_in_greeting="Bispro.vn xin chào! Chúng tôi có thể giúp được gì cho bạn"
logged_out_greeting="Bispro.vn xin chào! Chúng tôi có thể giúp được gì cho bạn">
</div>
</div>

<div class="hotline-phone-ring-wrap">
<div class="hotline-phone-ring">
  <div class="hotline-phone-ring-circle"></div>
  <div class="hotline-phone-ring-circle-fill"></div>
  <div class="hotline-phone-ring-img-circle">
  <a href="tel:0819133143" class="pps-btn-img">
    <i class="fa fa-phone"></i>
  </a>
  </div>
</div>
<div class="hotline-bar">
  <a href="tel:0819133143">
    <span class="text-hotline">0819.133.143</span>
  </a>
</div>
</div>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

  <!-- Details Lightbox 2 -->
  <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-7 ">
          <div class="image-container-popup">
            <img class="img-fluid" src="web/img/details-2-office-team-work.svg" alt="alternative">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->

        <div class="col-lg-5">
          <h4>THÔNG TIN KHÁCH HÀNG</h4>
          <hr>
          <form class="register" method="POST" action="{{ route('admin.try-product.save-try-product') }}">
            @csrf
              <input type="hidden" name="type" value="1">
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="name" class="form-try-product" id="inputfullname" placeholder="Họ tên" name="full_name" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-try col-6">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputPhone" placeholder="Phone" name="phone" required>
                </div>
              </div>
              <div class="col-try col-6">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputEmail" placeholder="Email" name="email" required email>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputPosition" placeholder="Chức vụ" name="position" required>
                </div>
            </div>
            </div>
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputBusiness_field" placeholder="Tên doanh nghiệp" name="business_name" required>
                </div>
              </div>
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputBusiness" placeholder="Lĩnh vực kinh doanh" name="business_field">
                </div>
              </div>

              <div class="col-try col-12">
                <div class="form-group">
                  <label for="product" style="padding-left: 5px">Dịch vụ dùng thử:</label>
                  <select id="product" name="try_product" class="form-try-product">
                    @foreach($products as $product)
                      <option value="{{ $product->name }}">{{ $product->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <h4>Nhập kết quả:</h4>
            <hr>
            <div class="row capcha">
              <div class="col-try col-12">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-try-product" id="numb1" name="numb1" readonly required>
                  </div>
                  <span class="pt-3">+</span>
                  <div class="col-3">
                    <input type="text" class="form-try-product" id="numb2" name="numb2" readonly required>
                  </div>
                  <span class="pt-3">=</span>
                  <div class="col-5">
                    <div class="form-group">
                      <input type="number" class="form-try-product" placeholder="Tổng" id="result" name="result" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row alert-register">

            </div>
              <button type="submit" class="btn-solid-reg">ĐĂNG KÝ</button>
              </form>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of lightbox-basic -->
  <!-- end of details lightbox 2 -->


  <!-- Details Lightbox 2 -->
  <div id="details-lightbox-try" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
      <div class="row">
        <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
        <div class="col-lg-7 ">
          <div class="image-container-popup">
            <img class="img-fluid" src="web/img/details-2-office-team-work.svg" alt="alternative">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->

        <div class="col-lg-5">
          <h4>THÔNG TIN KHÁCH HÀNG</h4>
          <hr>
          <form class="register" method="POST" action="{{ route('admin.try-product.save-try-product') }}">
            @csrf
              <input type="hidden" name="type" value="0">
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="name" class="form-try-product" id="inputfullname" placeholder="Họ tên" name="full_name" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-try col-6">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputPhone" placeholder="Phone" name="phone" required>
                </div>
              </div>
              <div class="col-try col-6">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputEmail" placeholder="Email" name="email" required email>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputPosition" placeholder="Chức vụ" name="position" required>
                </div>
            </div>
            </div>
            <div class="row">
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputBusiness_field" placeholder="Tên doanh nghiệp" name="business_name" required>
                </div>
              </div>
              <div class="col-try col-12">
                <div class="form-group">
                  <input type="text" class="form-try-product" id="inputBusiness" placeholder="Lĩnh vực kinh doanh" name="business_field">
                </div>
              </div>

              <div class="col-try col-12">
                <div class="form-group">
                  <label for="product" style="padding-left: 5px">Dịch vụ đăng ký:</label>
                  <input type="text" class="form-try-product" id="product" value="" name="try_product" readonly required>
                </div>
              </div>
            </div>

            <h4>Nhập kết quả:</h4>
            <hr>
            <div class="row capcha">
              <div class="col-try col-12">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-try-product" id="numb1" name="numb1" readonly required>
                  </div>
                  <span class="pt-3">+</span>
                  <div class="col-3">
                    <input type="text" class="form-try-product" id="numb2" name="numb2" readonly required>
                  </div>
                  <span class="pt-3">=</span>
                  <div class="col-5">
                    <div class="form-group">
                      <input type="number" class="form-try-product" placeholder="Tổng" id="result" name="result" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row alert-register">

            </div>
              <button type="submit" class="btn-solid-reg">ĐĂNG KÝ</button>
              </form>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of lightbox-basic -->
  <!-- end of details lightbox 2 -->

    <!-- Details Login Popup -->
    <div id="login" class="lightbox-basic zoom-anim-dialog mfp-hide">

      <div class="container">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
          <div class="col-lg-7">

        </div> <!-- end of row -->
      </div> <!-- end of container -->
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <div class="login100-form validate-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              <h2>ĐĂNG <span>NHẬP</span></h2>

              <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                <span class="label-input100">Tên tài khoản</span>
                <input class="input100" type="text" id="username" name="username" placeholder="Nhập username" required>
                <span class="focus-input100" data-symbol=""></span>
              </div>

              <div class="wrap-input100 validate-input" data-validate="Password is required">
                <span class="label-input100">Mật khẩu</span>
                <input class="input100" type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                <span class="focus-input100" data-symbol=""></span>
              </div>

              <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('password.reset') }}">
                  Quên mật khẩu?
                </a>
              </div>

              <div class="row">
                <div class="col-3">
                  <input type="text" class="form-try-product" id="numb-login-1" name="numblogin1" readonly required>
                </div>
                <span class="pt-3">+</span>
                <div class="col-3">
                  <input type="text" class="form-try-product" id="numb-login-2" name="numblogin2" readonly required>
                </div>
                <span class="pt-3">=</span>
                <div class="col-5">
                  <div class="form-group">
                    <input type="number" class="form-try-product" placeholder="Tổng" id="sum-login" name="sumlogin" required>
                  </div>
                </div>
              </div>
              <div class="row alert-login">
              </div>

              <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                  <div class="login100-form-bgbtn"></div>
                  <button class="login100-form-btn">
                    Đăng nhập
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- end of details login popup 2 -->


