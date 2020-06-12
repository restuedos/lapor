
<!DOCTYPE html>
<html>
<head>
  @include('layouts.partials.head')
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <style>
    .form-control:focus, .form-control:focus~.input-group-append .input-group-text,.form-control:focus~.input-group-prepend .input-group-text{
      border-color: red !important;
    }
    .form-control,.input-group-text{
      border-color: #ffcece;
    }
    [class*=icheck-]>input:first-child+input[type=hidden]+label::before, [class*=icheck-]>input:first-child+label::before{
      border-color: #ffcece;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ url('/') }}"><img src="{{ asset('img/logo-4.png') }}"/></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">

        @if (session('resent'))
          <div class="alert alert-success" role="alert">
            Link yang baru untuk verifikasi email telah dikirim ke email anda.
          </div>
        @endif

        <p class="mb-1">Sebelum melanjutkan, tolong cek email anda terlebih dahulu.</p>

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
          @csrf
          <p class="mt-4 mb-4">Jika kamu tidak menerima email, <button type="submit" class="btn btn-link p-0 m-0 align-baseline">klik disini untuk meminta verifikasi email</button>.</p>
        </form>
        
        @if(Auth::check())
        <p class="mb-1">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a>
        </p>
        @else
          @if(Route::has('login'))
          <p class="mb-1">
            <a href="{{ route('login') }}">Masuk</a>
          </p>
          @endif

          @if(Route::has('register'))
          <p class="mb-0">
            <a href="{{ route('register') }}">Daftar sebagai anggota baru</a>
          </p>
          @endif
        @endif

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  @include('layouts.partials.scripts')
</body>
</html>
