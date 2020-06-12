
<!DOCTYPE html>
<html>
<head>
  @include('layouts.partials.head')
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
        <p class="login-box-msg">Lupa password? Ganti password yang anda lupa disini.</p>

        @if (session('email'))
          <div class="alert alert-success" role="alert">
            Link untuk mengubah password telah dikirim ke email anda.
          </div>
        @endif

        <form action="{{ route('password.email') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-danger btn-block">Kirim Verifikasi</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        @if(Route::has('login'))
        <p class="mt-3 mb-1">
          <a href="{{ route('login') }}">Masuk</a>
        </p>
        @endif

        @if(Route::has('register'))
        <p class="mb-0">
          <a href="{{ route('register') }}" class="text-center">Daftar sebagai anggota baru</a>
        </p>
        @endif
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  @include('layouts.partials.scripts')
</body>
</html>
