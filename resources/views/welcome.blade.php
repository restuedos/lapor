
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
    }
    hr{
      width: 80px;
      color: white;
      border-top: 4px solid;
    }
    .nav-link.btn.btn-outline.btn-register{
      border-color: white;
    }
    .nav-link.btn.btn-outline.btn-register:hover{
      background-color: white;
      color: #e50000 !important ;
    }
    .btn.btn-get-started{
      color: white;
      border-color: white;
    }
    .btn.btn-get-started:hover{
      border-color: white;
      background-color: white;
      color: #e50000;
    }
    .btn.btn-danger{
      background-color: #e50000;
    }
    .icon.icon-danger{
      color: #e50000;
    }
    a.dropdown-item:hover{
      background-color: #e50000 !important;
    }
    a.dropdown-item:active{
      background-color: #e50000 !important;
    }
    .fas.fa-search.search-logo{
      color: #e50000;
    }
    .form-control.search-input:focus + .fas.fa-search.search-logo{
      color: #e50000; 
    }
    .form-control.search-input{
      color: white; 
    }.is-focused .label-aspirasi{
      color: #000;
    }.aspirasi{
      padding-top: 70px;
    }.form-aspirasi:read-only{
      background-image: linear-gradient(0deg,#e50000 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0);
    }.is-focused .form-aspirasi{
      background-image: linear-gradient(0deg,#e50000 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0);
    }.form-aspirasi{
      height: calc(2.4375rem + 2px);
    }.togglebutton label input[type=checkbox]:checked+.toggle {
      background-color: #e50000;
    }.togglebutton label input[type=checkbox]:checked+.toggle:after {
      border-color: #e50000;
    }.label-attachment{
      padding-left: 20px;
    }.btn.btn-round.btn-danger.btn-close{
      width: 16px;
      height: 16px;
      padding: 0;
      text-transform: lowercase;
    }.bootstrap-datetimepicker-widget a[data-action]{
      color: #e50000;
    }.bootstrap-datetimepicker-widget a[data-action]:hover span{
      color: #e50000;
    }.bootstrap-datetimepicker-widget table td.today>div:before {
      border-bottom-color: #e50000;
    }.bootstrap-datetimepicker-widget table td.active>div,.bootstrap-datetimepicker-widget table td.active:hover>div {
      background-color: #e50000;
    }.bootstrap-datetimepicker-widget table td span.active {
      background-color: #e50000;
    }.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]{
      background-color: #e50000;
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
  
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/logo-2.png') }}" class="navbar-logo" alt="Lapor.io"/>
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
            <a href="{{ url('/tentang') }}" class="nav-link">
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
            <div class="form-group has-white bmd-form-group search-bar">
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
  <div class="page-header" data-parallax="true" style="background-image: url('{{ asset('img/background-1.png') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>Layanan Aspirasi Pengaduan Online Rakyat</h1>
            <h4 class="text-center">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
            <hr>
            <a href="#get-started" class="btn btn-outline btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
	  <div class="container">
      <div class="section text-center" id="get-started">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Sampaikan Pengaduan Anda dengan Baik dan Benar</h2>
            <h5 class="description">Disinilah tempat yang tepat untuk menyampaikan pengaduan anda secara langsung kepada pihak yang berwenang, kenyamanan anda adalah prioritas bagi kami. Pengaduan anda terhadap pelayanan kami akan ditindaklanjuti dengan segera.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="far fa-comments"></i>
                </div>
                <h4 class="info-title">Daftar & Sampaikan Pengaduan</h4>
                <p>Sebelum menyampaikan pengaduan, daftarkan diri anda terlebih dahulu agar kami dapat memastikan kebenaran pengaduan anda. Setelah itu anda dapat meninjau pengaduan anda melalui menu yang disediakan.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="far fa-check-circle"></i>
                </div>
                <h4 class="info-title">Tunggu Verifikasi</h4>
                <p>Setelah menyampaikan pengaduan, kami akan memeriksa detail pengaduan yang anda kirimkan sebelum disampaikan kepada pihak yang berwenang. Pengaduan anda akan diproses selama kurang lebih 5 hari kedepan.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="far fa-thumbs-up"></i>
                </div>
                <h4 class="info-title">Pengaduan Diterima</h4>
                <p>Setelah pengaduan anda terverifikasi, maka tahap selanjutnya adalah menunggu tanggapan dari petugas. Lalu anda dapat mengirim umpan balik terhadap tanggapan dari petugas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-tabs" style="background-image: url('{{ asset('img/banner-1.png') }}'); background-repeat: no-repeat;background-attachment: fixed; min-height: 346px;">
      <h2 class="title text-center text-white">Jumlah Pengaduan Diterima</h2>
      <h1 class="title text-center text-white">0</h1>
    </div>
      <div class="container">
        <div class="section text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Form Pengaduan</h2>
              <h5 class="description">Dengan mengisi form ini, anda membantu kami dalam meningkatkan sarana dan prasarana bagi masyarakat serta pelayanan di tiap-tiap instansi pemerintahan yang bertugas dalam melayani masyarakat.</h5>
            </div>
          </div>
          <div class="aspirasi">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-left">
                <form action="{{ route('store_pengaduan') }}" method="post">
                  <div class="form-row">
                    <div class="form-group col">
                      <label for="aspirasi" class="label-aspirasi">Tulis pengaduan anda disini</label>
                      <textarea class="form-control form-aspirasi" rows="3" id="aspirasi"></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col">
                      <label for="tanggal" class="label-aspirasi">Tanggal</label>
                      <input type="text" class="form-control form-aspirasi datetimepicker" name="tanggal"/>
                    </div>
                    <div class="form-group col">
                      <label for="wilayah" class="label-aspirasi">Wilayah</label>
                      <select class="form-control selectpicker form-aspirasi" data-style="bn btn-link" name="wilayah">
                        <option value="1">Wilayah Satu</option>
                        <option value="2">Wilayah Dua</option>
                        <option value="3">Wilayah Tiga</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col">
                      <label for="instansi" class="label-aspirasi">Instansi terkait</label>
                      <select class="form-control selectpicker form-aspirasi" data-style="bn btn-link" name="instansi">
                        <option value="1">Instansi Satu</option>
                        <option value="2">Instansi Dua</option>
                        <option value="3">Instansi Tiga</option>
                      </select>
                    </div>
                    <div class="form-group col">
                      <label for="kategori" class="label-aspirasi">Kategori </label>
                      <select class="form-control selectpicker form-aspirasi" data-style="bn btn-link" name="kategori">
                        <option value="1">Kategori Satu</option>
                        <option value="2">Kategori Dua</option>
                        <option value="3">Kategori Tiga</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group form-file-upload col">
                    <button type="button" class="btn btn-danger btn-attachment">Tambahkan lampiran</button>
                    <input type="file" class="inputFileHidden" name="lampiran" id="lampiran">
                    <label for="lampiran" class="label-attachment">Tidak ada file terpilih</label>
                    <button type="button" class="btn btn-round btn-danger btn-close" hidden>x</button>
                  </div>
                  </div>
                  <div class="form-row">
                    <div class="togglebutton toggle-aspirasi col-md-2 mt-auto mb-auto">
                      <label>
                        <input type="checkbox" name="anonim">
                        <span class="toggle"></span>
                        Anonim
                      </label>
                    </div>
                    <div class="togglebutton toggle-aspirasi col-md-2 mt-auto mb-auto">
                      <label>
                        <input type="checkbox" name="rahasia">
                        <span class="toggle"></span>
                        Rahasia
                      </label>
                    </div>
                    <div class="col-md-8 text-right">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
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


  <script>

      $('.btn.btn-danger.btn-attachment').click(function(){
        $('#lampiran').click();
      });

      $('#lampiran').change(function(e){
        var fileName = e.target.files[0].name;
        $('.label-attachment').text(fileName);
        $('.btn.btn-round.btn-danger.btn-close').removeAttr('hidden');
        $('.btn.btn-round.btn-danger.btn-close').show('hidden');
      });

      $('.btn.btn-round.btn-danger.btn-close').click(function(){
        $('#lampiran').val(''); 
        $('.label-attachment').text('Tidak ada file terpilih');
        $('.btn.btn-round.btn-danger.btn-close').hide();
      });

      <!-- javascript for init -->
      $('.datetimepicker').datetimepicker({
        icons: {
          time: "fa fa-clock",
          date: "fa fa-calendar",
          up: "fa fa-chevron-up",
          down: "fa fa-chevron-down",
          previous: 'fa fa-chevron-left',
          next: 'fa fa-chevron-right',
          today: 'fa fa-screenshot',
          clear: 'fa fa-trash',
          close: 'fa fa-remove'
        }
      });

      $(window).scroll(function(){
        
        if ($(document).scrollTop() > 100) {
          
          $('.navbar-logo').attr('src', '{{ asset("img/logo-3.png") }}');
          $('.navbar-logo').css('height', '48px');

          $('.nav-link').css('color', '#969696');
          $('.nav-link').hover(
            function(){
              $(this).css('color','#e50000');
            },function(){
              $(this).css('color','#969696');
            }
          );
          $('.nav-link.btn.btn-outline.btn-register').css('border-color','#969696');
          $('.nav-link.btn.btn-outline.btn-register').hover(
            function(){
              $(this).css('border-color','#e50000');
            },function(){
              $(this).css('border-color','#969696');
            }
          );

          $('.search-input').css({'color':'#e50000','border-color':'#969696'});
          $('.search-logo').css('color', '#969696');
          $('.search-bar').removeClass('has-white');
          $('.is-focused .search-input').css('background-image', 'linear-gradient(0deg,#e50000 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0)');

        } else {

          $('.navbar-logo').attr('src', '{{ asset("img/logo-2.png") }}');
          $('.navbar-logo').css('height', '64px');

          $('.nav-link').css('color', 'white');
          $('.nav-link').hover(
            function(){
              $(this).css('color','white');
            },function(){
              $(this).css('color','white');
            }
          );
          $('.nav-link.btn.btn-outline.btn-register').css('border-color','white');
          $('.nav-link.btn.btn-outline.btn-register').hover(
            function(){
              $(this).css('border-color','white');
            },function(){
              $(this).css('border-color','white');
            }
          );

          $('.search-input').css({'color':'white','border-color':'white'});
          $('.search-logo').css('color', '#e50000');
          $('.search-bar').addClass('has-white');
          $('.is-focused .search-input').css('background-image', 'linear-gradient(0deg,#fff 2px,rgba(156,39,176,0) 0),linear-gradient(0deg,#d2d2d2 1px,hsla(0,0%,82%,0) 0)');

        }
      });
        
  </script>
</body>

</html>
