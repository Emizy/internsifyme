<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon-32x32.png') }}/">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Reset Password - InternsifyMe </title>
  </head>
  <body>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <!-- <p class="font-sm text-brand-2">Welcome back! </p> -->
                <h2 class="mt-10 mb-5 text-brand-1">Reset Password</h2>
                <p class="font-sm text-muted mb-30">Get new <span class="font-sm text-brand-2">InternsifyMe</span> password</p>
              </div>
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-error" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
              <form class="login-register text-start mt-20" action="{{ route('reset.password.post') }}" method="POST">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">
              <div class="form-group">
                  <label class="form-label" for="input-1">Email address *</label>
                  <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="Email Address">
                  @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">New Password *</label>
                  <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                  @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">New Password Again*</label>
                  <input class="form-control" id="input-4" type="password" required="" name="password_confirmation" placeholder="************">
                  @if ($errors->has('password_confirmation'))
                    <div
                        class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                @endif
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Reset Password</button>
                </div>
                <div class="text-muted text-center">or <a class="font-sm text-brand-2" href="/login"><b>Login</b></a></div><br/>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js?v=4.0"></script>
  </body>
</html>