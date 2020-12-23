@extends('web.layout.index')
@section('content')

<main id="main">
<section id="slider">
    <div class="row align-items-center d-md-none d-lg-none d-xs-block">
      <div class="col-12 col-carousel">
        <div class="owl-carousel carousel-main">
          {{-- <div><img src="images/banner_1.png"></div> --}}
          <div><img src="images/banner_2.jpg"></div>
          <div><img src="images/banner_3.jpg"></div>
          <div><img src="images/banner_4.jpg"></div>
          <div><img src="images/banner_5.jpg"></div>
          <div><img src="images/banner_6.jpg"></div>
          <div><img src="images/banner_7.png"></div>
          <div><img src="images/banner_8.jpg"></div>
          <div><img src="images/banner_9.jpg"></div>
        </div>
      </div>
    </div>

  <div class="swiper-container">
    <ul class="swiper-wrapper">
      {{-- <li class="swiper-slide">
         <img src="images/banner_1.png">
      </li> --}}
      <li class="swiper-slide">
         <img src="images/banner_2.jpg">
      </li>
      <li class="swiper-slide">
          <img src="images/banner_3.jpg">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_4.jpg">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_5.jpg">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_6.jpg">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_7.png">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_8.jpg">
      </li>
      <li class="swiper-slide">
         <img src="images/banner_9.jpg">
      </li>
     
    </ul>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>
