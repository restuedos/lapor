<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Lapor.io - Layanan Aspirasi Pengaduan Online Rakyat</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicon -->
  <link rel=" icon" href="{{ asset('img/favicon.png') }}"/>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <!-- Material Kit CSS -->
  <link href="{{ asset('material-kit/css/material-kit.min.css') }}" rel="stylesheet" />

  <!-- Style CSS -->
  <style>
    body{
      background-color: white;
      margin: 0;
    }
    hr{
      width: 80px;
      color: white;
      border-top: 4px solid;
    }
    .navbar-logo{
        height: 48px;
    }
    .nav-link{
        color: #969696 !important;
    }
    .nav-link:hover{
        color: #f44336 !important;
    }
    .nav-link.btn.btn-outline.btn-register{
      border-color: #969696;
    }
    .nav-link.btn.btn-outline.btn-register:hover{
      background-color: white;
      color: #f44336 !important ;
      border-color: #f44336;
    }
    a.dropdown-item:hover{
      background-color: #f44336 !important;
    }
    a.dropdown-item:active{
      background-color: #f44336 !important;
    }
    .search-input{
      color: #f44336;
      border-color: #969696;
    }
    .fas.fa-search.search-logo{
      color: #969696;
    }
    .form-control.search-input:focus + .fas.fa-search.search-logo{
      color: #f44336; 
    }
    .form-control.search-input{
      color: white; 
    }
    .is-focused .search-input{
      background-image: linear-gradient(0deg,#f44336 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0);
    }
    .tentang-banner{
      padding: 60px 60px 120px 60px;
    }
    .banner-title{
      color: white;
      font-family: Roboto,Helvetica,Arial,sans-serif;
      font-weight: 300;
      border-left: 10px solid white;
      padding-left: 20px;
      margin-left: 100px;
      margin-top: 0px;
      margin-bottom: 0px !important;
    }
    .lapor-breadcrumb{
      color: white;
      font-family: Roboto,Helvetica,Arial,sans-serif;
      font-weight: 300;
      margin-left: 100px;
      margin-top: 0px;
      margin-bottom: 0px !important;
    }.fs-social a{
      display: inline-block;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      text-align: center;
      background-color: #cc0000;
      color: #e50000;
    }.fs-social a .fab{
      font-size: 20px;
      margin: auto;
      margin-top: 6px;
    }.section.section-footer{
      color: white;
      font-family: Roboto,Helvetica,Arial,sans-serif;
      font-weight: 300;
    }.footer-title{
      font-size: 18px;
      text-transform: uppercase;
      font-family: Helvetica,sans-serif;
      font-weight: 600;
    }.fs-widget ul li a {
      font-size: 14px;
      color: white;
      line-height: 30px;
    }.fs-widget .subscribe-form input {
      width: 100%;
      height: 52px;
      border: 1px solid #ffffff;
      font-size: 14px;
      padding-left: 30px;
      color: #ffffff;
      background: transparent;
      margin-bottom: 20px;
    }.fs-widget .subscribe-form input::placeholder {
      color: #ffffff;
    }.site-btn {
      font-size: 14px;
      color: #ffffff;
      background: #cc0000;
      border: none;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: inline-block;
      padding: 14px 30px;
    }
  </style>
</head>

<body>
  @include('sweetalert::alert')
  
  <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/logo-3.png') }}" class="navbar-logo" alt="Lapor.io"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-th"></i> Tentang
            </a>
          </li>
        @auth
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-file"></i> Laporan
            </a>
          </li>
          <form class="form-inline">
            <div class="form-group bmd-form-group search-bar">
              <input type="text" class="form-control search-input" placeholder="Cari">
            </div>
            <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
              <i class="fas fa-search search-logo"></i>
            </button>
          </form>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-user"></i> {{ Auth::user()->nama }}
            </a>
            <div class="dropdown-menu">
              <h6 class="dropdown-header">Menu</h6>
              <a href="#" class="dropdown-item">Dashboard</a>
              <a href="#" class="dropdown-item">Profil</a>
              <a href="#" class="dropdown-item">Notifikasi</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Ubah Profil</a>
              <a href="#" class="dropdown-item">Ubah Password</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a>
            </div>
          </li>
        </ul>
        @else
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
          @if(Route::has('login'))
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              Masuk
            </a>
          </li>
          @endif
          @if(Route::has('register'))
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link btn btn-outline btn-register">
              Daftar
            </a>
          </li>
          @endif
        </ul>
      @endauth
      </div>
    </div>
  </nav>
  <div class="section section-banner" style="background-image: url('{{ asset('img/background-2.png') }}'); background-repeat: no-repeat;background-size: cover;}}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 tentang-banner">
            <h4 class="lapor-breadcrumb title">Beranda > Tentang</span></h4>
            <h2 class="banner-title title">Tentang
            <h1 class="banner-title title" style="color: #969696;">Lapor<span style="color: #f44336;">.io</span></h1>
            </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
	  <div class="container">
      <div class="section text-center" id="get-started">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Tentang Lapor.io</h2>
            <h5 class="description">Disinilah tempat yang tepat untuk menyampaikan pengaduan anda secara langsung kepada pihak yang berwenang, kenyamanan anda adalah prioritas bagi kami. Pengaduan anda terhadap pelayanan kami akan ditindaklanjuti dengan segera.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-footer" style="background-color: #e50000; min-height: 346px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="fs-about">
              <div class="fs-logo">
                  <a href="#">
                      <img src="{{ asset('img/logo-2.png') }}" alt="">
                  </a>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua ut aliquip ex ea</p>
              <div class="fs-social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="fs-widget">
                <h5 class="footer-title">Help</h5>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Support</a></li>
                    <li><a href="#">Knowledgebase</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="fs-widget">
                <h5 class="footer-title">Links</h5>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Create Property</a></li>
                    <li><a href="#">My Properties</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="fs-widget">
              <h5 class="footer-title">Newsletter</h5>
              <p>Deserunt mollit anim id est laborum.</p>
              <form action="#" class="subscribe-form">
                  <input type="text" placeholder="Email">
                  <button type="submit" class="site-btn">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="http://edzerocorps.wordpress.com/">
              EDZero
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="fa fa-heart"></i> by
        <a href="http://edzerocorps.wordpress.com/" target="blank">EDZero</a> for a better web.
      </div>
    </div>
  </footer>

  <!-- REQUIRED SCRIPTS -->

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  <!--   Core JS Files   -->
  <script src="{{ asset('material-kit/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('material-kit/js/core/popper.min.js') }}" type="text/javascript"></script>
  
  <!-- Bootstrap 4 -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('material-kit/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('material-kit/js/plugins/moment.min.js') }}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{ asset('material-kit/js/plugins/bootstrap-datetimepicker.js') }}"  type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('material-kit/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('material-kit/js/material-kit.js') }}" type="text/javascript"></script>

</body>