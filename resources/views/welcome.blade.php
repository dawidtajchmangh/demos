
<!DOCTYPE html>
<html lang="zxx">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home </title>
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images/fav-icon/fav-icon.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/bootstrap.min.css')}}">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/jquery.fancybox.min.css')}}">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/animate.css')}}">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/swiper.min.css')}}">
        
        <!-- Splitting -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/splitting.css')}}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        <!-- fontAwesome -->
        <link rel="stylesheet" href="{{url('assets/css/vendors/all.min.css')}}">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;600;700;800;900&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap">
        
        <!-- main-LTR-1 -->
        <link rel="stylesheet" href="{{url('assets/css/main-LTR-1.css')}}">
  </head>
  <body class="   overlay-is-grey hard-squared-btns ">
    <!--Start Page Header-->
    <header class=" page-header light-header menu-on-end " id="page-header">
      {{-- <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
          <div class="search-wraper"> 
            <label class="search-lbl">Search for:</label>
            <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
            <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
          </div>
        </form>
      </div> --}}
      <!--start navbar-->
      <div class="container">
        <nav class="main-navbar " id="main-nav"><a class="navbar-brand " href="#"><img class="brand-logo light-logo img-fluid " src="assets/images/logo/logo-light-wide.png" alt="site logo"/><img class="brand-logo dark-logo img-fluid " src="assets/images/logo/logo-dark-wide.png" alt="site logo"/></a>
          <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
          <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
            <ul class="navbar-nav  mobile-menu ">

              <li class="nav-item"><a class="nav-link  " href="#">Home </a></li>
        
              <li class="nav-item"><a class="nav-link  " href="{{route('gallery')}}">Gallery</a></li>

              @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif

            </ul>
          </div>
          {{-- <div class="header-search-btn">
            <svg class="search-icon" width="60" height="60" viewBox="0 0 60 60">
              <g transform="translate(-1460 -905)">
                <g transform="translate(1460 905)">
                  <g transform="translate(0 0)">
                    <path class="search-path" d="M59.634,56.1,42.2,38.669A23.8,23.8,0,1,0,38.669,42.2L56.1,59.634a1.25,1.25,0,0,0,1.768,0l1.767-1.767A1.25,1.25,0,0,0,59.634,56.1ZM23.75,42.5A18.75,18.75,0,1,1,42.5,23.75,18.771,18.771,0,0,1,23.75,42.5Z" transform="translate(0 0)"></path>
                  </g>
                </g>
              </g>
            </svg>
          </div> --}}
        </nav>
      </div>
    </header>
    <!--End Page Header-->
    <!-- Start  Page hero-->
    <section class="page-hero hero-swiper-slider slider-fade off-grid-text  d-flex align-items-center" id="page-hero">
      <div class="overlay-photo-image-bg "></div>
      <div class="overlay-color"></div>
      <div class="hero-social-icons center-position start-align  ">
        <div class="sc-wraper dir-col sc-flat ">
          <ul class="sc-list">
            <li class="sc-item " title="Facebook"><a class="sc-link" href="https://www.messenger.com/"><i class="fa-brands fa-facebook-messenger" style="font-size: 50px;"></i></a></li>

          </ul>
        </div>
      </div>
      <!--Start  Swiper JS slider-->
      <div class="slider swiper-container">
        <div class="swiper-wrapper ">
          <!--first slider-->
          <div class="swiper-slide"> 
            <div class="slide-content">
              <div class="slider-bg">
                <div class="overlay-color"></div>
                <img class="slider-bg-img" src="assets/images/hero/slider3.jpg" alt="slider-bg 1">
              </div>
              <div class="container"> 
                <div class="row">
                  <div class="col-12  offset-xl-1  col-lg-8">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--second slider-->
          <div class="swiper-slide"> 
            <div class="slide-content">
              <div class="slider-bg">
                <div class="overlay-color"></div>
                <img class="slider-bg-img" src="assets/images/hero/slider2.jpg" alt="slider-bg 2">
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12  offset-xl-1 col-lg-8  ">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--third slider-->
          <div class="swiper-slide"> 
            <div class="slide-content">
              <div class="slider-bg">
                <div class="overlay-color"></div><img class="slider-bg-img" src="assets/images/hero/slider1.jpg" alt="slider-bg 3">
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-12  offset-xl-1  col-lg-8  ">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination wow fadeInUp" data-wow-offset="0" data-wow-delay=".2s"></div>
        <!--Add Arrows -->
        <div class="slider-stacked-arrows">
          <div class="swiper-button-prev  wow fadeInRight" data-wow-offset="0" data-wow-delay=".2s">
            <div class="left-arrow"><i class="fas fa-arrow-left icon "></i>
            </div>
          </div>
          <div class="swiper-button-next wow fadeInRight" data-wow-offset="0" data-wow-delay=".4s">
            <div class="right-arrow"><i class="fas fa-arrow-right icon "></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  Page hero-->
    <!-- Start  portfolio Section-->
    
        
    <!-- End  portfolio Section-->

  
    <!-- Start loading-screen Component-->
    <div >
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
    <!-- End back-to-top Component-->   
        
        <!--     JQuery     -->
        <script src="{{URL('assets/js/vendors/jquery-3.4.1.min.js')}}"></script>
        
        <!--     bootstrap     -->
        <script src="{{URL('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
        
        <!--     fancybox     -->
        <script src="{{URL('assets/js/vendors/jquery.fancybox.min.js')}}"></script>
        
        <!--     countTo     -->
        <script src="{{URL('assets/js/vendors/jquery.countTo.js')}}"></script>
        
        <!--     wow     -->
        <script src="{{URL('assets/js/vendors/wow.min.js')}}"></script>
        
        <!--     swiper     -->
        <script src="{{URL('assets/js/vendors/swiper.min.js')}}"></script>
        
        <!--     Splitting     -->
        <script src="{{URL('assets/js/vendors/splitting.min.js')}}"></script>
        
        <!--     isotope     -->
        <script src="{{URL('assets/js/vendors/isotope-min.js')}}"></script>
        
        <!--     ajaxchimp     -->
        <script src="{{URL('assets/js/vendors/jquery.ajaxchimp.min.js')}}"></script>
        
        <!--     main     -->
        <script src="assets/js/main.js"></script>
  </body>


</html>