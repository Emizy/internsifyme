@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'Certification Courses - InternsifyMe')

@section('contents')
<main class="main">
<section class="section-box mt-30">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Online Certification Courses</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Get certified with digital skills via online training.</p>
            <!-- <div class="list-tabs mt-40">
              <ul class="nav nav-tabs" role="tablist">
                <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
                <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
                <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
                <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
                <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
                <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
              </ul>
            </div> -->
          </div>
          <div class="mt-50">
            <div class="tab-content" id="myTabContent-1">
              <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Private Class & Bootcamp</span></span>
                        <div class="image-box">
                          <a href="{{ route('home.ui_ux_design') }}"><figure><img src="{{ asset('imgs/ui-ux-design-internsifyme.png') }}" alt="image"></figure></a>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="{{ route('home.ui_ux_design') }}">Product(UI/UX) Design</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 - 12 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><a class="btn btn-tags-sm mr-5" href="{{ route('home.ui_ux_design') }}">LIVE</a>
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                  
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Cohort</span></span>
                        <div class="image-box">
                          <figure><img src="{{ asset('imgs/digital-marketing.png') }}" alt="image"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="#">Digital Marketing</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><span class="card-text-price">₦0.00</span>
                          <!-- <span class="text-muted">/Hour</span> -->
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                <a class="btn btn-tags-sm mr-5" href="#">Comming Soon</a>
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Cohort</span></span>
                        <div class="image-box">
                          <figure><img src="{{ asset('imgs/pm.png') }}" alt="image"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="#">Product Management</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><span class="card-text-price">FREE</span>
                          <!-- <span class="text-muted">/Hour</span> -->
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                <a class="btn btn-tags-sm mr-5" href="#">Comming Soon</a>
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Cohort</span></span>
                        <div class="image-box">
                          <figure><img src="{{ asset('imgs/ui.png') }}" alt="image"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="#">Graphic Design</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><span class="card-text-price">₦0.00</span>
                          <!-- <span class="text-muted">/Hour</span> -->
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                <a class="btn btn-tags-sm mr-5" href="#">Comming Soon</a>
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Cohort</span></span>
                        <div class="image-box">
                          <figure><img src="{{ asset('imgs/analysis.png') }}" alt="image"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="#">Dada Analysis</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><span class="card-text-price">FREE</span>
                          <!-- <span class="text-muted">/Hour</span> -->
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                <a class="btn btn-tags-sm mr-5" href="#">Comming Soon</a>
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Cohort</span></span>
                        <div class="image-box">
                          <figure><img src="{{ asset('imgs/wordpress.png') }}" alt="image"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="#">Website Design (Wordpress)</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Online</span><span class="card-time">8 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><span class="card-text-price">FREE</span>
                          <!-- <span class="text-muted">/Hour</span> -->
                        </div>
                            <div class="col-xl-7 col-md-7 text-lg-end mb-2">
                                <a class="btn btn-tags-sm mr-5" href="#">Comming Soon</a>
                            </div>
                            
                          </div>
                        </div>
                        <!-- <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Web Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS                        </a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS      </a>
                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"></div>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Web Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word                  </a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Web Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS                        </a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Web Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS                        </a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img4.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Full Stack Engineer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">13 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NodeJS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">MongoDB</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>Freelancer</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img1.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Web Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">New York, US</span><span class="card-time">3 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Adobe XD</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$90 - $120</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img2.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Digital Marketing Manager</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">6 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">SEO</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Word</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img3.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Web Designer/Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">9 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">HTML</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">CSS</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">JS</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$120 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img5.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">Frontend Developer Full time</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">16 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">Bootstrap</a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot"><span>Full time</span></span>
                        <div class="image-box">
                          <figure><img src="assets/imgs/page/homepage2/img6.png" alt="jobBox"></figure>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h5><a href="job-details.html">React Native Mobile Developer</a></h5>
                        <div class="mt-5"><span class="card-location mr-15">Chicago, US</span><span class="card-time">30 mins ago</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-xl-7 col-md-7 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">React</a><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">NextJS                        </a>
                            </div>
                            <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">$80 - $150</span><span class="text-muted">/Hour</span></div>
                          </div>
                        </div>
                        <p class="font-sm color-text-paragraph mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
</main>
@endsection 