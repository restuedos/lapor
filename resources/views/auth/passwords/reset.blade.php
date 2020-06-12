
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
                <p class="login-box-msg">Satu langkah lagi untuk mengganti password lama yang anda lupa.</p>

                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input id="email" type="hidden" class="form-control" name="email" value="{{ $email ?? old('email') }}" autocomplete="email">
                    
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
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
                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block">Ganti password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                @if(Route::has('login'))
                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Masuk</a>
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
