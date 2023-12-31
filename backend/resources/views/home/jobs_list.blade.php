@extends('home.layout')
@section('description', 'InternsifyMe provides training and internship opportunity for students.')
@section('keywords', 'InternsifyMe, Internship in Nigeria, Internship Opportunities, Internship Jobs, Certification Courses')
@section('title', 'Internship Jobs - InternsifyMe')

@section('contents')
<main class="main">
      <section class="section-box-2">
        <div class="container">
          <div class="banner-hero banner-single banner-single-bg">
            <div class="block-banner text-center">
              <h3 class="wow animate__animated animate__fadeInUp"><span class="color-brand-2">{{ $total_jobs }} Jobs</span> Available Now</h3>
              <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    Find available internship job postion that fit your profile.
              <div class="form-find text-start mt-40 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
              <form action="{{ route('home.jobs_list') }}" method="GET">
                  <!-- @csrf -->
                  <!-- <div class="box-industry">
                    <select class="form-input mr-10 select-active input-industry">
                      <option value="0">Industry</option>
                      <option value="1">Software</option>
                      <option value="2">Finance</option>
                      <option value="3">Recruting</option>
                      <option value="4">Management</option>
                      <option value="5">Advertising</option>
                      <option value="6">Development</option>
                    </select>
                  </div>
                  <select class="form-input mr-10 select-active">
                    <option value="">Location</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="PW">Belau</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo (Brazzaville)</option>
                    <option value="CD">Congo (Kinshasa)</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Cura&Ccedil;ao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran</option>
                    <option value="IQ">Iraq</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao S.A.R., China</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="KP">North Korea</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PS">Palestinian Territory</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="QA">Qatar</option>
                    <option value="IE">Republic of Ireland</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russia</option>
                    <option value="RW">Rwanda</option>
                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                    <option value="BL">Saint Barth&eacute;lemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="SX">Saint Martin (Dutch part)</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="SM">San Marino</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia/Sandwich Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom (UK)</option>
                    <option value="US">USA (US)</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="WS">Western Samoa</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select> -->
                  <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... " name="search">
                  <button class="btn btn-job-find btn-find font-sm">Search</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      @if ( count($jobs) != 0)
      <section class="section-box mt-30">
        <div class="container">
          <div class="row flex-row-reverse">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="content-page">
                <div class="row display-list">
                  @foreach($jobs as $job)
                  <div class="col-md-6">
                    <div class="card-grid-2 hover-up">
                      <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                          <div class="card-grid-2-image-left">
                            <div class="image-box"><img src="{{ $job->company?->logo }}" alt="Logo" style="width: 65px;height: 65px;border-radius: 16px;"></div>
                            <div class="right-info"><a class="name-job" href="{{ url('/company') . '/' . strtolower(str_replace(' ', '-', $job->company?->id)) . '/' . strtolower(str_replace(' ', '-', $job->company?->name))}}">{{ $job->company?->name }}</a>
                              <span class="location-small">
                                {{ $job->company?->city }} {{ ($job->company?->city == '') ? $job->company?->state : ", ".$job->company?->state }}
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 text-start text-md-end pr-60 col-md-4 col-sm-12">
                          <div class="pl-15 mb-15 mt-30">
                              <!-- <span class="btn btn-grey-small mr-5">
                              {{ ($job->active == 1) ? "Active" : "Not Active" }}
                            </span> -->
                          </div>
                        </div>
                      </div>
                      <div class="card-block-info">
                        <h4><a href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(array(':', '\\', '/', '*', ' '), '-', $job->company?->name)) . '/' . strtolower(str_replace(array(':', '\\', '/', '*', ' '), '-', $job->title))}}">{{ $job->title }}</a></h4>
                        <div class="mt-5"><span class="card-briefcase">{{ $job->type }}</span><span class="card-time"><span> {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span></span></div>
                        <p class="font-sm color-text-paragraph mt-10"> {!! Str::limit(ucfirst(trans($job->about_role)), 150, ' ...') !!}</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            @if(!empty($job->stipend))
                              <div class="col-lg-7 col-7"><span class="card-text-price">{{ $job->currency }}</span> <span class="text-muted" style="font-weight: 600;">{{ number_format($job->stipend ,2) }}</span></div>
                            @else
                              <div class="col-lg-7 col-7"><span class="card-text-price">No Stipend</span></div>
                            @endif
                            
                            <div class="col-lg-5 col-5 text-end">
                              <a class="btn btn-apply-now" href="{{ url('/internship-job') . '/' . $job->id . '/' . strtolower(str_replace(array(':', '\\', '/', '*', ' '), '-', $job->company?->name)) . '/' . strtolower(str_replace(array(':', '\\', '/', '*', ' '), '-', $job->title))}}">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="paginations text-center">
                <ul class="pager">
                  <li><div>{!! $jobs->links() !!}</div></li>
                </ul>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-12">
              <div class="sidebar-shadow none-shadow mb-30">
                <div class="sidebar-filters">
                  <div class="filter-block head-border mb-30">
                    <h5>Advance Filter <a class="link-reset" href="#">Reset</a></h5>
                  </div>
                  <div class="filter-block mb-30">
                    <div class="form-group select-style select-style-icon">
                      <select class="form-control form-icons select-active">
                        <option>New York, US</option>
                        <option>London</option>
                        <option>Paris</option>
                        <option>Berlin</option>
                      </select><i class="fi-rr-marker"></i>
                    </div>
                  </div>
                  <div class="filter-block mb-20">
                    <h5 class="medium-heading mb-15">Industry</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                          </label><span class="number-item">180</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Software</span><span class="checkmark"></span>
                          </label><span class="number-item">12</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Finance</span><span class="checkmark"></span>
                          </label><span class="number-item">23</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Recruting</span><span class="checkmark"></span>
                          </label><span class="number-item">43</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Management</span><span class="checkmark"></span>
                          </label><span class="number-item">65</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Advertising</span><span class="checkmark"></span>
                          </label><span class="number-item">76</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-20">
                    <h5 class="medium-heading mb-25">Salary Range</h5>
                    <div class="list-checkbox pb-20">
                      <div class="row position-relative mt-10 mb-20">
                        <div class="col-sm-12 box-slider-range">
                          <div id="slider-range"></div>
                        </div>
                        <div class="box-input-money">
                          <input class="input-disabled form-control min-value-money" type="text" name="min-value-money" disabled="disabled" value="">
                          <input class="form-control min-value" type="hidden" name="min-value" value="">
                        </div>
                      </div>
                      <div class="box-number-money">
                        <div class="row mt-30">
                          <div class="col-sm-6 col-6"><span class="font-sm color-brand-1">$0</span></div>
                          <div class="col-sm-6 col-6 text-end"><span class="font-sm color-brand-1">$500</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-20">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                          </label><span class="number-item">145</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$0k - $20k</span><span class="checkmark"></span>
                          </label><span class="number-item">56</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$20k - $40k</span><span class="checkmark"></span>
                          </label><span class="number-item">37</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$40k - $60k</span><span class="checkmark"></span>
                          </label><span class="number-item">75</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$60k - $80k</span><span class="checkmark"></span>
                          </label><span class="number-item">98</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$80k - $100k</span><span class="checkmark"></span>
                          </label><span class="number-item">14</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">$100k - $200k</span><span class="checkmark"></span>
                          </label><span class="number-item">25</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-10">Popular Keyword</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">Software</span><span class="checkmark"></span>
                          </label><span class="number-item">24</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Developer</span><span class="checkmark"></span>
                          </label><span class="number-item">45</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Web</span><span class="checkmark"></span>
                          </label><span class="number-item">57</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-10">Position</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Senior</span><span class="checkmark"></span>
                          </label><span class="number-item">12</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">Junior</span><span class="checkmark"></span>
                          </label><span class="number-item">35</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Fresher</span><span class="checkmark"></span>
                          </label><span class="number-item">56</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-10">Experience Level</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Internship</span><span class="checkmark"></span>
                          </label><span class="number-item">56</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Entry Level</span><span class="checkmark"></span>
                          </label><span class="number-item">87</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">Associate</span><span class="checkmark"></span>
                          </label><span class="number-item">24</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Mid Level</span><span class="checkmark"></span>
                          </label><span class="number-item">45</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Director</span><span class="checkmark"></span>
                          </label><span class="number-item">76</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Executive</span><span class="checkmark"></span>
                          </label><span class="number-item">89</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-10">Onsite/Remote</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">On-site</span><span class="checkmark"></span>
                          </label><span class="number-item">12</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">Remote</span><span class="checkmark"></span>
                          </label><span class="number-item">65</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Hybrid</span><span class="checkmark"></span>
                          </label><span class="number-item">58</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-10">Job Posted</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">All</span><span class="checkmark"></span>
                          </label><span class="number-item">78</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">1 day</span><span class="checkmark"></span>
                          </label><span class="number-item">65</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">7 days</span><span class="checkmark"></span>
                          </label><span class="number-item">24</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">30 days</span><span class="checkmark"></span>
                          </label><span class="number-item">56</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block mb-20">
                    <h5 class="medium-heading mb-15">Job type</h5>
                    <div class="form-group">
                      <ul class="list-checkbox">
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Full Time</span><span class="checkmark"></span>
                          </label><span class="number-item">25</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox" checked="checked"><span class="text-small">Part Time</span><span class="checkmark"></span>
                          </label><span class="number-item">64</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Remote Jobs</span><span class="checkmark"></span>
                          </label><span class="number-item">78</span>
                        </li>
                        <li>
                          <label class="cb-container">
                            <input type="checkbox"><span class="text-small">Freelancer</span><span class="checkmark"></span>
                          </label><span class="number-item">97</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      @else
      <section class="section-box mt-30">
        <br/>
        <div class="container">
          <div class="row flex-row-reverse">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="card-block-info">
                @if( request()->get('search') )
                    <h4>No internship jobs related to '{{request()->get('search')}}' posted yet!</h4>
                @else
                  <h4>No internship jobs yet!</h4>
                @endif
                </div>
            </div>
        </div>
        <br/>
      </section>
      @endif
    </main>
   
@endsection