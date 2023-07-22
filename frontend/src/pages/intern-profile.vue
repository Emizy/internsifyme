<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
           
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">My Profile</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardIntern'}"> Dashboard </router-link></li>
                    <li><span>My Profile</span></li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div v-if="is_loading_page" class="row"> 
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="section-box">
                        <div class="container">
                            <div class="panel-white mb-30">
                            <div class="row justify-content-center align-items-center">
                                    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;margin-top: 3em;margin-bottom: 3em;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div v-else class="row"> 
            <div class="col-xxl-9 col-xl-8 col-lg-8">
                <div class="section-box">
                <div class="container"> 
                    <div class="panel-white mb-30">
                    <div class="box-padding">
                        <h6 class="color-text-paragraph-2">Update your profile</h6>
                        <form @submit.prevent="updateUserInfo" enctype="multipart/form-data">
                            <div class="box-profile-image"> 
                            <div class="img-profile"> 
                                <img alt="" v-if="url" :src="url" style="border-radius: 50%;height: 65px; width: 65px;" />
                                <img alt="" v-else-if="form.avatar" :src="form.avatar" style="border-radius: 50%;height: 65px; width: 65px;">
                            </div>
                            <div class="info-profile">  
                                <!-- <input class="form-control" type="file" v-on:change="onFileChange"> -->
                                <div class="upload-btn-wrapper">
                                    <a class="btn btn-default btn-brand">Select a Picture</a>
                                    <input type="file" name="file" v-on:change="onFileChange"/>
                                </div>
                            </div>
                            </div>
                            <div class="row"> 
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Firstname *</label>
                                <input class="form-control" type="text" placeholder="Firstname" v-model="form.firstname">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Lastname *</label>
                                <input class="form-control" type="text" placeholder="Lastname" v-model="form.lastname">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Username *</label>
                                <input class="form-control" type="text" placeholder="Username" v-model="form.username">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Phone number</label>
                                <input class="form-control" type="text" placeholder="090 34 567 9689" v-model="form.phone_no">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Email Address *</label>
                                <input class="form-control" type="text" placeholder="Email Address" v-model="form.email" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Country</label>
                                <select class="form-control" v-model="form.country">
                                    <option value="">Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                </div>
                        </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">State</label>
                                <input class="form-control" type="text" placeholder="State" v-model="form.state">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">City</label>
                                <input class="form-control" type="text" placeholder="City" v-model="form.city">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Zip Code</label>
                                <input class="form-control" type="text" placeholder="9000990"  v-model="form.zip_code">
                                </div>
                            </div>
                            <div class="col-lg-12"> 
                                <div class="form-group mt-10">
                                    <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
                                        <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        <span v-else>Save Changes</span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                
                    </div>
                    <div class="panel-white mb-30">
                    <div class="box-padding">
                        <h6 class="color-text-paragraph-2">Other Profile Information</h6>
                        <form @submit.prevent="updateInternInfo" enctype="multipart/form-data">
                        <div class="row mt-30">
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group mb-0">
                                <div class="banner-hero banner-image-single">
                                    <img v-if="banner_url" :src="banner_url" alt="banner" style="border-radius: 16px;" height="160">
                                    <img v-else-if="form.banner" :src="form.banner" alt="banner" style="border-radius: 16px;"  height="160">
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group mb-0">
                                    <div class="upload-btn-wrapper">
                                <a class="btn btn-default btn-brand">Select a Banner</a>
                                <input type="file" name="file" v-on:change="onFileBannerChange"/>
                                </div>
                                </div>
                            </div>  
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Title *</label>
                                <input class="form-control" type="text" placeholder="Phone Number" v-model="form.title" required>
                                </div>
                            </div>
                            <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">About *</label>
                                <textarea class="form-control" name="message" rows="5" v-model="form.bio" required></textarea>
                                </div>
                        </div>
                        <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Work Experience </label>
                                <textarea  name="message" class="form-control" v-model="form.experience"></textarea>
                                </div>
                        </div>
                        <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Education History</label>
                                <textarea class="form-control" name="message" rows="5" v-model="form.education"></textarea>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">CV/Resume (Link)</label>
                            <input class="form-control" type="text" placeholder="https://drive.google.com/drive/1N1xm" v-model="form.cv">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Portfolio (Link)</label>
                            <input class="form-control" type="text" placeholder="https://github.com/username" v-model="form.portfolio">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Job Location Preference</label>
                                <select class="form-control" v-model="form.location">
                                    <option value="Remote & Onsite">Remote & Onsite</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Onsite">Onsite</option>
                                </select>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Education Level</label>
                                <select class="form-control" v-model="form.education_level">
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>
                        </div>
                        
                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Language</label>
                                <input class="form-control" type="text" placeholder="English & French" v-model="form.language">
                                </div>
                            </div>
                            
                        <div class="col-lg-12"> 
                            <div class="form-group mt-0">
                                <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
                                    <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span v-else>Save Changes</span>
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="section-box">
                <div class="container"> 
                    <div class="panel-white">
                    <div class="panel-head"> 
                        <h5>Social Network</h5>
                    </div>
                    <form @submit.prevent="updateInternInfo" enctype="multipart/form-data">
                        <div class="panel-body pt-20">
                            <div class="row">
                            <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Linkedin</label>
                                <input class="form-control" type="text" placeholder="https://www.linkedin.com/username" v-model="form.linkedin">
                                </div>
                            </div>
                            <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Facebook</label>
                                <input class="form-control" type="text" placeholder="https://www.facebook.com/username" v-model="form.facebook">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Twitter</label>
                                <input class="form-control" type="text" placeholder="https://twitter.com/username/" v-model="form.twitter">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Instagram</label>
                                <input class="form-control" type="text" placeholder="https://www.instagram.com/username" v-model="form.instagram">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Website </label>
                                <input class="form-control" type="text" placeholder="www.yourwebsite.com" v-model="form.website">
                                </div>
                            </div>
                            <div class="col-lg-12"> 
                                <div class="form-group mt-0">
                                    <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
                                        <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        <span v-else>Save Changes</span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="section-box">
                <div class="container"> 
                    <div class="panel-white">
                    <div class="panel-head"> 
                        <h5>My Skills</h5>
                    </div>
                    <div class="panel-body pt-20">
                        <div class="row" style="border-bottom: 1px solid #e0e6f7;margin-bottom: 15px;">
                            <div class="col">
                                <div class="form-group mb-15">
                                    <label class="font-sm color-text-mutted mb-0"> Skill: </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-15">
                                    <label class="font-sm color-text-mutted mb-0"> Level: </label>
                                </div>
                            </div>
                        </div>
                        <div v-if="(skills.length == 0 )" class="row" style="border-bottom: 1px solid #e0e6f7;margin-bottom: 15px;">
                            <div class="col">
                                <div class="form-group mb-15 text-center">
                                    <label class="font-sm color-text-mutted mb-0 text-center"> No skill added yet! </label>
                                </div>
                            </div>
                        </div>
                        <form v-else v-for="skill in skills" :key="skill.id">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group mb-30">
                                        <input class="form-control" type="text" placeholder="e.g Photoshop" v-model="skill.name" disabled>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="form-group mb-30">
                                        <input class="form-control" type="number" placeholder="92" v-model="skill.level" min="1" max="100" disabled>
                                    </div>
                                </div>
                                <div class="col col-md-2">
                                    <div class="form-group mb-30">
                                        <label class="font-sm color-text-mutted mb-10"> 
                                            <a href="#" @click="deleteSkill(skill.id)"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg> 
                                            </a>  
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h6>Add New Skill</h6><br/>
                        <form @submit.prevent="addSkill">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group mb-30">
                                        <input class="form-control" type="text" placeholder="e.g Photoshop" v-model="formskill.name">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-group mb-30">
                                        <input class="form-control" type="number" placeholder="92" min="1" max="100" v-model="formskill.level">
                                    </div>
                                </div>
                                <div class="col-lg-12"> 
                            <div class="form-group mt-0">
                            <button class="btn btn-default btn-brand icon-tick">
                                <span v-if="is_loading_skill" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span v-else>Add New Skill</span>
                            </button>
                            </div>
                        </div>
                            </div>
                            
                        </form>
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
            const is_loading = ref(false);
            const is_loading_page = ref(true);
            

            const image = ref('');
            const banner_image = ref('');
            const url = ref('');
            const banner_url = ref('');

            let form = reactive({
                
                email: '',
                phone_no: '',
                avatar: '',
                firstname: '',
                lastname: '',
                username: '',

                title: '',
                bio: '',
                banner: '',

                education_level: '',
                cv: '',
                portfolio: '',
                experience: '',
                education: '',
                language: '',
                location: '',
                country: '',
                state: '',
                city: '',
                zip_code: '',
                website: '',
                facebook: '',
                instagram: '',
                twitter: '',
                linkedin: '',
            });

            // skills
            let skills = ref({});
            const is_loading_skill = ref(false);
            let formskill = reactive({
                name: '',
                level: '',
            });

            const addSkill = async() =>{
                is_loading_skill.value = true;
                await axios.post('/api/skills/',formskill).then( res=>{
                    if(res.data.success){
                        is_loading_skill.value = false;
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                        Object.keys(formskill).forEach(v => formskill[v] = "");
                        toast.success(res.data.message);
                        window.location.reload();
                    }
                }).catch(e=>{
                    is_loading_skill.value = false;
                    toast.error(e.response.data.message);
                })
            }

            const updateUserInfo = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                if(image.value !== null && image.value !== '') {
                  formData.append('avatar', image.value);
                }
                 
                if(!!form.firstname){
                    formData.append('firstname', form.firstname);
                }
                if(!!form.lastname){
                    formData.append('lastname', form.lastname);
                }
                if(!!form.username){
                    formData.append('username', form.username);
                }
                if(!!form.email){
                    formData.append('email', form.email);
                }
                if(!!form.phone_no){
                    formData.append('phone_no', form.phone_no);
                }
                if(!!form.country){
                    formData.append('country', form.country);
                }
                if(!!form.state){
                    formData.append('state', form.state);
                }
                if(!!form.city){
                    formData.append('city', form.city);
                }
                if(!!form.zip_code){
                    formData.append('zip_code', form.zip_code);
                }
                // make request here
                formData.append('_method', 'PUT');
                await axios.post('/api/updateuser/', formData, config ).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        localStorage.setItem('user', JSON.stringify(res.data.data.user));
                        toast.success(res.data.message);
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }
   
            const updateInternInfo = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                if(banner_image.value !== null && banner_image.value !== '') {
                  formData.append('banner', banner_image.value);
                }


                if(!!form.title){
                    formData.append('title', form.title);
                }
                if(!!form.bio){
                    formData.append('bio', form.bio);
                }
                if(!!form.education_level){
                    formData.append('education_level', form.education_level);
                }
                if(!!form.cv){
                    formData.append('cv', form.cv);
                }
                if(!!form.portfolio){
                    formData.append('portfolio', form.portfolio);
                }
                if(!!form.experience){
                    formData.append('experience', form.experience);
                }
                if(!!form.education){
                    formData.append('education', form.education);
                }
                if(!!form.language){
                    formData.append('language', form.language);
                }
                if(!!form.location){
                    formData.append('location', form.location);
                }
                if(!!form.website){
                    formData.append('website', form.website);
                }
                if(!!form.facebook){
                    formData.append('facebook', form.facebook);
                }
                if(!!form.instagram){
                    formData.append('instagram', form.instagram);
                }
                if(!!form.twitter){
                    formData.append('twitter', form.twitter);
                }
                if(!!form.linkedin){
                    formData.append('linkedin', form.linkedin);
                }
                // make request here
                formData.append('_method', 'PUT');
                await axios.post('/api/updateinterninfo/', formData, config ).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        toast.success(res.data.message);
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }
    
          
            const getUserInternProfile = async() =>{
                axios.get('/api/fetchauthintern/').then( res=>{
                if(res.data.success){
                  is_loading_page.value = false;

                    const { title, bio, banner, experience,
                        education, education_level, cv, portfolio, location, website, language,
                         facebook, instagram , twitter, linkedin} = res.data.data.intern;

                    const {  firstname, lastname, username, email, phone_no, avatar, country, state, city, zip_code} = res.data.data.intern.user;
                   
                        form.title = title;
                        form.email = email;
                        form.phone_no = phone_no;
                        form.avatar = avatar;
                        form.firstname = firstname;
                        form.lastname = lastname;
                        form.username = username;
                        form.bio = bio;
                        form.banner = banner;
                        
                        form.experience = experience;
                        form.education =  education;
                        form.education_level = education_level;
                        form.cv = cv;
                        form.portfolio = portfolio;
                        form.language =  language;
                        form.location =  location;
                        form.country =  country;
                        form.state = state;
                        form.city =  city;
                        form.zip_code =  zip_code;
                        form.website = website;
                        form.facebook =  facebook;
                        form.instagram =  instagram;
                        form.twitter = twitter;
                        form.linkedin =  linkedin;

                }
                }).catch(e=>{
                    is_loading_page.value = false;
                    toast.error("Login please, your profile info is not fetched!");
                    localStorage.clear();
                    router.push({name: 'Login'});
                })
            }

            const getUserSkills = async() =>{
                axios.get('/api/skills/').then( res=>{
                if(res.data.success){
                    skills.value = res.data.data.skills;
                }
                }).catch(e=>{
                    // toast.error("Login please, your profile info is not fetched!");
                    e.res.data.message;
                    // localStorage.clear();
                })
            }
            
            onMounted(() =>{

                getUserInternProfile();
                getUserSkills();
            })


            function onFileChange(e){
              image.value = e.target.files[0];
              url.value = URL.createObjectURL(image.value);
            }

            function onFileBannerChange(e){
              banner_image.value = e.target.files[0];
              banner_url.value = URL.createObjectURL(banner_image.value);
            }

            return{
                form, getUserInternProfile,
                updateInternInfo, updateUserInfo,
                onFileChange, onFileBannerChange,
                url, banner_url, is_loading, is_loading_page,
                image, getUserSkills, skills, is_loading_skill,
                formskill, addSkill
            }

            },
            methods: {
                deleteSkill: function (id) {
                    // use event here as well as id
                    axios.delete(`/api/skills/${id}`).then( res=>{
                        if(res.data.success){
                            console.log(res.data.message);
                            window.location.reload();
                        }
                    }).catch(e=>{
                        // console.log(e.response.data);
                    })
                },
                onSkillNameChange: function (name) {
                    // use event here as well as id
                    alert(name);
                }
          }
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

/* 
.btn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}
*/

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
} 

    </style>