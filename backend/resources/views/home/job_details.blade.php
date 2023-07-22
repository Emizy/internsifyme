@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', $job->title." - Internship Job Details :: InternsifyMe")

@section('contents')
@if(!empty($user))
<div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body pl-30 pr-30 pt-50">
            <div class="text-center">
              <p class="font-sm text-brand-2">Job Application </p>
              <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Apply with your profile</h2>
              <p class="font-sm text-muted mb-30">Your intern information will be sent the employer including <br/> your CV/Resume and Portfolio( If included). </p>
            </div>
            @if($user->user_type == 0)
            <form class="login-register text-start mt-20 pb-30" action="{{ route('intern.apply') }}" method="POST">
             @csrf
             <div><input type="hidden" id="job_id" name="job_id" value="{{ $job->id }}"></div>
             <div><input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}"></div>
              <div class="form-group">
                <label class="form-label" for="input-1">Firstname *</label>
                <input class="form-control" id="input-1" type="text" required="" name="firstname" placeholder="Steven" value="{{ $user->firstname }}" disabled>
              </div>
              <div class="form-group">
                <label class="form-label" for="input-1">Lastname *</label>
                <input class="form-control" id="input-1" type="text" required="" name="Lastname" placeholder="Job" value="{{ $user->lastname }}" disabled>
              </div>
              <div class="form-group">
                <label class="form-label" for="input-2">Email *</label>
                <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com" value="{{ $user->email }}" disabled>
              </div>
              <div class="form-group">
                <label class="form-label" for="number">Contact Number *</label>
                <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89" value="{{ $user->phone_no }}" disabled>
              </div>
              <div class="login_footer form-group d-flex justify-content-between">
                <label class="cb-container">
                  <span class="text-small">By appyling, you agree with our terms and policy</span>
                </label><a class="text-muted" href="#">Lean more</a>
              </div>
              <div class="form-group">
                <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
              </div>
              <div class="text-muted text-center">Do you need support? <a href="mailto:	internsifyme@gmail.com">Contact Us</a></div>
            </form>
            @else
            <p>You need to be an intern to apply for job!</p><br/>
            @endif
          </div>
        </div>
      </div>
    </div>