</section>

  <section id="services">
    <div class="container">

    @if(session('error'))
        <script>alert('Thông tin đăng nhập không chính xác');</script>
    @endif
      <header class="section-header">
        <h3>Sản phẩm</h3>
        <p>Các sản phẩm hệ thống quản trị doanh nghiệp Bispro.vn</p>
      </header>

      <div class="row">
        <div class="owl-carousel product-carousel">
          @foreach($products as $product)
              <div class="wow bounceInUp box-product" data-wow-duration="1.4s"
                style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
                <div class="icon"><img src="images/{{ $product->images }}" alt="{{ $product->images }}"/></div>
                  <div class="box">
                    <h4 class="title"><a href="">{{ $product->name }}</a></h4>
                    <p class="description">
                        @php $discription = explode(',' , $product->description);
                          echo "<ul class='text-desc'>";
                          foreach ($discription as $value) {
                            echo "<li>" . $value . "</li>";
                          }
                          echo "</ul>";
                        @endphp
                    </p>
                    <a href="#prod_{{ $product->id }}" data-id="{{ $product->id }}" class="btn-more-detail" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="prod_{{ $product->id }}">Chi tiết</a>
                    <a class="btn-more-detail popup-with-move-anim" data-product="{{ $product->name }}" href="#details-lightbox-2" style="background: #f8991c">Dùng thử</a>
                  </div>
                </div>
          @endforeach
        </div>
      </div>


      @foreach($products as $product)
        <div class="row content-product-detail collapse" id="prod_{{ $product->id }}" data-collapse="{{ $product->id }}">
          <div class="col-12">
              <h3 class="title text-center">{{ $product->name }}</h3>
              <div class="content text-justify">{!! $product->content !!}</div>
              {{-- <a data-target=".dis" class="Smallbutton3" style=" cursor:pointer" href="#storage">
                <img style="float:right" width="30px" src="web/img/up-icon.png">
              </a> --}}
          </div>
        </div>
      @endforeach
    </div>
    {{-- end container --}}

  </section>

  <!-- Pricing -->
  <section id="fa" class="section-bg">
  <div id="pricing" class="cards-2 wow fadeInUps">
    <div class="container">
      <header class="section-header">
        <h3>Bảng giá</h3>
       <p>Bảng giá áp dụng từ ngày 01 /01/2020 đến hết 31/12/2020</p>
      </header>
      <div class="tab-pricing">
        <ul class="nav nav-pills">
            @foreach ($price_list_tab as $key => $v_price_tab)
              <li <?php echo ($key == 0) ? 'class="active"' : '' ?>><a data-toggle="pill" href="#tab{{ $key }}" class="tab-pane-{{ $key + 1 }} <?php echo ($key == 0) ? 'active' : '' ?>">{{ $v_price_tab->name }}</a></li>
            @endforeach
        </ul>
      </div>


      <div class="tab-content">
      <div id="tab0" class="tab-pane fade in active show">
          <!-- Basic Pricing Table -->
          <!-- Pricing Table Area -->
          <div class="gg-pricing-table icon-table mt-50 row">
            <div class="owl-carousel price-carousel">
              <!-- Single Table -->
              @foreach ($price_list as $value)
                  @if($price_list_tab[0]['id'] == $value->category_id)
                    <div class="single-pricing-table text-center clearfix">
                      <!-- Heading -->
                      <div class="pricing-table-heading">
                      <h2>{{ $value->industry }}</h2>
                      </div>
                      <!-- Price -->
                      <div class="price">
                      <span>{{ number_format($value->price) }}</span>
                      <small style="font-size: 14px;">đ/tài khoản/tháng</small>
                      </div>
                      <!-- Price Item -->
                      <div class="pricing-item">
                        <ul>
                          <li><p>
                            @php $features = explode(',' , $value->modules);
                              foreach ($features as $feature) {
                                echo "<strong><i class='fa fa-check'></i></strong>";
                                echo $feature . "<br>";
                              }
                            @endphp
                          </p></li>
                          <li><p><strong>Min: </strong>{{ $value->min }} User</p></li>
                          <li><p><strong>Max: </strong>{{ $value->max }} User</p></li>
                        </ul>
                      </div>
                      <!-- Button -->
                      <div class="pricing-button">
                        <a class="btn btn-pricing popup-with-move-anim" href="#details-lightbox-try">ĐĂNG KÝ</a>
                      </div>
                    </div>

                    {{-- end col 4 --}}
                @endif
              @endforeach
            </div>
          </div>
      </div>  {{-- end tab 0 --}}

      <div id="tab1" class="tab-pane fade">
        <!-- Basic Pricing Table -->
        <!-- Pricing Table Area -->
        <div class="gg-pricing-table icon-table mt-50 row">
          <div class="owl-carousel price-carousel">
            <!-- Single Table -->
            @foreach ($price_list as $value)
                @if($price_list_tab[1]['id'] == $value->category_id)
                  <div class="single-pricing-table text-center clearfix">
                    <!-- Heading -->
                    <div class="pricing-table-heading">
                    <h2>{{ $value->industry }}</h2>
                    </div>
                    <!-- Price -->
                    <div class="price">
                    <span>{{ number_format($value->price) }}</span>
                    <small style="font-size: 14px;">đ/tài khoản/tháng</small>
                    </div>
                    <!-- Price Item -->
                    <div class="pricing-item">
                      <ul>
                        <li><p>
                          @php $features = explode(',' , $value->modules);
                            foreach ($features as $feature) {
                              echo "<strong><i class='fa fa-check'></i></strong>";
                              echo $feature . "<br>";
                            }
                          @endphp
                        </p></li>
                        <li><p><strong>Min: </strong>{{ $value->min }} User</p></li>
                        <li><p><strong>Max: </strong>{{ $value->max }} User</p></li>
                      </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button">
                      <a class="btn btn-pricing popup-with-move-anim" href="#details-lightbox-try">ĐĂNG KÝ</a>
                    </div>
                  </div>

                  {{-- end col 4 --}}
              @endif
            @endforeach
          </div>
        </div>
    </div>  {{-- end tab 0 --}}

          </div> <!-- end tab-content -->
      </div>

    </div> <!-- end of container -->
</div>
</section>


  <!--==========================
    Frequently Asked Questions Section
  ============================-->
  {{-- <section id="faq">
    <div class="container">
      <header class="section-header">
        <h3>Release Notes</h3>
        <p>Lịch sử các lần cập nhật, nâng cấp hệ thống quản trị doanh nghiệp Bispro.vn</p>
      </header>

      <ul id="faq-list" class="wow fadeInUp">
        @if(!$nodes->isEmpty())
          @foreach ($nodes as $v_node)

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq{{ $v_node->id }}">{{ $v_node->name }}<i class="ion-android-remove"></i></a>
                <div id="faq{{ $v_node->id }}" class="collapse" data-parent="#faq-list">
                  @foreach ($node_details as $v_node_detail)
                    <h6 class="title-node">+ {{ $v_node_detail->name }}</h6>
                    <p>{!! $v_node_detail->content !!} </p>
                    @endforeach
                </div>
              </li>
          @endforeach
          @else
             <p>Hiện tại chưa có Release Note!</p>
          @endif
      </ul>

    </div>
  </section><!-- Release Node --> --}}

</main>

@endsection

