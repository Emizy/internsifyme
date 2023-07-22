<template>
    <div>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
         <div class="box-content">
          <div class="row"> 
            <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Dashboard</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <router-link class="icon-home" :to="{ name: 'dashboardIntern'}">Dashboard</router-link></li>
                <li><span>Intern</span></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="col-xxl-8 col-xl-7 col-lg-7">
            <div class="section-box">
              <div class="row"> 
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="@/assets/imgs/icons/view.svg" alt="ic"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>{{ profile_view }}</h3>
                      </div>
                      <p class="color-text-paragraph-2">Profile View</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="@/assets/imgs/icons/man.svg" alt="ic"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>{{ total_applied_jobs }}</h3>
                      </div>
                      <p class="color-text-paragraph-2">Applied Jobs</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="@/assets/imgs/icons/man.svg" alt="ic"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3 v-if="(verify == 0)">No</h3>
                        <h3 v-else-if="(verify == 1)">Yes</h3>
                      </div>
                      <p class="color-text-paragraph-2">Verified</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="@/assets/imgs/icons/man.svg" alt="ic"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3 v-if="(certify == 0)">No</h3>
                        <h3 v-else-if="(certify == 1)">Yes</h3>
                      </div>
                      <p class="color-text-paragraph-2">Certified</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Applied Jobs</h5>
                  </div>
                  <div class="panel-body">
                    <div v-if="is_loading_apply" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-if="(applied_jobs.length == 0)" class="text-center" style="color:#a0abba;font-style:italic;"> No applied job yet!</div>
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
                        <td><h5 class="color-brand-1">{{ applied_job.job.title}}</h5></td>
                        <td><div class="timeline-year"> <span>{{dateFormat(applied_job.created_at)}}</span></div></td>
                        <td>
                          <router-link class="font-sm text-brand-2" target="_blank" :to="{ path: '/internship-job/'+applied_job.job.id+'/'+applied_job?.company?.name.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()+'/'+applied_job.job.title.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                              </svg>
                           </router-link>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                  <a v-if="(applied_jobs.length == 3)" href="/intern/jobs" class="btn btn-default  hover-up" >Show More</a>
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
                          <h6><router-link class="font-sm text-brand-2" target="_blank" :to="{ path: '/internship-job/'+job.id+'/'+job?.company?.name.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()+'/'+job.title.replace(/[':', '\\', '/', '*', ' ']/g, '-').toLowerCase()}">{{job.title}}</router-link></h6>
                          <span class="job-type">{{job.type}}</span><span class="time-post">{{job.location}}</span>
                          
                        </div>
                      </div>
                      <div class="card-tags"> 
                        <span v-if="(job.active == 1)" class="btn btn-tag" > Active</span>
                        <span v-else-if="(job.active == 0)" class="btn btn-tag" > Pending</span>
                        <span v-else-if="(job.active == 2)" class="btn btn-tag" > Closed</span>
                      </div>
                      <div v-if="(job.stipend != null)" class="card-price"><strong>{{ job.currency }}</strong><span class="hour" style="margin-left:6px;">{{ formatPrice(job.stipend) }}</span></div>
                      <div v-else class="card-price"><span class="hour">No Stipend</span></div>
                    </div>
                    <a v-if="(jobs.length == 3)" href="/intern/jobs" class="btn btn-default  hover-up" >Show More</a>
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
                    <h5>Recruiters</h5>
                  </div>
                  <div class="panel-body">
                    <div>
                      <div class="text-center" v-if="(companies.length == 0)" style="color:#a0abba;font-style:italic;"> No Recruiter yet!</div>
                    </div>
                    <div v-if="is_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-else>
                      <div v-for="company in companies" :key="company.id" class="card-style-3 hover-up">
                        <div class="card-image online"><img :src="company.logo" alt="logo"></div>
                        <div class="card-title"> 
                          <h6><router-link target="_blank" :to="{ path: '/company/'+company?.id+'/'+company?.name.replace(/\s+/g, '-').toLowerCase()}">{{ company?.name }}</router-link> </h6><span class="job-position">{{ company?.state }} {{ (company?.state == null) ? company?.city : ", " + company?.city }}</span>
                        </div>
                        <div v-if="(company?.available_jobs < 2)" class="card-location"> <span class=""><b style="font-weight: bold;margin-right: 8px;">{{ company?.available_jobs}}</b> Posted Job</span></div>
                        <div v-else class="card-location"> <span class="location"><b style="font-weight: bold;">{{ company?.available_jobs}}</b> Posted Jobs</span></div>
                      </div>
                    </div>
                   
                    <a v-if="(companies.length >= 3)" href="/intern/recruiters" class="btn btn-default  hover-up" >Show More</a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
        
          <Footer></Footer>
          </div> 
        </main>
       
      </div>
      
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
                const is_loading_apply = ref(true);

                let interns = ref({});
                let companies = ref({});
                let jobs = ref({});
                let applied_jobs = ref({});
    
                let profile_view = ref();
                let total_applied_jobs = ref();
                let verify = ref();
                let certify = ref();
    
              
                 // fetch intern report
                const fetchInternReport = async() =>{
                  axios.get('/api/fetchinternreport/').then( res=>{
                        if(res.data.success){
                            is_loading.value = false;
                            profile_view.value = res.data.data.profile_view;
                            total_applied_jobs.value = res.data.data.applied_jobs;
                            verify.value = res.data.data.verify;
                            certify.value = res.data.data.certify;
                            // toast.success("Report successfully fetched!");
                        }
                    }).catch(error=>{
                        is_loading.value = false;
                        if (error.response && error.response.status === 401) {
                          // toast.error("Please, kindly re-login for authenication");
                          localStorage.clear();
                          router.push({name: 'Login'});
                        } 
                    })
                }

                  // fetch applied jobs by the intern
                const fetchAppliedJob = async() =>{
                  axios.get('/api/fetchuserappliedjobs/').then( res=>{
                        if(res.data.success){
                          is_loading_apply.value = false;
                            applied_jobs.value = res.data.data.applied_jobs.slice(0,3);
                        }
                    }).catch(e=>{
                        is_loading_apply.value = false;
                        if (e.response && e.response.status === 401) {
                          toast.error("Please, kindly re-login for authenication");
                          localStorage.clear();
                          router.push({name: 'Login'});
                        } 
                    })
                }

                // fetch recent jobs
                const fetchRecentJobs = async() =>{
                   axios.get('/api/fetchrecentjobs/').then( res=>{
                        if(res.data.success){
                            is_loading.value = false;
                            jobs.value = res.data.data.jobs.slice(0,3);
                        }
                    }).catch(e=>{
                        is_loading.value = false;
                        if (e.response && e.response.status === 401) {
                          // toast.error("Please, kindly re-login for authenication");
                          localStorage.clear();
                          router.push({name: 'Login'});
                        } 
                    })
                }

                  // fetch all companies
                const fetchRecentCompanies = async() =>{
                  axios.get('/api/randfetchallcompanies/').then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        companies.value = res.data.data.companies.slice(0,3);
                    }
                    }).catch(e=>{
                        is_loading.value = false;
                        if (e.response && e.response.status === 401) {
                          // toast.error("Please, kindly re-login for authenication");
                          localStorage.clear();
                          router.push({name: 'Login'});
                        } 
                    })
                }

                onMounted(() =>{
                    // on Mounted here
                    fetchAppliedJob();
                    // // Fetch Recruiter Jobs
                    fetchRecentJobs();
                    // Fetch Intern Report
                    fetchInternReport();
                    // Fetch all recruiters
                    fetchRecentCompanies();
                })
    
                onBeforeMount(() =>{
                  // Check if profile created and if user is on the right dashboard
                  // if(JSON.parse(localStorage.getItem('user')).profile_created == 0){
                  //   router.push({name: 'CreateInternProfile'});
                  // }

                  if(JSON.parse(localStorage.getItem('user')).user_type == 1){
                    router.push({name: 'dashboardRecruiter'});
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
                  profile_view, total_applied_jobs, applied_jobs, fetchInternReport,
                  fetchRecentJobs, fetchAppliedJob, is_loading_apply, fetchRecentCompanies,
                  companies, certify, verify
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
    
      i {
                font-family: "Font Awesome 6 Free" !important;
            }
    </style>