@endif
   <main class="main">
    @if(!empty($job))
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
            @if (session('error'))
            <div class="alert-big alert alert-danger  alert-dismissible fade show" role="alert">
                {!!  session('error') !!}
            </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!!  session('success') !!}
                </div>
            @endif
              <div class="box-border-single">
                <div class="row mt-10">
                  <div class="col-lg-8 col-md-12">
                    <h3>{{ $job->title }}</h3>
                    <div class="mt-0 mb-15"><span class="card-briefcase">{{ $job->type }}</span><span class="card-time">{{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span></div>
                  </div>
                  <div class="col-lg-4 col-md-12 text-lg-end">  
                    @if($job->active == 1) 
                        @if(!empty($user))
                            @if(empty($job->application_link))
                                <div class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply Now</div>
                            @else
                                 <a class="btn btn-apply-icon btn-apply btn-apply-big hover-up" href="{{ strpos($job->application_link, 'http') === false ? 'http://' . $job->application_link : $job->application_link }}" target="_blank">Apply Now</a>
                            @endif
                        
                        @else
                        <a class="btn btn-apply-icon btn-apply btn-apply-big hover-up" href="/login">Apply Now</a>
                        @endif
                    @elseif($job->active == 2)
                        <button  class="btn btn-apply-icon btn-apply btn-apply-big hover-up" disabled>Apply [Closed]</button >
                    @elseif($job->active == 0)
                    <button  class="btn btn-apply-icon btn-apply btn-apply-big hover-up" disabled>Apply [Closed]</button >
                    @endif
                </div>
                </div>
             <br/>
                <div class="job-overview">
                  <h5 class="border-bottom pb-15 mb-30">Overview</h5>
                  <div class="row">
                    <div class="col-md-6 d-flex">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/industry.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Industry</span><strong class="small-heading"> {{ $company?->industry }}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/job-level.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Job level</span><strong class="small-heading">{{ $job->level }}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/salary.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Stipend</span><strong class="small-heading">{{ ($job->stipend == "") ? "No Stipend" : $job->currency ." ". number_format($job->stipend ,2)  }}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/location.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Location</span><strong class="small-heading">{{ $company?->city }} {{ ($company?->state == "") ? '' : ", ".$company?->state }}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/job-type.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Job type</span><strong class="small-heading">{{ $job->location }}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/deadline.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Deadline</span><strong class="small-heading">{{ \Carbon\Carbon::parse($job->deadline)->format('d M, Y') }}</strong></div>
                    </div>
                  </div>
                  <div class="row mt-25">
                    <div class="col-md-6 d-flex mt-sm-15">
                      <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/updated.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Updated</span><strong class="small-heading">{{ \Carbon\Carbon::parse($job->updated_at)->format('d M, Y') }}</strong></div>
                    </div>
                    <div class="col-md-6 d-flex mt-sm-15">
                    <div class="sidebar-icon-item"><img src="{{asset('imgs/icons/deadline.svg')}}" alt="ic"></div>
                      <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Active ?</span><strong class="small-heading">{{ $job->active == 1 ? "Yes" : "No" }}</strong></div>
                    </div>
                  </div>
                </div>
                <div class="content-single">
                  <h4>About Role</h4>
                  <p>{{ $job->about_role }}</p>
                  
                  <h4>Responsibilities</h4>
                  <p> {{ $job->responsibilities }}</p>

                  
                  <h4>Requirements</h4>
                  <p> {{ $job->requirements }}</p>

                  
                  <h4>Benefits</h4>
                  <p> {{ $job->benefits }}</p>
                </div>
                <div class="single-apply-jobs">
                  <div class="row align-items-center">
                    <div class="col-md-5"><a class="btn btn-default mr-15" href="#">Apply now</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
              <div class="sidebar-border">
                <div class="sidebar-heading">
                  <div class="avatar-sidebar">
                    <figure><img alt="logo" src="{{ $company?->logo }}"></figure>
                    <div class="sidebar-info"><span class="sidebar-company"><a href="{{ url('/company') . '/' . strtolower(str_replace(' ', '-', $company?->id)) . '/' . strtolower(str_replace(' ', '-', $company?->name))}}">{{ $company?->name }}</a></span>
                    <span class="card-location">{{ $company?->city }} {{ ($company?->state == "") ? '' : ", ".$company?->state }}</span>
                    <!-- <a class="link-underline mt-15" href="#">02 Open Jobs</a></div> -->
                  </div>
                </div>
                <div class="sidebar-list-job">
                  <ul class="ul-disc">
                    <span> <a href="{{ strpos($company?->website, 'http') === false ? 'http://' . $company?->website : $company?->website }}" target="_blank">{{ $company?->website }}</a></span>
                  </ul>
                </div>
              </div>
              <br/><br/><br/>
              <div class="sidebar-border">
                <h6 class="f-18">Similar Internship jobs</h6>
                <div class="sidebar-list-job">
                  <ul>
                    @if(!empty($jobs))
                    <li>
                    @foreach($jobs as $job)
                      <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                        <div class="info-text">
                          <h5 class="font-md font-bold color-brand-1"><a href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(' ', '-', $job->company?->name)) . '/' . strtolower(str_replace(' ', '-', $job->title))}}">{{ $job->title }}</a></h5>
                          <div class="mt-0"><span class="card-briefcase">{{ $job->type }}</span><span class="card-time"><span> {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span></span></div>
                          <div class="mt-5">
                            <div class="row">
                              <div class="col-12">
                                @if(!empty($job->stipend))
                                <h6 class="card-price">{{$job->currency}} {{ number_format($job->stipend ,2) }} </h6>
                                @else
                                <h6 class="card-price">No Stipend</h6>
                                @endif
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <br/>
                      @endforeach
                    </li>
                    @else
                        <li>No similar jobs</li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @else
    <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="box-border-single">
                <div class="row mt-10">
                  <div class="col-lg-8 col-md-12 text-center">
                    <h3>This internship job doesn't exist or must have been removed</h3>
                 </div>
                </div>
              
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
              <div class="sidebar-border">
              <div class="sidebar-border">
                <h6 class="f-18">Others Internship jobs</h6>
                <div class="sidebar-list-job">
                  <ul>
                    <li>
                    @foreach($jobs as $job)
                      <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                        <div class="info-text">
                          <h5 class="font-md font-bold color-brand-1"><a href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(' ', '-', $job->company->name)) . '/' . strtolower(str_replace(' ', '-', $job->title))}}">{{ $job->title }}</a></h5>
                          <div class="mt-0"><span class="card-briefcase">{{ $job->type }}</span><span class="card-time"><span> {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span></span></div>
                          <div class="mt-5">
                            <div class="row">
                              <div class="col-12">
                                @if(!empty($job->stipend))
                                <h6 class="card-price">{{$job->currency}} {{ number_format($job->stipend ,2) }} </h6>
                                @else
                                <h6 class="card-price">No Stipend</h6>
                                @endif
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <br/>
                      @endforeach
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endif
     
    </main>
   
@endsection