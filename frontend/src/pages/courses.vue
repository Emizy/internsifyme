<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Courses</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardIntern'}"> Dashboard </router-link></li>
                    <li><span>Courses</span></li>
                  </ul>
                </div>
              </div>
            </div>
             
        <div class="row"> 
          <div class="col-lg-12"> 
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <!-- <div class="box-filters-job">
                      <h5 class="mb-30">Applied Jobs</h5>
                    </div> -->
                    <div class="mt-50">
            <div class="tab-content" id="myTabContent-1">
              <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 grid-bd-16 hover-up">
                      <div class="card-grid-2-image"><span class="lbl-hot bg-blue"><span>Private Class & Bootcamp</span></span>
                        <div class="image-box">
                          <a target="_blank" href="/ui-ux-design-training-internsifyme"><figure><img src="@/assets/imgs/ui-ux-design-internsifyme.png" alt="ui-ux-design"></figure></a>
                        </div>
                      </div>
                      
                      <div class="card-block-info">
                        <h5><a target="_blank" href="/ui-ux-design-training-internsifyme">UI/UX Design</a></h5>
                        <div class="mt-5"><span class="mr-15">Online</span><span class="">8 - 12 Weeks</span></div>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                          <div class="col-xl-5 col-md-5"><a class="btn btn-tags-sm mr-5" target="_blank" href="/ui-ux-design-training-internsifyme">LIVE</a>
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
                          <figure><img src="@/assets/imgs/digital-marketing.png" alt="image"></figure>
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
                          <figure><img src="@/assets/imgs/pm.png" alt="image"></figure>
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
                          <figure><img src="@/assets/imgs/ui.png" alt="image"></figure>
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
                          <figure><img src="@/assets/imgs/analysis.png" alt="image"></figure>
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
                          <figure><img src="@/assets/imgs/wordpress.png" alt="image"></figure>
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
                </div>
              </div>
            </div>
          </div>
        </div>
       
       
       
            <Footer></Footer>
          </div>
        </main>
       
      </body>
    </template>
    
    <script>
        import { reactive,ref, onMounted, onBeforeMount, computed } from 'vue';
        import { useRouter, useRoute } from "vue-router";
        import { useToast } from "vue-toastification";
        import axios from 'axios';
    
    // import components
        import Header from '@/components/Header.vue'
        import Sidebar from '@/components/Sidebar.vue'
        import Footer from '@/components/Footer.vue'
    
        export default{
            components:{
                Header, Sidebar, Footer
            },
            setup(){
            const router = useRouter();
            // Get toast interface
            const toast = useToast();
          
       
            const is_loading = ref(true);
         
            onMounted(() =>{
                // on Mounted here
             
            })

          
            return{
                is_loading
            }
            },
        }
    </script>
    
    <style scoped>
      @import "@/assets/dashboard/css/style.css";
    
       .btn.btn-default {
        color: #ffffff;
        background-color: #0371E0;
        line-height: 26px;
        padding: 10px 25px;
    }

.btn.btn-default:hover {
  
	padding: 10px 25px;
    border: 1px solid #0371E0;
    background-color: #ffffff;
    border-radius: 8px;
    color: #0371E0;
    font-size: 14px;
    line-height: 26px;
    margin-top: 2px;
}

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}


.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
} 

.des{
    margin-top: -18px;
    margin-bottom: 15px;
    color: #A0ABB8;
}

    </style>