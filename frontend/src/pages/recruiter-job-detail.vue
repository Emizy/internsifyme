<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Job Details</h3>
              </div>
              <div class="box-breadcrumb"> 
                <router-link class="font-sm text-brand-2" :to="{ path: '/recruiter/editjob/'+job.id}">
                    <button title="Edit" class="btn btn-primary btn-brand" style="margin-right: 15px;background-color: #0371e0;"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </button>
                  </router-link>
                    <button title="Delete"  class="btn btn-danger btn-brand" @click="deleteJob()">
                      <span v-if="is_delete_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      <svg v-else xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                  </button>
              </div>
            </div>
            <div class="row"> 
          <div class="col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h5 class="">{{ job.title }}</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                            <div class="item-timeline"> 
                                <div class="timeline-year"> <span>{{ job.type }}</span></div>
                                <div class="timeline-year"> <span>{{ job.location }}</span></div>
                            </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">About Job Role</label>
                              <p class="color-text-paragraph-2 mb-15"> {{ job.about_role }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h5 class="">Report</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Total Applicants</label>
                              <h5 class="">{{ total_applicants }}</h5>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Total View</label>
                              <h5 class="">{{ total_view }}</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h5 class="">List of Applicants who apply on InternsifyMe</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                          <div v-if="is_loading" class="row justify-content-center align-items-center">
                              <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                          </div>
                          <div v-if="(applicants.length == 0)" class="row justify-content-center align-items-center">
                              <div class="col-lg-12 col-md-12 align-items-center justify-content-center">
                                  <div class="box-upload d-flex align-items-center justify-content-center">
                                      <img src="@/assets/imgs/icons/profiles.svg" alt="ic">
                                      <span style="color: #66789c; margin-left:15px;"> No applicant yet! </span>
                                  </div>
                              </div>
                          </div>
                            <table class="table">
                                <thead v-if="(applicants.lenght > 0)" class="thead-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">View</th>
                                    </tr>
                                </thead>
                                <tbody v-for="(applicant, index) in applicants" :key="index">
                                    <tr>
                                    <th scope="row">{{index + 1}}</th>
                                    <td style="text-transform: capitalize;">{{applicant.user.firstname}} {{applicant.user.lastname}} </td>
                                    <td>{{applicant.user.email}}</td>
                                    <td>{{applicant.user.phone_no}}</td>
                                    <td class="text-center">
                                      <router-link class="font-sm text-brand-2 text-center" target="_blank" :to="{ path: '/@'+applicant.user.username}">
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
            const route = useRoute();
            // Get toast interface
            const toast = useToast();
          
            let total_applicants = ref(0);
            let total_view = ref(0);

            let job = ref({});
            let applicants = ref({});
            let company_logo = ref('');
            const is_loading = ref(true);
            const is_delete_loading = ref(false);
         
            const getJobApplicants = async() =>{
              axios.get(`/api/listjobapplicants/${route.params.id}`).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        applicants.value = res.data.data.applicants;
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }

            // delete job
            const deleteJob = async() =>{
              is_delete_loading.value = true;
              axios.delete(`/api/jobs/${route.params.id}`).then( res=>{
                    if(res.data.success){
                        is_delete_loading.value = false;
                        toast.success("Job Deleted Successfully!");
                        // redirect to job list
                        router.push({name: 'Jobs'});
                    }
                }).catch(e=>{
                    is_delete_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }

            // fetch job report
            const fetchJobReport = async() =>{
                axios.get(`/api/jobreport/${route.params.id}`).then( res=>{
                      if(res.data.success){
                          total_applicants.value = res.data.data.total_applicants;
                          total_view.value = res.data.data.total_view;
                      }
                  }).catch(e=>{
                    e.response.data.message;
                  })
              }

            onMounted(() =>{
                // on Mounted here
                axios.get(`/api/jobs/${route.params.id}`).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        job.value = res.data.data.job;
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                    localStorage.clear();
                    router.push({name: 'Jobs'});
                })

                // get job applicants
                getJobApplicants();
                // Job report
                fetchJobReport();
            })

            function formatPrice(value) {
                var formatter = new Intl.NumberFormat('en-US', {
                    minimumFractionDigits: 2
                });
                return formatter.format(value);
            }
            
            return{
                job,
                company_logo,
                is_loading,
                formatPrice,
                route, getJobApplicants, applicants,
                fetchJobReport, total_view, total_applicants,
                deleteJob, is_delete_loading
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