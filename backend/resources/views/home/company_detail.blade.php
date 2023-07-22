@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'Company Details')

@section('contents')
<main class="main">
  @if(!empty($company))
      <section class="section-box-2">
        <div class="container">
          <div class="banner-hero banner-image-single"><img src="{{ $company->banner }}" alt="banner" style="width: 1116px;height: 308px;"></div>
          <div class="box-company-profile">
            <div class="image-compay"><img src="{{ $company->logo }}" alt="logo" style="width: 85px;height: 85px;"></div>
            <div class="row mt-10">
              <div class="col-lg-8 col-md-12">
                <h5 class="f-18">{{ $company->name }} <span class="card-location font-regular ml-20">{{ $company->city }} {{ ($company->city == "") ? $company->state : ", ".$company->state }} </span></h5>
                <p class="mt-5 font-md color-text-paragraph-2 mb-15">{{ $company->motto }}</p>
              </div>
              
              <div class="col-lg-4 col-md-12 text-lg-end">
              <a class="btn btn-download-icon btn-apply btn-apply-big" href="{{ strpos($company->website, 'http') === false ? 'http://' . $company->website : $company->website }}">Website</a>
              </div>
            </div>
          </div>
       
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                    <h4>About</h4>
                    <p>{!! $company->about !!}</p>
                   
                  </div>
                </div>
              </div>
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                    <h4>Recruitment Process</h4>
                    <p>{!! ($company->recruitment_process == "") ? "Not included" : $company->recruitment_process  !!}</p>
                  </div>
                </div>
              </div>
              <div class="box-related-job content-page">
                <h5 class="mb-30">{{ $total_job }} Jobs Posted</h5>
                <div class="box-list-jobs display-list">
                <div class="col-xl-12 col-12">
                @if ( count($jobs) != 0)
                  @foreach ($jobs as $job)
                      <div class="card-grid-2 hover-up">
                        <br/>
                        <div class="card-block-info">
                          <h4><a href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(' ', '-', $company->name)) . '/' . strtolower(str_replace(' ', '-', $job->title))}}">{{ $job->title }}</a></h4>
                          <div class="mt-5"><span class="card-briefcase">{{ $job->type }}</span><span class="card-time"><span> {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span></span></div>
                          <p class="font-sm color-text-paragraph mt-10"> {!! Str::limit(ucfirst(trans($job->about_role)), 150, ' ...') !!}</p>
                          <div class="card-2-bottom mt-20">
                            <div class="row">
                              <div class="col-lg-7 col-7">
                                @if(!empty($job->stipend))
                                <div class="col-lg-7 col-7"><span class="card-text-price">{{ $job->currency }}</span> <span class="text-muted" style="font-weight: 600;">{{ number_format($job->stipend ,2) }}</span></div>
                                @else
                                  <div class="col-lg-7 col-7"><span class="card-text-price">No Stipend</span></div>
                                @endif
                          
                              </div>
                              <div class="col-lg-5 col-5 text-end">
                                <a class="btn btn-apply-now" href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(' ', '-', $company->name)) . '/' . strtolower(str_replace(' ', '-', $job->title))}}">View Detail</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach

                @else
                <div class="card-grid-2 hover-up">
                      <br/>
                      <div class="card-block-info text-center">
                        <h4>No job posted yet!</h4>
                       
                      </div>
                    </div>       
                @endif
                  </div>
                </div>
               
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
              <div class="sidebar-border">
                <div class="sidebar-heading">
                  <div class="avatar-sidebar">
                    <div class="sidebar-info pl-0"><span class="sidebar-company">{{ $company->name }}</span><span class="card-location">{{ $company->city }} {{ ($company->city == "") ? $company->state : ", ".$company->state }}</span></div>
                  </div>
                </div>
                <div class="sidebar-list-job">
                  <ul>
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-building"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Industry</span><strong class="small-heading">{{ $company->industry }}</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-location-dot"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Location</span><strong class="small-heading">{{ $company->city }} {{ ($company->city == "") ? $company->state : ", ".$company->state }}</strong></div>
                    </li>
                    <!-- <li>
                      <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Salary</span><strong class="small-heading">$35k - $45k</strong></div>
                    </li> -->
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-clock"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Member since</span><strong class="small-heading">{{ \Carbon\Carbon::parse($company->created_at)->format('d M, Y') }}</strong></div>
                    </li>
                    <li>
                      <div class="sidebar-icon-item"><i class="fa-solid fa-briefcase"></i></div>
                      <div class="sidebar-text-info"><span class="text-description">Total Jobs Posted</span><strong class="small-heading">{{ $total_job }} Jobs</strong></div>
                    </li>
                  </ul>
                </div>
                <div class="sidebar-list-job">
                  <ul class="ul-disc">
                    <li>Phone: [protected}</li>
                    <li>Email: <a href="#" class="__cf_email__" data-cfemail="cfaca0a1bbaeacbb8f8ab9aebdaee1aca0a2">[email&#160;protected]</a></li>
                  </ul>
                  <div class="mt-30">
                    @auth
                        <a class="btn btn-send-message" href="mailto: {{ $company->email }}">Send Message</a>
                    @endauth

                    @guest
                        <a class="btn btn-send-message" href="/login">Send Message</a>
                    @endguest
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
  @else
  <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                  <div class="alert alert-secondary" role="alert">
                  <h4>No company details found!</h4>
                  </div>
                  </div>
                </div>
              </div>
             
            </div>
           
          </div>
        </div>
      </section>        
  @endif
@endsection