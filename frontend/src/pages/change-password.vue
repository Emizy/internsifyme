<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Change Password</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Change Password</span></li>
                  </ul>
                </div>
              </div>
            </div>
        <div class="row"> 
          <div class="col-xxl-12 col-xl-12 col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Change Password</h6>
                  <br/><br/>
                    <div class="row"> 
                    <form class="login-register text-start mt-20" @submit.prevent="changePassword"> 
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Old Password *</label>
                          <input class="form-control" type="password" placeholder="**********" v-model="form.oldpassword" required>
                        </div>
                      </div>
                      
                      <div class="col-lg-6 col-md-6">
                        
                      </div>
                      
                     
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">New Password *</label>
                          <input class="form-control" type="password" placeholder="**********" v-model="form.password" required>
                          <div style="color:red;padding-top: 5px;" v-if="form.password.length != 0 && form.password.length < 8"> Your password lenght should be greater than or equal to 8</div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">New Password Again*</label>
                          <input class="form-control" type="password" placeholder="**********" v-model="form.password_confirmation" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        
                      </div>
                      <div class="col-lg-12"> 
                        <div class="form-group mt-10">
                          <button class="btn btn-default" :disabled="is_loading || form.password.length < 8">

                            <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span v-else>Save Change</span>
                            
                        </button>
                        </div>
                      </div>
                    </form>
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
        import { reactive,ref, onMounted } from 'vue';
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
            const route = useRoute();

            let form = reactive({
                oldpassword: '',
                password: '',
                password_confirmation: '',
            });
    
            const is_loading = ref(false);

                
            const changePassword = async() =>{
                is_loading.value = true;
                await axios.put('/api/changepassword/',form).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                        Object.keys(form).forEach(v => form[v] = "");
                        toast.success(res.data.message);
                        console.log(res.data);
                        // check user type to know where to redirect
                      
                      
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    toast.error(e.response.data.message);
                })
            }
    
                return{
                    form,
                    changePassword
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
}

    </style>