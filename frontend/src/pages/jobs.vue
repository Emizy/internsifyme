<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Jobs</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="">
                  <ul> 
                    <li>  <router-link class="btn btn-default hover-up" :to="{ name: 'CreateJob'}">Post a Job</router-link></li>
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
                      <div class="row">
                        <div class="col-xl-6 col-lg-5"><span class="font-sm text-showing color-text-paragraph">Showing 41-60 of 944 jobs</span></div>
                        <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                          <div class="display-flex2">
                            <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                              <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                  <li><a class="dropdown-item active" href="#">10</a></li>
                                  <li><a class="dropdown-item" href="#">12</a></li>
                                  <li><a class="dropdown-item" href="#">20</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-border"><span class="text-sortby">Sort by:</span>
                              <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                  <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                  <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                  <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-view-type"><a class="view-type" href="my-job-list.html"><img src="assets/imgs/template/icons/icon-list.svg" alt="ic"></a><a class="view-type" href="my-job-grid.html"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="ic"></a></div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div v-if="is_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-if="(jobs.length == 0)" class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="box-upload d-flex align-items-center justify-content-center">
                                <img src="@/assets/imgs/icons/jobs.svg" alt="ic">
                                <span style="color: #66789c; margin-left:15px;"> No job posted yet! </span>
                            </div>
                        </div>
                    </div>
                    <div v-else class="row display-list" >
                      <div class="col-lg-6"  v-for="job in jobs" :key="job?.id">
                        <router-link class="font-sm text-brand-2" :to="{ path: '/recruiter/jobdetails/'+job?.id}">
                            <div class="card-style-2 hover-up">
                            <div class="card-head">
                                <div class="card-image"> <img :src="job.company?.logo" alt="Logo"></div>
                               
                                <div class="card-title"> 
                                <h6>{{ job?.title }}</h6>
                                    <span class="job-type">{{ job?.type }}</span>
                                    <span class="location">{{ job?.location }}</span>
                                    <!-- <span class="time-post">New York, US</span> -->
                                </div>
                            </div>
                            <div class="font-sm color-text-paragraph des">
                                {{ job?.about_role.substring(0,125).concat(' ...') }}
                            </div>
                            <!-- <br/><br/><br/><br/> -->
                           
                            <div class="card-tags"> 
                                <a class="btn btn-tag">{{ (job?.active == 0) ? 'Not Active' : 'Active' }}</a>
                            </div>
                            <div class="card-price">
                                <span v-if="(job?.stipend != null)"><strong>{{ job?.currency }}</strong> <span class="hour">{{ formatPrice(job?.stipend) }}</span></span>
                                <span v-else><span class="hour">No Stipend</span></span>
                            </div>
                            </div>
                        </router-link>
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
          
            let jobs = ref({});
            let company_logo = ref('');
            const is_loading = ref(true);
         
            onMounted(() =>{
                // on Mounted here
                axios.get('/api/fetchrecruiteralljobs/').then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        jobs.value = res.data.data.jobs;
                        // toast.success(res.data.message);
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error("Job not fetch, kindly reload");
                    // localStorage.clear();
                    // router.push({name: 'Login'});
                })
            })

            function formatPrice(value) {
                var formatter = new Intl.NumberFormat('en-US', {
                    minimumFractionDigits: 2
                });
                return formatter.format(value);
            }
            
            return{
                jobs,company_logo,is_loading,formatPrice
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