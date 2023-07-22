@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'InternsifyMe - Training &amp; Internship Opportunities')

@section('contents')
<main class="main">
	 <div class="bg-homepage1-new"></div> 
     <section class="section-box">
        <div class="banner-hero hero-1 banner-homepage4">
          <div class="banner-inner">
            <div class="row">
              <div class="col-xl-6 col-lg-12">
                <div class="block-banner">
                  <h1 class="heading-banner wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Hire interns for <br/><span class="color-brand-2">Entry Level Job</span><br class="d-none d-lg-block">for free!</h1>
                  <div class="banner-description mt-20 wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Got available internship position? Discover and hire interns that are align with your organizations needs seamlessly.</div>
                  <div class="mt-30"> 
                    <a class="btn btn-default mr-15" href="/register">Get Started</a>
                </div>
                </div>
              </div>
              <div class="col-xl-5 col-lg-12 d-none d-xl-block col-md-6">
                <div class="banner-imgs">
                  <div class="block-1 shape-1"><img class="img-responsive" alt="Banner" src="{{ asset('imgs/recruiter_interview.svg') }}"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	  <br/><br/><br/>
	  <!-- Learn-->
	  <!-- <section>
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
	  </section> -->
	  <!-- Job Sections-->
	  <br/>

	   <!-- Profile -->
	   <section class="section-box mt-10 mb-40">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">How It Works</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Get started with InternsifyMe as a Recruiter.</p>
          </div>
          <div class="mt-70"> 
            <div class="row"> 
              <div class="col-lg-4">
                <div class="box-step step-1">
                  <h1 class="number-element">1</h1>
                  <h4 class="mb-20">Register an<br class="d-none d-lg-block">account to start</h4>
                  <p class="font-lg color-text-paragraph-2">Get started by registering <br class="d-none d-lg-block"> new account. </p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step step-2">
                  <h1 class="number-element">2</h1>
                  <h4 class="mb-20">Create your <br class="d-none d-lg-block">Company Profile</h4>
                  <p class="font-lg color-text-paragraph-2">Provide well detailed information <br class="d-none d-lg-block"> about your orgarnization.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box-step">
                  <h1 class="number-element">3</h1>
                  <h4 class="mb-20">Discover interns or <br class="d-none d-lg-block">Post Internship Jobs</h4>
                  <p class="font-lg color-text-paragraph-2">Post available internship jobs <br class="d-none d-lg-block"> or discover interns you need. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-50 text-center"><a class="btn btn-default" href="/register">Get Started</a></div>
        </div>
      </section>
      @if(!empty($interns) && count($interns) >= 4)
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
                          <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">{{ $intern->user->city }}{{ ", ".$intern->user->state }}</span></span></div>
                        @else
                        <div class="col-6"><span class="d-flex align-items-center"><span class="font-sm color-text-mutted"></span></span></div>
                        @endif
                        @if($intern->available == 1)
                          <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1" style="color: #2a9504 !important;">Available </span></span></div>
                        @elseif ($intern->available == 0)
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1" style="color: #c70000 !important;">Not Available</span></span></div>
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
                <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="{{ route('home.find_interns') }}">Load More Posts</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endif
    </main>
@endsection