<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Edit Job</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Edit Job</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row"> 
          <div class="col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding bg-postjob">
                    <h5 class="icon-edu">Make changes on the role</h5>
                    <div v-if="is_job_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-else class="row mt-30">
                      <div class="col-lg-9">
                        <form @submit.prevent="updateJob">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Job title *</label>
                              <input class="form-control" type="text" placeholder="e.g.  UI/UX Designer" v-model="form.title">
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Add your job description *</label>
                              <textarea class="form-control" placeholder="Job description" rows="8" v-model="form.about_role" required> </textarea>
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Responsibilities *</label>
                              <textarea class="form-control" placeholder="Responsibilities" rows="8" v-model="form.responsibilities" required>
                                
                            </textarea>
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Requirements *</label>
                              <textarea class="form-control" placeholder="Requirements" rows="8" v-model="form.requirements" required>
                                
                            </textarea>
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Benefits *</label>
                              <textarea class="form-control" placeholder="Benefits" rows="8" v-model="form.benefits" required>
                                
                            </textarea>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Level *</label>
                              <select class="form-control" v-model="form.level">
                                <option value="No Experience">No Experience</option>
                                <option value="Experience">Experience</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                              <select class="form-control" v-model="form.type">
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">location *</label>
                              <select class="form-control" v-model="form.location">
                                <option value="Remote">Remote</option>
                                <option value="Onsite">Onsite</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10">Deadline *</label>
                              <input class="form-control" type="date" v-model="form.deadline" required>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10"> Is there Stipend (Pay) for this role? *</label>
                              <select class="form-control" v-model="form.stipendpay">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="row" v-if="(form.stipendpay == 'Yes')">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Currency *</label>
                                <select class="form-control" v-model="form.currency">
                                    <option value="NGN">NGN</option>
                                    <option value="USD">USD</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Amount *</label>
                                <input class="form-control" type="number" placeholder="Amount" v-model="form.stipend" required>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10"> Select Application Method</label>
                              <select class="form-control" v-model="form.application_method">
                                <option value="1">Application Directly on InternsifyMe</option>
                                <option value="0">Provide External Link</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-12" v-if="(form.application_method == 0)">
                            <div class="form-group mb-30"> 
                              <label class="font-sm color-text-mutted mb-10">Provide Link *</label>
                              <input class="form-control" type="text" placeholder="https://form.link/id/hsaHfkdiJn" v-model="form.application_link">
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <div class="form-group mb-30">
                              <label class="font-sm color-text-mutted mb-10"> Set Job Status *</label>
                              <select class="form-control" v-model="form.active">
                                <option value="1">Active</option>
                                <option value="0">Unactive</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-12"> 
                            <div class="form-group mt-10">
                              <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
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
        // import moment from "moment";
    
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
            const is_loading = ref(false);
            const is_job_loading = ref(true);

            let form = reactive({
                stipendpay: 'Yes',
                application_method: '1',
                application_link: '',
                title: '',
                stipend: '',
                currency: 'NGN',
                type: 'Full-time',
                level: 'No Experience',
                about_role: '',
                responsibilities: '',
                requirements: '',
                benefits: '',
                location: 'Remote',
                deadline: '',
                active: '',
            });
   
            const updateJob = async() =>{
                is_loading.value = true;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                // make request here
                let formData = new FormData();
                
                formData.append('title', form.title);

                formData.append('stipend', (form.stipendpay == 'No') ? '' : form.stipend);
                formData.append('application_link', (form.application_method == '1') ? '' : form.application_link);
                formData.append('currency', (form.stipendpay == 'No') ? 'NGN' : form.currency);
                formData.append('type', form.type);
                formData.append('level', form.level);
                formData.append('about_role', form.about_role);
                formData.append('responsibilities', form.responsibilities);
                formData.append('requirements', form.requirements);
                formData.append('benefits', form.benefits);
                formData.append('location', form.location);
                formData.append('deadline', form.deadline);
                formData.append('active', form.active);

                formData.append('_method', 'PUT');
                // formData.append('_method', 'PATCH')
                await axios.post(`/api/jobs/${route.params.id}`, formData, config).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        toast.success(res.data.message);
                        // redirect to job list
                        router.push({name: 'Jobs'});
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                    console.log(e.response.data);
                })
            }
           
            const showJobDetails = async() =>{
              axios.get(`/api/jobs/${route.params.id}`).then( res=>{
                    if(res.data.success){

                        const { application_link,title,stipend,currency,type,level,about_role,responsibilities, requirements, benefits, location, deadline, active } = res.data.data.job;

                        form.stipendpay = (stipend == null) ? 'No' : 'Yes';
                        form.application_method = (application_link == null) ? '1' : '0';
                        form.application_link = application_link;
                        form.title = title;
                        form.stipend = stipend;
                        form.currency = currency;
                        form.type = type;
                        form.level = level;
                        form.about_role = about_role;
                        form.responsibilities = responsibilities;
                        form.requirements = requirements;
                        form.benefits = benefits;
                        form.location = location;
                        form.deadline = deadline;
                        form.active = active;
                        is_job_loading.value = false;
                        // toast.success("Job Deleted Successfully!");
                    }
                }).catch(e=>{
                    is_delete_loading.value = false;
                    // toast.error(e.response.data.message);
                    toast.error("Job does not exist!");
                    router.push({name: 'Jobs'});
                })
            }

            onMounted(() =>{
                // on Mounted here
                showJobDetails();
            })

            return{
                form, updateJob,
                is_loading,showJobDetails, is_job_loading,
                // moment: moment
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

    </style>