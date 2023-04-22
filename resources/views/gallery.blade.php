<!DOCTYPE html>
<html lang="zxx">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images/fav-icon/fav-icon.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="assets/css/vendors/animate.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="assets/css/vendors/jquery.fancybox.min.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="assets/css/vendors/all.min.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="assets/css/vendors/swiper.min.css">
        
        <!-- vegas -->
        <link rel="stylesheet" href="assets/css/vendors/vegas.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        <!-- Splitting -->
        <link rel="stylesheet" href="assets/css/vendors/splitting.css">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;600;700;800;900&amp;family=Poppins:wght@400;500;600;700;800;900&amp;display=swap">
        
        <!-- main-LTR-1 -->
        <link rel="stylesheet" href="assets/css/main-LTR-1.css">
  </head>
  <body class="   overlay-is-grey hard-squared-btns "> 
    <!--Start Page Header-->
    <header class=" page-header light-header menu-on-end " id="page-header">
      <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
          <div class="search-wraper"> 
            <label class="search-lbl">Search for:</label>
            <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
            <button class="search-btn" type="submit"><i class="fas fa-search icon"></i></button>
          </div>
        </form>
      </div>
      <!--start navbar-->
      <div class="container">
        <nav class="main-navbar " id="main-nav"><a class="navbar-brand " href="#"><img class="brand-logo light-logo img-fluid " src="assets/images/logo/logo-dark-wide.png" alt="site logo"/><img class="brand-logo dark-logo img-fluid " src="assets/images/logo/logo-dark-wide.png" alt="site logo"/></a>
          <div class="menu-toggler-btn"><span></span><span></span><span></span></div>
          <div class=" navbar-menu-wraper  " id="navbar-menu-wraper">
            <ul class="navbar-nav  mobile-menu ">

              <li class="nav-item"><a class="nav-link  " href="{{url('/')}}">Home </a></li>
        
              <li class="nav-item"><a class="nav-link  " href="#">Gallery</a></li>

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
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero hero-vegas-slider inner-page-hero " id="page-hero">
      <div class="overlay-color"></div>
      <div class="vegas-slider-content" data-vegas-slide-1="assets/images/hero/vegas-slider/1.jpg" data-vegas-slide-2="assets/images/hero/vegas-slider/2.jpg" data-vegas-slide-3="assets/images/hero/vegas-slider/3.jpg">
        <div class="container">
          <div class="row">
            <div class="col-12 hero-text-area ">
              <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Gallery</h1>
              <nav aria-label="breadcrumb ">
                <ul class="breadcrumb wow fadeInUp" data-wow-delay="1s">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="fas fa-home icon "></i>home</a></li>
                  <li class="breadcrumb-item active">gallery</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio portfolio-blocks mega-section section-bg-shade  " id="portfolio">
      <div class="overlay-photo-image-bg"></div>
      <div class="container">
        <div class="section-heading center-heading">
          <h2 class="section-title wow" data-splitting="chars">Gallery</h2>
          <div class="line-on-center wow fadeIn" data-wow-delay=".6s"></div>
        </div>
        <div class="portfolio-wraper  ">
        
          <div class="portfolio-group wow fadeIn" data-wow-delay=".2s">
            <div class="row no-gutters">
                @foreach($images as $image)
              <div class="col-12  col-sm-6  col-lg-4  portfolio-item exterior ">
                <div class="item">
                {{-- <a class="portfolio-img-link " href="" data-fancybox=".filter"> --}}
                    <div class="overlay overlay-color"></div>
                    <img class="portfolio-img  img-fluid " src="gallery/{{$image->image}}" alt="portfolio item photo">
                   
                {{-- </a> --}}
                  <div class="item-info "><span class="info-title">Description   </span>
                    
                      <p class="" style="color:white; word-wrap: break-word;">{{$image->description}}</p>
                 
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section>
  
    <div class="loading-screen" id="loading-screen">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  
    <div class="back-to-top" id="back-to-top"><i class="fas fa-arrow-up icon"></i></div>
    <!-- End back-to-top Component-->   
        
        <!--     JQuery     -->
        <script src="assets/js/vendors/jquery-3.4.1.min.js"></script>
        
        <!--     bootstrap     -->
        <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
        
        <!--     fancybox     -->
        <script src="assets/js/vendors/jquery.fancybox.min.js"></script>
        
        <!--     wow     -->
        <script src="assets/js/vendors/wow.min.js"></script>
        
        <!--     isotope     -->
        <script src="assets/js/vendors/isotope-min.js"></script>
        
        <!--     swiper     -->
        <script src="assets/js/vendors/swiper.min.js"></script>
        
        <!--     vegas     -->
        <script src="assets/js/vendors/vegas.min.js"></script>
        
        <!--     Splitting     -->
        <script src="assets/js/vendors/splitting.min.js"></script>
        
        <!--     main     -->
        <script src="assets/js/main.js"></script>
  </body>

</html>
