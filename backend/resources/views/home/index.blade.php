@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'InternsifyMe - Training & Internship Opportunities')

@section('contents')
<main class="main">
	 <div class="bg-homepage1"></div> 
      <section class="section-box mb-70">
        <div class="banner-hero hero-1 banner-homepage5">
          <div class="banner-inner">
            <div class="row">
              <div class="col-xl-6 col-lg-12">
                <div class="block-banner">
                  <h1 class="heading-banner wow animate__animated animate__fadeInUp">Preparing &amp; Connecting you<br class="d-none d-lg-block"> with <span class="color-brand-2">Internship Opportunities!</span></h1>
                  <div class="banner-description mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Gain career exploration and development, learn new skills via professional learning experience and internship opportunities. </div>
                  <div class="mt-30"> <a class="btn btn-default mr-15" href="/register">Get Started</a><a class="btn btn-border-brand-2" href="{{ route('home.employers') }}">Employer</a></div>
         
                </div>
              </div>
              <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">
                <div class="banner-imgs">
                  <div class="banner-1 shape-1"><img class="img-responsive" alt="" src="{{ asset('imgs/banner1.png') }}"></div>
                  <div class="banner-2 shape-2"><img class="img-responsive" alt="" src="{{ asset('imgs/banner2.png') }}"></div>
                  <div class="banner-3 shape-3"><img class="img-responsive" alt="" src="{{ asset('imgs/banner3.png') }}"></div>
                  <div class="banner-4 shape-3"><img class="img-responsive" alt="" src="{{ asset('imgs/banner4.png') }}"></div>
                  <div class="banner-6 shape-1"><img class="img-responsive" alt="" src="{{ asset('imgs/banner6.png') }}"></div>
                </div>
              </div>
			 
            </div>
         </div>
        </div>
      </section>
	  
	  <br/><br/><br/>
	  <!-- Learn-->
	  <section>
	  <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5"><img class="bdrd-10" src="{{ asset('imgs/img-profile.png') }}" alt="profile"></div>
            <div class="col-lg-5">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">Certification Courses</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Acquire skills needed in today market</h2>
                <p class="font-lg color-text-paragraph-2">Prepare yourself for job opportunities, learn from the industry experts, acquire technology skills needed in today market.</p>
                <div class="mt-20"><a class="btn btn-default" href="{{ route('home.certification_courses') }}">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
	  </section>
	  <!-- Job Sections-->
	  <br/>
	
	  <!-- Job Sections-->
	<section class="section-box overflow-visible mt-100 mb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 ">
			  <div class="content-job-inner"><h5 class="color-brand-2 mb-15 mt-15">Internship Jobs</h5>
                <h2 class="text-52 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Find the Internship Programme, that is <span class="color-brand-2">Right</span> for you</h2>
                <div class="mt-40 pr-50 text-md-lh28 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Search for available internship positions that is right for you</div>
                <div class="mt-40">
                  <div class="wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><a class="btn btn-default" href="{{ route('home.jobs_list') }}">Find Internship Jobs</a></div>
                </div>
              </div>
            </div>
			<div class="col-lg-1"></div>
            <div class="col-lg-5">
              <div class="">
                <figure class="" style=""><img alt="" src="{{ asset('imgs/internship_jobs.png') }}"></figure>
              </div>
            </div>
          </div>
        </div>
      </section>
	   <!-- Profile -->
	   <section class="section-box mt-10 mb-40">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">How It Works</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Get started with InternsifyMe as an intern.</p>
          </div>
          <div class="mt-70"> 
            <div class="row"> 
              <div class="col-lg-4">
                <div class="box-step step-1">
                  <h1 class="number-element">1</h1>
                  <h4 class="mb-20">Register an <br class="d-none d-lg-block">account to start</h4>
                  <p class="font-lg color-text-paragraph-2">Get started by registering <br class="d-none d-lg-block"> new account. </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step step-2">
                  <h1 class="number-element">2</h1>
                  <h4 class="mb-20">Create your <br class="d-none d-lg-block">Internship Profile</h4>
                  <p class="font-lg color-text-paragraph-2">Let potential recruiters discover <br class="d-none d-lg-block"> you through your compelling profile.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step">
                  <h1 class="number-element">3</h1>
                  <h4 class="mb-20">Learn & Apply <br class="d-none d-lg-block">for Internship Jobs</h4>
                  <p class="font-lg color-text-paragraph-2">Acquire digital skills <br class="d-none d-lg-block"> and apply to job with your profile. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-50 text-center"><a class="btn btn-default" href="/register">Get Started</a></div>
        </div>
      </section>
      @if(!empty($interns) && count($interns) >= 4)
	   <section class="section-box mt-50 mb-30 bg-border-3 pt-100 pb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5"><img class="bdrd-10" src="{{ asset('imgs/employer.svg') }}" alt="employer"></div>
            <div class="col-lg-5">
              <div class="pl-30">
                <h5 class="color-brand-2 mb-15 mt-15">Employers</h5>
                <h2 class="color-brand-1 mt-0 mb-15">Look for right intern candidates</h2>
                <p class="font-lg color-text-paragraph-2">Analyze, compare,  and Look for right intern candidates for your organizations.</p>
                <div class="mt-20"><a class="btn btn-default" href="join_waitlist_employer.html">Find Interns</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-70">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Discover Interns</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Discover potential interns <br class="d-none d-lg-block">that are align with your orgarnization needs.</p>
          </div>
          <div class="mt-50 card-bg-white">
            <div class="row">
            @foreach ($interns as $intern)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online">
                      <a href="{{ url('/') . '/@' . $intern->user->username }}">
                        <figure><img alt="jobBox" src="{{ $intern->user->avatar }}"></figure>
                      </a>
                    </div>
                    <div class="card-profile pt-10"><a href="{{ url('/') . '/@' . $intern->user->username }}">
                        <h5>{{ ucfirst(trans($intern->user->firstname)) }} {{ ucfirst(trans($intern->user->lastname)) }}</h5></a><span class="font-xs color-text-mutted">{{ $intern->title }}</span>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">
                      {!! Str::limit(ucfirst(trans($intern->bio)), 125, ' ...') !!}
                    </p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start">
                      @foreach ($intern->skills as $skill)
                      <a class="btn btn-tags-sm mb-10 mr-5" href="{{ url('/') . '/@' . $intern->user->username }}">{{ $skill->name }}</a>
                      @endforeach
                 
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        @if($intern->user->state != "")
                          <div class="col-6"><span class="d-flex align-items-center"><i class="fa-solid fa-location-dot" style="margin-right:6px;"></i><span class="font-sm color-text-mutted">{{ $intern->user->city }}{{ ", ".$intern->user->state }}</span></span></div>
                        @else
                        <div class="col-6"><span class="d-flex align-items-center"><span class="font-sm color-text-mutted"></span></span></div>
                        @endif
                        @if($intern->available == 1)
                          <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fa-regular fa-clock" style="margin-right:6px;"></i><span class="font-sm color-brand-1" style="color: #2a9504 !important;">Available </span></span></div>
                        @elseif ($intern->available == 0)
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fa-regular fa-clock" style="margin-right:6px;"></i><span class="font-sm color-brand-1" style="color: #c70000 !important;">Not Available</span></span></div>
                        @endif
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
            <div class="row mt-40 mb-60">
              <div class="col-lg-12"> 
                <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="{{ route('home.find_interns') }}">Load More</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    </main>
@endsection