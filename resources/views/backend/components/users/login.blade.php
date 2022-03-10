<!DOCTYPE html>
<html lang="en">
<head>
@include('backend.modules.head')
</head>

<body>
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
              <form class="theme-form login-form" action="/admin/users/login/store" method="post">
                <h4>Đăng Nhập</h4>
                <h6>Chào mừng chở lại! Đăng nhập vào tài khoản của bạn.</h6>
                  @include('backend.modules.alert')
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" type="email" name="email" required="" placeholder="Nhập Email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Mật khẩu</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Nhớ mật khẩu</label>
                  </div><a class="link" href="forget-password.html">Quên mật khẩu?</a>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Đăng Nhập</button>
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

</body>
</html>
