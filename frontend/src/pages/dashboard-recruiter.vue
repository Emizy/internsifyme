<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Dashboard</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}">Dashboard</router-link></li>
                    <li><span>Recruiter</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row"> 
              <div class="col-xxl-8 col-xl-7 col-lg-7">
                <div class="section-box">
                  <div class="row"> 
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                      <div class="card-style-1 hover-up">
                        <div class="card-image"> <img src="@/assets/imgs/icons/article.svg" alt="ic"></div>
                        <div class="card-info"> 
                          <div class="card-title">
                            <h3>{{ created_jobs }} </h3>
                          </div>
                          <p class="color-text-paragraph-2">Posted Jobs</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                      <div class="card-style-1 hover-up">
                        <div class="card-image"> <img src="@/assets/imgs/icons/man.svg" alt="ic"></div>
                        <div class="card-info"> 
                          <div class="card-title">
                            <h3>{{ applied_interns }}</h3>
                          </div>
                          <p class="color-text-paragraph-2">Applied Interns</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                      <div class="card-style-1 hover-up">
                        <div class="card-image"> <img src="@/assets/imgs/icons/view.svg" alt="ic"></div>
                        <div class="card-info"> 
                          <div class="card-title">
                            <h3>{{ profile_view }} </h3>
                          </div>
                          <p class="color-text-paragraph-2">Profile Viewed</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                      <div class="card-style-1 hover-up">
                        <div class="card-image"> <img src="@/assets/imgs/icons/job_view.svg" alt="ic"></div>
                        <div class="card-info"> 
                          <div class="card-title">
                            <h3>{{ total_job_view }}</h3>
                          </div>
                          <p class="color-text-paragraph-2">Total Job Viewed</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section-box">
                  <div class="container"> 
                    <div class="panel-white">
                      <div class="panel-head"> 
                        <h5>Recent Posted Jobs</h5>
                      </div>
                      <div class="panel-body">
                        <div v-if="(jobs.length == 0)" class="text-center" style="color:#a0abba;font-style:italic;"> No Job posted yet!</div>
                        <div v-if="is_loading" class="row justify-content-center align-items-center">
                            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                        </div>
                        <div v-else class="card-style-2 hover-up" v-for="job in jobs" :key="job.id">
                          <div class="card-head">
                            <div class="card-title"> 
                              <h6><router-link class="font-sm text-brand-2" target="_blank" :to="{ path: '/internship-job/'+job.id+'/'+job?.company?.name.replace(/[^A-Z0-9]+/ig, '-').toLowerCase()+'/'+job.title.replace(/[^A-Z0-9]+/ig, '-').toLowerCase()}">{{job.title}}</router-link></h6>
                              <span class="job-type">{{job.type}}</span><span class="time-post">{{job.location}}</span>
                              
                            </div>
                          </div>
                          <div class="card-tags"> 
                            <span v-if="(job.active == 1)" class="btn btn-tag" > Active</span>
                            <span v-else-if="(job.active == 0)" class="btn btn-tag" > Pending</span>
                            <span v-else-if="(job.active == 2)" class="btn btn-tag" > Closed</span>
                          </div>
                          <div v-if="(job.stipend != Null)" class="card-price"><strong>{{ job.currency }}</strong><span class="hour" style="margin-left:6px;">{{ formatPrice(job.stipend) }}</span></div>
                          <div v-else class="card-price"><span class="hour">No Stipend</span></div>
                        </div>
                        <a v-if="(jobs.length == 3)" href="/recruiter/jobs" class="btn btn-default  hover-up" >Show More</a>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-lg-5">
                <div class="section-box">
                  <div class="container"> 
                    <div class="panel-white">
                      <div class="panel-head"> 
                        <h5>Available Interns</h5>
                      </div>
                      <div class="panel-body">
                        <div>
                        <div class="text-center" v-if="(interns.length == 0)" style="color:#a0abba;font-style:italic;"> No Available Interns!</div>
                        </div>
                        <div v-if="is_loading" class="row justify-content-center align-items-center">
                            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                        </div>
                        <div v-else class="card-style-3 hover-up" v-for="intern in interns" :key="intern.id">
    
                          <div class="card-image online">
                            <img :src="intern.user.avatar" alt="user"></div>
                          <div class="card-title"> 
                            <h6 style="text-transform: capitalize;"><router-link target="_blank" :to="{ path: '/@'+intern.user.username}">{{intern.user.firstname}} {{intern.user.lastname}} </router-link></h6><span class="job-position">{{ intern.title }}</span>
                          </div>
                          <div class="card-location" v-if="((intern.user.city && intern.user.state) !== null)">  <span class="location">  {{ intern.user.city }}, {{ intern.user.state }}</span></div>
                          
                        </div>
                        <a v-if="(interns.length == 3)" href="/recruiter/interns" class="btn btn-default  hover-up" >Show More</a>
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
        import { useRouter, useRoute } from "vue-router";
        import { reactive,ref, onMounted, onBeforeMount, computed } from 'vue';
        import { useToast } from "vue-toastification";
        import axios from 'axios';

        import Header from '@/components/Header.vue'
        import Sidebar from '@/components/Sidebar.vue'
        import Footer from '@/components/Footer.vue'
    
 
        export default{
            components:{
                Header, Sidebar, Footer
            },
            setup(){
                const router = useRouter();
                const route = useRoute();
                const toast = useToast();
    
                const is_loading = ref(true);
                let interns = ref({});
                let jobs = ref({});
    
                let profile_view = ref();
                let created_jobs = ref();
                let applied_interns = ref();
                let total_job_view = ref();
    
              
                onMounted(() =>{
                    // on Mounted here
                    axios.get('/api/fetchactiveinternsrandomly/').then( res=>{
                        if(res.data.success){
                            is_loading.value = false;
                            interns.value = res.data.data.interns;
                        }
                    }).catch(e=>{
                        is_loading.value = false;
                        toast.error(e.response.message);
                        localStorage.clear();
                        router.push({name: 'Login'});
                    })
    
                    // Fetch Recruiter Jobs
                    axios.get('/api/fetchrecruiterjobs/').then( res=>{
                        if(res.data.success){
                            is_loading.value = false;
                            jobs.value = res.data.data.jobs;
                        }
                    }).catch(e=>{
                        is_loading.value = false;
                        // toast.error("Job is not successfully fetched!");
                    })
    
                    // Fetch Recruiter Report
                    axios.get('/api/fetchreport/').then( res=>{
                        if(res.data.success){
                            is_loading.value = false;
                            profile_view.value = res.data.data.profile_view;
                            created_jobs.value = res.data.data.created_jobs;
                            applied_interns.value = res.data.data.applied_interns;
                            total_job_view.value = res.data.data.total_job_view;
                            // toast.success("Report successfully fetched!");
                        }
                    }).catch(e=>{
                        is_loading.value = false;
                        
                    })
                  
                })
    
                onBeforeMount(() =>{
                  // Check if profile created and if user is on the right dashboard
                  // if(JSON.parse(localStorage.getItem('user')).profile_created == 0){
                  //     router.push({name: 'AddCompany'});
                  // }

                  if(JSON.parse(localStorage.getItem('user')).user_type == 0){
                    router.push({name: 'dashboardIntern'});
                  }
                })

                function formatPrice(value) {
                    var formatter = new Intl.NumberFormat('en-US', {
                        minimumFractionDigits: 2
                    });
                    return formatter.format(value);
                }
                return{
                  interns,
                  is_loading,
                  jobs, formatPrice,toast,
                  profile_view,created_jobs,
                  applied_interns, total_job_view
                }
            },
    
        }
    </script>
    
    <style scoped>
       @import "@/assets/dashboard/css/style.css";
    
    i {
              font-family: "Font Awesome 6 Free" !important;
          }
    </style>