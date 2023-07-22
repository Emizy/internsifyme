<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Post a Job</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Post a Job</span></li>
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
                    <h5 class="icon-edu">Tell us about your role</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <form @submit.prevent="createJob">
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
                                <option value="Remote & Onsite">Remote & Onsite</option>
                                
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
                          <div class="col-lg-12"> 
                            <div class="form-group mt-10">
                              <button class="btn btn-default btn-brand icon-tick" :disabled="is_loading">
                                <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                <span v-else>Post New Job</span>
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
            });
   
            const createJob = async() =>{
                is_loading.value = true;

                await axios.post('/api/jobs/', form).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        Object.keys(form).forEach(v => form[v] = "");
                        toast.success(res.data.message);
                        // redirect to job list
                        router.push({name: 'Jobs'});
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                })
            }
            
            onMounted(() =>{
                // on Mounted here
            })

            return{
                form,
                createJob,
                is_loading
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