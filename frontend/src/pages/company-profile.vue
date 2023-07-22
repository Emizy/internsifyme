<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Company Profile</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Company Profile</span></li>
                  </ul>
                </div>
              </div>
            </div>
            
          <div class="row"> 
          <div class="col-xxl-12 col-xl-12 col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div v-if="is_loading_page" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;margin-top: 3em;margin-bottom: 3em;"></div>
                  </div>
                <form v-else @submit.prevent="updateCompanyInfo" enctype="multipart/form-data">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Update your company info</h6>
                    <br/>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-10">
                                <label class="font-sm color-text-mutted mb-0">Banner and Logo </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                                <div class="banner-hero banner-image-single">
                                    <img v-if="banner_url" :src="banner_url" alt="banner" style="border-radius: 16px;" height="160">
                                    <img v-else-if="form.banner" :src="form.banner" alt="banner" style="border-radius: 16px;"  height="160">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                    <div class="upload-btn-wrapper">
                                <button class="btn btn-default btn-brand">Select a Banner</button>
                                <input type="file" name="file" v-on:change="onFileBannerChange"/>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="box-profile-image"> 
                      <div class="img-profile"> 
                        <img alt="" v-if="url" :src="url" style="border-radius: 50%;height: 65px; width: 65px;" />
                        <img alt="" v-else-if="form.logo" :src="form.logo" style="border-radius: 50%;height: 65px; width: 65px;">
                      </div>
                      <div class="info-profile">  
                        <!-- <input class="form-control" type="file" v-on:change="onFileChange"> -->
                        <div class="upload-btn-wrapper">
                            <button class="btn btn-default btn-brand">Select a Logo</button>
                            <input type="file" name="file" v-on:change="onFileChange"/>
                        </div>
                    </div>
                    </div>
                    <div class="row"> 
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
                         <textarea class="form-control" name="message"  placeholder="About" v-model="form.about" required></textarea>
                       </div>
                     </div>
                     <div class="col-lg-12"> 
                       <div class="form-group mb-30"> 
                         <label class="font-sm color-text-mutted mb-10">Recruitment Process</label>
                         <textarea class="form-control" name="message" rows="5" placeholder="Share your Recruitment Process" v-model="form.recruitment_process"></textarea>
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
                         <input class="form-control" type="text" placeholder="01 - 234 567 89" v-model="form.phone_number">
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
                         <input class="form-control" type="text" placeholder="Country" v-model="form.country">
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
                         <button class="btn btn-default btn-brand icon-tick w-100" :disabled="is_loading">
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
                name: '',
                motto: '',
                about: '',
                email: '',
                phone_number: '',
                logo: '',
                banner: '',
                industry: '',
                recruitment_process: '',
                country: '',
                state: '',
                city: '',
                zip_code: '',
                address: '',
                website: '',
                facebook: '',
                instagram: '',
                twitter: '',
                linkedin: '',
            });
   
            const updateCompanyInfo = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }

                }

                let formData = new FormData();
                if(image.value !== null && image.value !== '') {
                  formData.append('logo', image.value);
                }
                if(banner_image.value !== null && banner_image.value !== '') {
                  formData.append('banner', banner_image.value);
                }

              
                
                if(!!form.name){
                  formData.append('name',  form.name);
                }
                if(!!form.motto){
                  formData.append('motto', form.motto);
                }
                if(!!form.about){
                  formData.append('about', form.about);
                }
                if(!!form.email){
                  formData.append('email', form.email);
                }
                if(!!form.phone_number){
                  formData.append('phone_number', form.phone_number);
                }
                if(!!form.industry){
                  formData.append('industry',form.industry);
                }
                if(!!form.recruitment_process){
                  formData.append('recruitment_process',form.recruitment_process);
                }
                if(!!form.country){
                  formData.append('country', form.country);
                }
                if(!!form.state){
                  formData.append('state', form.state);
                }
                if(!!form.city){
                  formData.append('city',form.city);
                }

                if(!!form.zip_code){
                  formData.append('zip_code', form.zip_code);
                }
                if(!!form.address){
                  formData.append('address', form.address);
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
                await axios.post('/api/updatecompanyinfo/', formData, config ).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        toast.success(res.data.message);
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }
    
          
            const getRecruiterCompany = async() =>{
                axios.get('/api/getrecruitercompany/').then( res=>{
                if(res.data.success){
                  is_loading_page.value = false;

                    const { name,motto,about,email,phone_number,
                        logo,banner,industry,recruitment_process,
                        country,state,city,zip_code,address,website,
                        facebook,instagram,twitter,linkedin} = res.data.data.company;
                   
                        form.name = name;
                        form.motto =  motto;
                        form.about = about;
                        form.email = email;
                        form.phone_number = phone_number;
                        form.logo = logo;
                        form.banner =  banner;
                        form.industry = industry;
                        form.recruitment_process = recruitment_process;
                        form.country = country;
                        form.state = state;
                        form.city = city;
                        form.zip_code = zip_code;
                        form.address = address;
                        form.website = website;
                        form.facebook = facebook;
                        form.instagram = instagram;
                        form.twitter = twitter;
                        form.linkedin = linkedin ;

                }
                }).catch(e=>{
                    is_loading_page.value = false;
                    if (e.response && e.response.status === 401) {
                      toast.error("Please, kindly re-login for authenication");
                      localStorage.clear();
                      router.push({name: 'Login'});
                    }else{
                      toast.error(e.response.data.message);
                    }

                })
            }
            
            onMounted(() =>{
                getRecruiterCompany();
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
                form,
                getRecruiterCompany,
                updateCompanyInfo,
                onFileChange,onFileBannerChange,
                url,banner_url,
                is_loading, is_loading_page
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