<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Profile Settings</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Profile Settings</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row"> 
          <div class="col-xxl-12 col-xl-12 col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                <form @submit.prevent="updateUserInfo" enctype="multipart/form-data">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Update your profile</h6>
                        <div class="box-profile-image"> 
                          <div class="img-profile"> 
                            <img alt="" v-if="url" :src="url" style="border-radius: 50%;height: 65px; width: 65px;" />
                            <img alt="" v-else-if="form.avatar" :src="form.avatar" style="border-radius: 50%;height: 65px; width: 65px;">
                          </div>
                          <div class="info-profile">  
                            <!-- <input class="form-control" type="file" v-on:change="onFileChange"> -->
                            <div class="upload-btn-wrapper">
                                <button class="btn btn-default btn-brand">Select a Picture</button>
                                <input type="file" name="file" v-on:change="onFileChange"/>
                            </div>
                          </div>
                        </div>
                    <div class="row"> 
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10"> Firstname *</label>
                          <input class="form-control" type="text" v-model="form.firstname" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Lastname *</label>
                          <input class="form-control" type="text" v-model="form.lastname" required>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Username</label>
                          <input class="form-control" type="text" v-model="form.username" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Contact Number</label>
                          <input class="form-control" type="text" v-model="form.phone_no" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Email Address</label>
                          <input class="form-control" type="text" v-model="form.email" required>
                        </div>
                      </div>
                    
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Country</label>
                          <input class="form-control" type="text" v-model="form.country">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">State</label>
                          <input class="form-control" type="text" v-model="form.state">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">City</label>
                          <input class="form-control" type="text" v-model="form.city">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Zip Code </label>
                          <input class="form-control" type="text" v-model="form.zip_code">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                            <label class="cb-container">
                               <span> <input type="checkbox" v-model="form.email_notify"><span class="text-small">Allow email notification</span><span class="checkmark"></span></span>
                            </label>
                        </div>
                      </div>
                      
                      <div class="col-lg-12"> 
                        <div class="form-group mt-10">
                          <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
                            <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span v-else>Save Change</span>
                            
                          </button>
                        </div>
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

            const image = ref('');
            const url = ref('');

            let form = reactive({
                firstname: '',
                lastname: '',
                username: '',
                email: '',
                avatar: '',
                phone_no: '',
                country: '',
                state: '',
                city: '',
                zip_code: '',
                email_notify: '',
            });
   
            const updateUserInfo = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                if(image.value !== null && image.value !== '') {
                  formData.append('avatar', image.value);
                }
                formData.append('firstname', form.firstname);
                formData.append('lastname', form.lastname);
                formData.append('username', form.username);
                formData.append('email', form.email);
                formData.append('phone_no', form.phone_no);
                formData.append('country', form.country);
                formData.append('state', form.state);
                formData.append('city', form.city);
                formData.append('zip_code', form.zip_code);
                formData.append('email_notify', (form.email_notify == true) ? 1 : 0);
                
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
    
          
            const showUserInfo = async() =>{
                    axios.get('/api/user/').then( res=>{
                    if(res.data.success){
                        const { firstname, lastname, username,email,avatar,phone_no,country,state,city,zip_code, email_notify } = res.data.data.user;
                        
                        form.firstname = firstname;
                        form.lastname = lastname;
                        form.username = username;
                        form.email = email;
                        form.avatar = avatar;
                        form.phone_no = (phone_no == 'null') ? '' : phone_no;
                        form.country = (country == 'null') ? '' : country;
                        form.state = (state == 'null') ? '' : state;
                        form.city = (city == 'null') ? '' : city;
                        form.zip_code = (zip_code == 'null') ? '' : zip_code;
                        form.email_notify =  (email_notify == 1) ? true : false;
                        //update localstorage
                        localStorage.setItem('user', JSON.stringify(res.data.data.user));
                    }
                }).catch(e=>{
                    toast.error("Your info is not fetched: ".concat(e.response.data.message));
                    localStorage.clear();
                    router.push({name: 'Home'});
                })
            }
            
            onMounted(() =>{
                showUserInfo();
            })

            function onFileChange(e){
              image.value = e.target.files[0];
              url.value = URL.createObjectURL(image.value);
            }

            return{
                form,
                updateUserInfo,
                showUserInfo,
                onFileChange,
                url,is_loading
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
    /*background-color: #05264E;
    transform: translateY(-2px);
    transition: 0.2s;*/
	
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