
<!DOCTYPE html>
<html>
<head>
  @include('layouts.partials.head')
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
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
      <p class="login-box-msg">Masuk untuk memulai sesi anda</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input id="uid" type="text" class="form-control @if($errors->has('email') || $errors->has('username')) is-invalid @endif" placeholder="Email/Username" name="uid" value="{{ old('email') ?: old('username')}}" required autocomplete="uid" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @if($errors->has('email') || $errors->has('username'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first() }}</strong>
            </span>
          @endif
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-danger">
              <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Ingat saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- ATAU -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Masuk dengan Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Masuk dengan Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      @if (Route::has('password.request'))
      <p class="mb-1">
        <a href="{{ route('password.request') }}">Lupa password?</a>
      </p>
      @endif

      @if (Route::has('register'))
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
    <!-- jquery-validation -->
    <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
</body>
</html>
