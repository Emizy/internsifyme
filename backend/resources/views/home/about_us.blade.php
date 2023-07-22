@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'About Us - InternsifyMe')

@section('contents')
<main class="main">
      <section class="section-box" style="background: #0371e0;">
        <div class="breacrumb-cover bg-img-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2 class="mb-10">About Us</h2>
                <p class="font-lg color-text-paragraph-2">Get to know about us</p>
              </div>
              <div class="col-lg-6 text-lg-end">
                <ul class="breadcrumbs mt-40">
                  <li><a class="home-icon" href="{{ route('home.index') }}">Home</a></li>
                  <li>About Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="post-loop-grid">
          <div class="container">
            <div class="text-center">
              <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Preparing &#38; Connecting youth <br/> with Internship Opportunities!</h2>
            </div>
            <div class="row mt-70">
             <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h3 class="mt-15">Who We Are</h3>
                <div class="mt-20">
                 <p class="font-md color-text-paragraph mt-20">
                    InternsifyMe is a product of Schoolsify Technology Limited - an edtech company that is committed into enhancing learning and teaching processes through Technology.
                 </p>
                 <p class="font-md color-text-paragraph mt-20">
                 We are committed to enhancing and facilitating the process by which knowledge and skills are being acquired and impacted from one person to another set of people through the use of easy-to-use online technology tools. We provide platform for educators, course creators, and organization with the necessary tools they need enhance their training business, which includes online presence to deploy course as videos and eBooks, host LIVE class, admit students and multiple instructors, communication via mail, SMS & in-app messaging, certificate generations and payment processing.
                 </p>
                </div>
                <div class="mt-30"><a class="btn btn-brand-1" href="https://schoolsify.com">Learn More About Us</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
   
@endsection