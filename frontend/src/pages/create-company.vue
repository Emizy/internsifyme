<template>
    <main class="main">
     <div class="box-content">
       <div class="row"> 
           <div class="col-xxl-3 col-xl-2 col-lg-2">

           </div>
         <div class="col-xxl-6 col-xl-8 col-lg-8">
           <div class="box-heading">
         <div class="box-title"> 
           <h3 class="mb-35">Add Company Info</h3>
         </div>
       </div>
           <div class="section-box">
            <form @submit.prevent="formSubmit" enctype="multipart/form-data">
             <div class="container"> 
               <div class="panel-white mb-30">
                 <div class="box-padding">
                   <h6 class="color-text-paragraph-2">Add your Company Info</h6>
                   <br/>
                   <div class="row"> 
                    <div class="col-lg-12 col-md-12">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Company Logo * </label>
                         <input class="form-control" type="file" placeholder="Company name" v-on:change="onFileChange">
                       </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Company Name * </label>
                         <input class="form-control" type="text" placeholder="Company name" v-model="form.name" required>
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30">
                         <label class="font-sm color-text-mutted mb-10">Motto</label>
                         <input class="form-control" type="text" placeholder="Motto" v-model="form.motto">
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Industry</label>
                              <select class="form-control" v-model="form.industry">
                                <option value="">Select Industry</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Chemical Industries">Chemical Industries</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Construction">Construction</option>
                                <option value="Education">Education</option>
                                <option value="Financial Services">Financial Services</option>
                                <option value="Professional Services">Professional Services</option>
                                <option value="Food">Food</option>
                                <option value="Forestry">Forestry</option>
                                <option value="Health Services">Health Services</option>
                                <option value="Hotels">Hotels</option>
                                <option value="Mining">Mining</option>
                                <option value="Mechanical and electrical engineering">Mechanical and electrical engineering</option>
                                <option value="Oil and gas production">Oil and gas production</option>
                                <option value="Telecommunications Services ">Telecommunications Services </option>
                                <option value="Public Service">Public Service</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Textiles">Textiles</option>
                                <option value="Transport">Transport</option>
                                <option value="Utilities">Utilities</option>
                              </select>
                            </div>
                    </div>
                     <div class="col-lg-12"> 
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">About *</label>
                         <textarea class="form-control" name="message" rows="5" placeholder="About" v-model="form.about" required></textarea>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="panel-white mb-30">
                 <div class="box-padding">
                   <h6 class="color-text-paragraph-2">Contact Information</h6>
                   <div class="row mt-30">
                    <div class="col-lg-4 col-md-4">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Phone Number</label>
                         <input class="form-control" type="text" placeholder="Phone Number" v-model="form.phone_number">
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                       <div class="form-group mb-30">
                         <label class="font-sm color-text-mutted mb-10">Email Address *</label>
                         <input class="form-control" type="email" placeholder="Officail email address" v-model="form.email" required>
                       </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                       <div class="form-group mb-30">
                         <label class="font-sm color-text-mutted mb-10">Website Address</label>
                         <input class="form-control" type="text" placeholder="www.website.com" v-model="form.website">
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Country</label>
                         <select class="form-control" v-model="form.country">
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
                         <input class="form-control" type="text" placeholder="Zip Code" v-model="form.zip_code">
                       </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Address </label>
                         <input class="form-control" type="text" placeholder="Address" v-model="form.address">
                       </div>
                     </div>
                   </div>
                 </div>
                 
               </div>
               <div class="panel-white mb-30">
                <div class="box-padding">
                   <h6 class="color-text-paragraph-2">Social Media</h6>
                   <div class="row mt-30">
                    <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Linkedin</label>
                         <input class="form-control" type="text" placeholder="Linkedin" v-model="form.linkedin">
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30">
                         <label class="font-sm color-text-mutted mb-10">Instagram</label>
                         <input class="form-control" type="text" placeholder="Instagram" v-model="form.instagram">
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Twitter</label>
                         <input class="form-control" type="text" placeholder="Twitter" v-model="form.twitter">
                       </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                       <div class="form-group mb-30">
                         <label class="font-sm color-text-mutted mb-10">Facebook</label>
                         <input class="form-control" type="text" placeholder="Facebook" v-model="form.facebook">
                       </div>
                     </div>
                   </div>
                   
                   </div>
                   
                 </div>
                 <div class="col-lg-12"> 
                       <div class="form-group mt-0">
                         <button class="btn btn-brand-1 hover-up w-100" :disabled="is_loading">
                            <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span v-else>Submit</span>
                         </button>
                       </div>
                     </div>
             </div>
             </form>
           </div>
           
         </div>
         <div class="col-xxl-3 col-xl-2 col-lg-2">

         </div>
       </div>
     </div>
   </main>
  
</template>

<script>
    import { reactive,ref, onMounted, computed } from 'vue'
    import { useRouter } from "vue-router"
    import { useToast } from "vue-toastification";
    import axios from 'axios';

   export default{
        setup(){
            const router = useRouter()
            const toast = useToast();
            
            
            let form = reactive({
                name :'',
                motto :'',
                industry :'',
                about: '',
                phone_number: '',
                email: '',
                website: '',
                country: 'Nigeria',
                state: '',
                city: '',
                zip_code: '',
                address: '',
                linkedin: '',
                instagram: '',
                twitter: '',
                facebook: '',
            });
           
            const is_loading = ref(false);
            const is_success = ref(false);
            const image = ref('');

            const formSubmit = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                if(image.value !== null && image.value !== '') {
                  formData.append('logo', image.value);
                }
                formData.append('name', form.name);
                formData.append('motto', form.motto);
                formData.append('industry', form.industry);
                formData.append('about', form.about);
                formData.append('email', form.email);
                formData.append('website', form.website);
                formData.append('country', form.country);
                formData.append('state', form.state);
                formData.append('city', form.city);
                formData.append('zip_code', form.zip_code);
                formData.append('address', form.address);
                formData.append('linkedin', form.linkedin);
                formData.append('instagram', form.instagram);
                formData.append('twitter', form.twitter);
                formData.append('facebook', form.facebook);


                await axios.post('/api/companies',formData, config).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        is_success.value = true;
                        Object.keys(form).forEach(v => form[v] = "");
                        toast.success(res.data.message);
                        router.push({name: 'dashboardRecruiter'})
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }
            
            function onFileChange(e){
              image.value = e.target.files[0];
            }
            
            return{
                form,
                is_loading,
                is_success,
                formSubmit,onFileChange
            }
            
        }
    }
</script>
<style scoped>
   @import "@/assets/dashboard/css/style.css";
   

.btn-brand-1 {
    padding: 18px 25px;
    background: #0371E0;
    color: #ffffff;
    border-radius: 4px;
}

.btn-brand-1:hover {
    padding: 18px 25px;
    border: 1px solid #0371E0;
    background-color: #ffffff;
    border-radius: 4px;
    color: #0371E0;
}


</style>