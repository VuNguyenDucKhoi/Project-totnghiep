@extends('layouts.app')

@section('content')
  <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('template/admin/assets/images/login/login.jpg')}}" alt="looginpage"></div>
          <div class="col-xl-7 p-0">
            <div class="login-card">
              <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                <h4>Đăng Nhập</h4>
                <h6>Chào mừng chở lại! Đăng nhập vào tài khoản của bạn.</h6>
                  @include('backend.modules.alert')
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" type="email" value="{{ old('email') }}" name="email" required="" placeholder="Nhập vào Email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control @error('email') is-invalid @enderror"  type="password" name="password" required="" placeholder="*********">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-muted" for="checkbox1">Nhớ mật khẩu</label>
                  </div>
                    @if (Route::has('password.request'))
                        <a class="link" href="{{ route('password.request') }}">
                            {{ __('Quên mật khẩu?') }}
                        </a>
                    @endif

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng nhập') }}
                    </button>
                </div>
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
<!-- bundle -->
    @include('backend.modules.foot')
@endsection
