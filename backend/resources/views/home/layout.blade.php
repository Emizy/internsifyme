<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ url('imgs/favicon-32x32.png') }}">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ url('imgs/favicon-32x32.png') }}/"> -->
    <script src="https://kit.fontawesome.com/aefdac1451.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
           
            
            i {
                font-family: "Font Awesome 6 Free" !important;
            }
            .fa-classic, .fa-regular, .fa-solid, .far, .fas {
              font-family: "Font Awesome 6 Free" !important;
            }
        </style>
  </head>
  <body>
   <header class="header sticky-bar">
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="{{ route('home.index') }}"><img alt="internsify" src="{{ asset('imgs/internsify-logo.svg') }}"></a></div>
          </div>
          <div class="header-nav">
            <nav class="nav-main-menu">
              <ul class="main-menu">
                <li class=""><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                <li class=""><a class="{{ request()->is('internship-jobs') ? 'active' : '' }}" href="{{ route('home.jobs_list') }}">Internship Jobs</a></li>
                <li class=""><a class="{{ request()->is('certification-courses') ? 'active' : '' }}" href="{{ route('home.certification_courses') }}">Certification Courses</a></li>
                <li class=""><a class="{{ request()->is('find-interns') ? 'active' : '' }}" href="{{ route('home.find_interns') }}">Find Interns</a></li>
                <li class=""><a class="{{ request()->is('employers') ? 'active' : '' }}" href="{{ route('home.employers') }}">Post Job</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
          @auth
          <div class="block-signin"><a class="btn btn-default btn-shadow ml-40 hover-up" href="/login">Dasboard</a></div>
          @endauth

          @guest
          <div class="block-signin"><a class="text-link-bd-btom hover-up" href="/login">Login</a><a class="btn btn-default btn-shadow ml-40 hover-up" href="/register">Create your profile</a></div>
          @endguest
            
          </div>
        </div>
      </div>
    </header>
<!--
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
           
              <nav>
                <ul class="mobile-menu font-heading">
                  <li class=""><a class="active" href="index.html">Home </a></li>
                  <li class=""><a href="join_waitlist_intern.html">Find Internship</a> </li>
                  <li class=""><a href="join_waitlist_intern.html">Certification Courses</a> </li>
                  <li class=""><a href="#">Find Internship</a> </li>
               
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <ul class="mobile-menu font-heading">
                <li><a href="#">Login</a></li>
                <li><a href="join_waitlist_intern.html">Create your Profile</a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
-->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="mobile-menu font-heading">
                <li class=""><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                <li class=""><a class="{{ request()->is('internship-jobs') ? 'active' : '' }}" href="{{ route('home.jobs_list') }}">Internship Jobs</a></li>
                <li class=""><a class="{{ request()->is('certification-courses') ? 'active' : '' }}" href="{{ route('home.certification_courses') }}">Certification Courses</a></li>
                <li class=""><a class="{{ request()->is('find-interns') ? 'active' : '' }}" href="{{ route('home.find_interns') }}">Find Interns</a></li>
                <li class=""><a class="{{ request()->is('employers') ? 'active' : '' }}" href="{{ route('home.employers') }}">Post Job</a></li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
            @auth
               <div class="block-signin"><a class="btn btn-default btn-shadow ml-40 hover-up" href="/login">Dashboard</a></div>
            @endauth

            @guest
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Create your Profile</a></li>
            @endguest
              
            </div>
          </div>
        </div>
      </div>
    </div>
    @yield('contents')
      <!-- Join Community -->	   
	<section class="section-box mt-50 mb-20">
        <div class="container">
          <div class="box-newsletter">
            <div class="row">
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('imgs/community_left.png') }}" alt="community 01"></div>
              <div class="col-lg-12 col-xl-6 col-12">
                <h2 class="text-md-newsletter text-center">Join our Community &amp; get <br>Internship Jobs Update Regularly</h2>
                 <div class="mt-50 text-center"><a class="btn btn-border-brand-2" href="https://chat.whatsapp.com/DTPUftSrpeiJkyqY82MuQU">Join InternsifyMe Community!</a></div>
              </div>
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('imgs/community_right.png') }}" alt="community "></div>
            </div>
          </div>
        </div>
      </section>
      <script src="{{ asset('js/plugins/counterup.js') }}"></script>

    <footer class="footer mt-50">
      <div class="container">
        <div class="row">
		       <div class="col-md-2">
            <h6 class="mb-20">Resources</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('home.about_us') }}">About us</a></li>
              <li><a href="mailto: internsifyme@schoolsify.com">Contact</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h6 class="mb-20">Internship</h6>
            <ul class="menu-footer">
              <li><a href="{{ route('home.jobs_list') }}">Internship Jobs</a></li>
              <li><a href="{{ route('home.certification_courses') }}">Certification Courses</a></li>
              <li><a href="{{ route('home.find_interns') }}">Find Interns</a></li>
              <li><a href="/register">Create your Profile</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h6 class="mb-20">Quick links</h6>
            <ul class="menu-footer">
			<li><a href="{{ route('home.employers') }}">Employers</a></li>
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
              
            </ul>
          </div>
		   <div class="col-md-2"></div>
          <div class="col-md-4"><a href="{{ route('home.index') }}"><img alt="internsify-logo" src="{{ asset('imgs/internsify-logo.svg') }}"></a>
            <div class="mt-20 mb-20 font-xs color-text-paragraph-2">InternsifyMe is designed to prepare youth for work through digital skills acquisition and internship job opportunities.</div>
            <div class="footer-social"><a class="icon-socials icon-facebook" href="https://facebook.com/InternsifyMe"></a><a class="icon-socials icon-instagram" href="https://www.instagram.com/internsifyme/"></a><a class="icon-socials icon-twitter" href="https://twitter.com/InternsifyMe"></a><a class="icon-socials icon-linkedin" href="https://www.linkedin.com/showcase/internsifyme/"></a></div>
          </div>
		  
   
        </div>
        <div class="footer-bottom mt-50">
          <div class="row">
            <div class="col-md-6"><span class="font-xs color-text-paragraph">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. InternsifyMe . All right reserved . Product of <a href="schoolsify.com" target="_blank"><u>Schoolsify Technology Limited.</u></a></span></div>
            <div class="col-md-6 text-md-end text-start">
              <div class="footer-social"><a class="font-xs color-text-paragraph" href="{{ route('home.privacy_policy') }}">Privacy Policy</a><a class="font-xs color-text-paragraph mr-30 ml-30" href="{{ route('home.terms_conditions') }}">Terms &amp; Conditions</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.js') }}"></script>
    <script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>