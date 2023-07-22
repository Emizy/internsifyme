@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'Intern Profile- InternsifyMe')

@section('contents')
<main class="main">

@if(!empty($intern_profile))
      <section class="section-box-2">
        <div class="container">
          <div class="banner-hero banner-image-single"><img src="{{ $intern_profile->banner }}" alt="banner"></div>
          <div class="box-company-profile">
            <div class="image-compay"><img src="{{ $user->avatar }}" alt="Avatar" style="width: 85px;height: 85px;"></div>
            <div class="row mt-10">
              <div class="col-lg-8 col-md-12">
                <h5 class="f-18">{{ ucfirst(trans($user->firstname)) }} {{ ucfirst(trans($user->lastname)) }} <span class="card-location font-regular ml-20">{{ $user->state }}{{ ($user->city == "") ? '' : ", ".$user->city }}</span></h5>
                <p class="mt-0 font-md color-text-paragraph-2 mb-15">{{ $intern_profile->title }}</p>
                <div class="mt-10 mb-15">
                   @if($intern_profile->verify == 1)
                   <img class="" src="{{ asset('imgs/verified.png') }}" alt="verified">
                   @else
                   <img class="" src="{{ asset('imgs/not_verified.png') }}" width="80" height="20" alt="not verified">
                   @endif
                   @if($intern_profile->certify == 1)
                   <img class="ml-20" src="{{ asset('imgs/certified.png') }}" alt="certified">
                   @else
                   <img class="ml-20" src="{{ asset('imgs/not_certified.png') }}" width="112" height="20" alt="Not certified">
                   @endif
                </div>
                </div>
              <div class="col-lg-4 col-md-12 text-lg-end">
                    @auth
                    <a class="btn btn-download-icon btn-apply btn-apply-big" href="{{ strpos($intern_profile->cv, 'http') === false ? 'http://' . $intern_profile->cv : $intern_profile->cv }}">View CV/Resume</a>
                    @endauth

                    @guest
                        <a class="btn btn-download-icon btn-apply btn-apply-big" href="/login">View CV/Resume</a>
                    @endguest
                
            </div>
            </div>
          </div>
          <div class="border-bottom pt-10 pb-10"></div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-short-bio" role="tabpanel" aria-labelledby="tab-short-bio">
                    <h4>About Me</h4>
                    <p> {{ $intern_profile->bio }}</p>
                    <br/>

                    <h4>Skills</h4>
                    @if ( count($skills) != 0)
                    <div class="row mb-40">
                        @foreach ($skills as $skill)
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="box-progress-bar mt-20">
                            <p class="font-xs color-text-paragraph-2 mb-10 mt-30">{{ $skill->name }}</p>
                            <div class="progress">
                                <div class="progress-bar bg-brand-2" role="progressbar" style="width: {{ $skill->level}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>{{ $skill->level."%" }}</span></div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                        <div class="row mb-40">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                                No skill included!
                            </div>
                        </div>
                    @endif
                    <p></p>
                    <h4>Work Experience</h4>
                    <p>
                      {{ ($intern_profile->experience == "" ) ? "Not included!" :  $intern_profile->experience }}
                    </p>
                    <h4>Education</h4>
                    <p>
                    {{ ($intern_profile->education == "" ) ? "Not included!" :  $intern_profile->education }}
                    </p>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
              <div class="sidebar-border">
                <h5 class="f-18">Overview</h5>
                <div class="sidebar-list-job">
                  <ul>
                  @if($intern_profile->portfolio != "")
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-location-dot"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Portfolio</span>
                      <strong class="small-heading"><a target="_blank" href="{{ strpos($intern_profile->portfolio, 'http') === false ? 'http://' . $intern_profile->portfolio : $intern_profile->portfolio }}">Check Portfolio </a> <i class="fa-solid fa-arrow-up-right-from-square"></i></strong></div>
                    </li>
                    @endif
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-clock"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Availability</span>
                      <strong class="small-heading">{{ ($intern_profile->available == 1 ) ? "Available" : "Not Available"}}</strong></div>
                    </li>
                    @if($intern_profile->location != "")
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-location-dot"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Prefered Location</span>
                      <strong class="small-heading">{{ $intern_profile->location}}</strong></div>
                    </li>
                    @endif
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-language"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Language</span><strong class="small-heading">{{ ($intern_profile->language == "") ? '' : $intern_profile->language }}</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-graduation-cap"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Education Level</span><strong class="small-heading">{{ $intern_profile->education_level}}</strong></div>
                    </li>
                  </ul>
                </div>
                <div class="sidebar-list-job">
                  <ul class="ul-disc">
                    <li>Address: {{ $user->state }}{{ ($user->city == "") ? '' : ", ".$user->city }}</li>
                    <li>Phone: {{ $user->phone_no }}</li>
                    <li>Email: <a href="#" class="__cf_email__" data-cfemail="9cfff3f2e8fdffe8dcd9eafdeefdb2fff3f1">[email&#160;protected]</a></li>
                  </ul>
                  <div class="mt-30">
                    @auth
                        <a class="btn btn-send-message" href="mailto: {{ $user->email }}">Send Message</a>
                    @endauth

                    @guest
                        <a class="btn btn-send-message" href="/login">Send Message</a>
                    @endguest
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@else
<section class="section-box-2">
        <div class="container">
          
          <div class="box-company-profile">
            <div class="row mt-10">
              <div class="col-lg-12 col-md-12">
              <h3 class="mb-30 text-center">Intern Profile doesn't exist!</h3>
                </div>
            </div>
          </div>
          <div class="border-bottom pt-10 pb-10"></div>
        </div>
      </section>
@endif
<section class="section-box mt-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="box-related-job content-page">
                <h3 class="mb-30">Other Interns</h3>
                @foreach ($interns as $i)
                <div class="box-list-jobs display-list">
                  <div class="col-xl-12 col-12">
                    <div class="card-grid-2 hover-up wow animate__animated animate__fadeIn">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card-grid-2-image-left">
                            <div class="image-box"><img src="{{ $i->user->avatar }}" alt="avatar" style="width: 65px;height: 65px; border-radius:16px"></div>
                            <div class="right-info"><a class="name-job" href="{{ url('/') . '/@' . $i->user->username }}">{{ ucfirst(trans($i->user->firstname)) }} {{ ucfirst(trans($i->user->lastname)) }}</a><span class="location-small">{{ $i->user->state }}{{ ($i->user->city == "") ? '' : ", ".$i->user->city }}</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                          <div class="pl-15 mb-15 mt-30">
                            @foreach ($i->skills as $s)
                            <a class="btn btn-grey-small mr-5" href="#">{{ $s->name }}</a>
                            @endforeach
                        </div>
                       
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h4><a href="{{ url('/') . '/@' . $i->user->username }}">{{ $i->title }}</a></h4>
                        <div class="mt-5"><span class="card-briefcase">{{ $i->location }}</span></div>
                        <p class="font-sm color-text-paragraph mt-10">{!! Str::limit(ucfirst(trans($i->bio)), 125, ' ...') !!}</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">Status:
                                @if ($i->available == 1 )
                                    <span class="text-success">Available</span>
                                @else
                                <span class="text-danger">Not Available</span>
                                @endif
                                </span>
                            </div>
                            <div class="col-lg-5 col-5 text-end"><a class="btn btn-apply-now" href="{{ url('/') . '/@' . $i->user->username }}">View Details</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
            </div>
          </div>
        </div>
</section>
</main>
@endsection