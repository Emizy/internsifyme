<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Recruiters</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardIntern'}"> Dashboard </router-link></li>
                    <li><span>Recruiters</span></li>
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
                    <div v-if="is_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-if="(companies.length == 0)" class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="box-upload d-flex align-items-center justify-content-center">
                                <img src="@/assets/imgs/icons/recruiters.svg" alt="ic">
                                <span style="color: #66789c; margin-left:15px;"> No recruiter yet! </span>
                            </div>
                        </div>
                    </div>
                    <div v-else class="row">
                      <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" v-for="company in companies" :key="company.id">
                        <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                          <div class="image-box"><router-link target="_blank" :to="{ path: '/company/'+company.id+'/'+company.name.replace(/\s+/g, '-').toLowerCase()}"><img :src="company.logo" alt="logo" class="company_logo"></router-link></div>
                          <div class="info-text mt-10">
                            <h5 class="font-bold"><router-link target="_blank" :to="{ path: '/company/'+company.id+'/'+company.name.replace(/\s+/g, '-').toLowerCase()}">{{ company.name }}</router-link></h5>
                            <span class="card-location">{{ (company.city == null) ? '' : company.city }}{{ (company.state == null) ? '' : ", ".concat(company.state) }}</span>
                            <div class="mt-30"><router-link target="_blank" class="btn btn-grey-big" :to="{ path: '/company/'+company.id+'/'+company.name.replace(/\s+/g, '-').toLowerCase()}"><span>{{ company.available_jobs }}</span><span> Jobs Open        </span></router-link></div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- <div class="paginations">
                      <ul class="pager">
                        <li><a class="pager-prev" href="#"></a></li>
                        <li><a class="pager-number" href="#">1</a></li>
                        <li><a class="pager-number" href="#">2</a></li>
                        <li><a class="pager-number" href="#">3</a></li>
                        <li><a class="pager-number" href="#">4</a></li>
                        <li><a class="pager-number" href="#">5</a></li>
                        <li><a class="pager-number active" href="#">6</a></li>
                        <li><a class="pager-number" href="#">7</a></li>
                        <li><a class="pager-next" href="#"></a></li>
                      </ul>
                    </div> -->
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


            let companies = ref({});
            // let company_logo = ref('');
            const is_loading = ref(true);
            
            onMounted(() =>{
                // on Mounted here
                axios.get('/api/randfetchallcompanies/').then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        companies.value = res.data.data.companies;
                    }
                }).catch(e=>{
                    e.response.data.message
                    is_loading.value = false;
                    toast.error();
                    localStorage.clear("Please, kindly re-login for authenication");
                    router.push({name: 'Login'});
                })
            })


          
            return{
                is_loading, companies
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

.company_logo{
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
    </style>