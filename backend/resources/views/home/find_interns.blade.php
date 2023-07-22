@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'Find Interns - InternsifyMe')

@section('contents')
<main class="main">
    <br/>
    <section class="section-box-2">
      <div class="container">
        <div class="banner-hero banner-company">
          <div class="block-banner text-center">
            <h3 class="wow animate__animated animate__fadeInUp">Look for Interns</h3>
            <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Is there available internship positions in your orgarnization?, <br class="d-none d-xl-block">Search for intern profile that matched your need.</div>
            
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-30">
      <div class="container">           
        <div class="content-page">
          <div class="box-filters-job">
            <div class="row">
              
            </div>
          </div>
          @if ( count($interns) != 0)
          <div class="row">
            @foreach ($interns as $intern)
            <div class="col-xl-4 col-lg-4 col-md-6">
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
          @else
          <div class="row justify-content-center">
            <div class="alert alert-secondary text-center" role="alert">
                <span style="font-weight: 600 !important;">
                    <b>No available intern yet!</b>
                </span>
            </div>
          </div>
          @endif
          </div>
        </div>
      </div>
    </section>
    @if ( count($interns) != 0)
    <section class="section-box mt-50 mb-50">
      <div class="container">
        <div class="mt-50">
          <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="/login">Load More</a></div>
        </div>
      </div>
    </section>
    @endif
  </main>
 
@endsection