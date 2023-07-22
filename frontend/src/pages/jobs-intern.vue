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
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardIntern'}"> Dashboard </router-link></li>
                    <li><span>Jobs</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Applied Jobs-->
            <div class="row"> 
          <div class="col-lg-12"> 
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <div class="box-filters-job">
                      <h5 class="mb-30">Applied Jobs</h5>
                    </div>
                    <div v-if="is_loading_apply" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-if="(applied_jobs.length == 0)" class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="box-upload d-flex align-items-center justify-content-center">
                                <img src="@/assets/imgs/icons/jobs.svg" alt="ic">
                                <span style="color: #66789c; margin-left:15px;"> You have not applied for any Job yet </span>
                            </div>
                        </div>
                    </div>
                   
                      <table v-else class="table">
                    <thead class="thead-light">
                      <tr v-if="(applied_jobs.length > 0)">
                        <th scope="col">Job Title</th>
                        <th scope="col">Date Applied</th>
                        <th scope="col">View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="" v-for="applied_job in applied_jobs" :key="applied_job.id">
                        <td><h5 class="color-brand-1">{{ applied_job.job?.title}}</h5></td>
                        <td><div class="timeline-year"> <span>{{dateFormat(applied_job.created_at)}}</span></div></td>
                        <td>
                          <router-link class="font-sm text-brand-2" target="_blank" :to="{ path: '/internship-job/'+applied_job.job?.id+'/'+applied_job.company?.name.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()+'/'+applied_job.job?.title.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg>
                           </router-link>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                  
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
            <div class="row"> 
          <div class="col-lg-12"> 
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <div class="box-filters-job">
                      <h5 class="mb-30">Recent Posted Jobs</h5>
                    </div>
                    <div v-if="is_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-else>
                    <div v-if="(jobs.length == 0)" class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="box-upload d-flex align-items-center justify-content-center">
                                <img src="@/assets/imgs/icons/jobs.svg" alt="ic">
                                <span style="color: #66789c; margin-left:15px;"> No job posted yet! </span>
                            </div>
                        </div>
                    </div>
                    <div v-else class="row display-list">
                      <div class="col-lg-6" v-for="job in jobs" :key="job.id">
                        <router-link class="font-sm text-brand-2" target="_blank" :to="{ path: '/internship-job/'+job?.id+'/'+job.company?.name.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()+'/'+job?.title.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()}">
                        <div class="card-style-2 hover-up">
                          <div class="card-head">
                            <div class="card-image"> <img :src="job?.company.logo" alt="logo"></div>
                            <div class="card-title"> 
                              <h6>{{ job?.title }}</h6>
                              <span class="job-type">{{ job?.type }}</span>
                              <span class="time-post">{{ job?.location }}</span>
                              <span class="location">{{ (job.company?.city == null) ? "" : job.company?.city + ", "+job.company?.state}}</span>
                            </div>
                          </div>
                          <div class="card-tags">
                             <a class="btn btn-tag">{{ (job?.active == 1) ? 'Active' : 'Not Active' }}</a>
                          </div>
                          <div v-if="(job?.stipend != null)" class="card-price"><strong>{{ job?.currency }}</strong> <span class="hour">{{ formatPrice(job?.stipend) }}</span></div>
                          <div v-else class="card-price">No Stipend</div>
                        </div>
                      </router-link>
                      </div>
                
                    </div>
                  </div>
                    <div class="paginations text-center">
                      <a v-if="(jobs.length >= 30)"  class="btn btn-default hover-up" :href="'/internship-jobs'" target="_blank" style="margin-right:20px;">Load More...</a>
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
          
       
            let jobs = ref({});
            let applied_jobs = ref({});
            const is_loading = ref(true);
            const is_loading_apply = ref(true);
         
            // fetch applied jobs by the intern
            const fetchAppliedJob = async() =>{
              axios.get('/api/fetchuserappliedjobs/').then( res=>{
                    if(res.data.success){
                      is_loading_apply.value = false;
                        applied_jobs.value = res.data.data.applied_jobs;
                    }
                }).catch(e=>{
                  is_loading_apply.value = false;
                    toast.error(e.response.data.message);
                    localStorage.clear();
                    router.push({name: 'Login'});
                })
            }
            onMounted(() =>{
              // on Mounted here
              // call fetchAppliedJob on mounted
               fetchAppliedJob();
              //  fetchrecentjobs
               axios.get('/api/fetchrecentjobs/').then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        jobs.value = res.data.data.jobs;
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                    localStorage.clear();
                    router.push({name: 'Login'});
                })

            })

            function formatPrice(value) {
                var formatter = new Intl.NumberFormat('en-US', {
                    minimumFractionDigits: 2
                });
                return formatter.format(value);
            }
           
            return{
              jobs, is_loading, formatPrice, fetchAppliedJob,
              is_loading_apply, applied_jobs
            }
           
            },
            methods: {
            dateFormat(v) {
              let format = (d) =>
                d.toString().replace(/\w+ (\w+) (\d+) (\d+).*/, "$2 $1, $3");
              return format(new Date(v));
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