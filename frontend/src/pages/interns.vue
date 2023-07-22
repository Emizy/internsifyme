<template>
    <body>   
        <Header></Header>
        <main class="main">
          <Sidebar></Sidebar>
          <div class="box-content">
            <div class="box-heading">
              <div class="box-title"> 
                <h3 class="mb-35">Interns</h3>
              </div>
              <div class="box-breadcrumb"> 
                <div class="breadcrumbs">
                  <ul> 
                    <li> <router-link class="icon-home" :to="{ name: 'dashboardRecruiter'}"> Dashboard </router-link></li>
                    <li><span>Interns</span></li>
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
                            <div class="box-view-type"><a class="view-type" href="my-job-list.html"><img src="assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="my-job-grid.html"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div v-if="is_loading" class="row justify-content-center align-items-center">
                        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
                    </div>
                    <div v-if="(interns.length == 0)" class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="box-upload d-flex align-items-center justify-content-center">
                                <img src="@/assets/imgs/icons/candidates.svg" alt="ic">
                                <span style="color: #66789c; margin-left:15px;"> No interns yet! </span>
                            </div>
                        </div>
                    </div>
                    <div v-else class="row display-list" >
                        <div class="col-xl-4 col-lg-4 col-md-6" v-for="intern in interns" :key="intern.id">
                          
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left">
                            <div class="card-grid-2-image-rd online"><router-link target="_blank" :to="{ path: '/@'+intern.user.username}">
                                <figure><img alt="user" :src="intern.user.avatar"></figure></router-link></div>
                            <div class="card-profile pt-10"><router-link target="_blank" :to="{ path: '/@'+intern.user.username}">
                                <h5 style="text-transform: capitalize;">{{intern.user.firstname}} {{ intern.user.lastname }}</h5></router-link><span class="font-xs color-text-mutted">{{ intern.title }}</span>
                             </div>
                          </div>
                          <div class="card-block-info">
                            <p class="font-xs color-text-paragraph-2">
                              {{ (intern.bio.length >= 125) ? intern.bio.substring(0,125).concat(' ...') : intern.bio }}
                            </p>
                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                              <div class="text-start">
                                <span v-for="skill in intern.skills" :key="skill.id">
                                  <a class="btn btn-tags-sm mb-10 mr-5" href="#">{{skill.name}}</a>
                                </span>
                                
                              </div>
                            </div>
                            <div class="employers-info align-items-center justify-content-center mt-15">
                              <div class="row">
                                <div class="col-6" v-if="((intern.user.city && intern.user.state) !== null)"><span class="d-flex align-items-center">
                                  <svg style="margin-right: 8px;color:#A0ABB8;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                                  <span class="font-sm color-text-mutted">{{intern.user.city}}, {{intern.user.state}}</span></span></div>
                                <div class="col-6">
                                  <span class="d-flex justify-content-end align-items-center"><svg style="margin-right: 8px;color: #A0ABB8;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                                   <span v-if="(intern.available == 1)" class="font-sm color-brand-1" style="color:green !important;">Available</span>
                                   <span v-else class="font-sm color-brand-1" style="color:#a80404 !important;">Not Available</span>
                                </span>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="paginations text-center">
                      <a v-if="(interns.length >= 30)" href="/find-interns" class="btn btn-default  hover-up" >Show More</a>
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
          
            let users = ref({});
            let interns = ref({});
            // let users = ref({});

            let user_avatar = ref('');
            const is_loading = ref(true);
         
            onMounted(() =>{
                // on Mounted here
                axios.get('/api/fetchallinternsrandomly/').then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        interns.value = res.data.data.interns.slice(0,30);
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    toast.error(e.response.data.message);
                    localStorage.clear();
                    router.push({name: 'Home'});
                })
            })

            function capitalizeFirstLetter(string) {
              return string.charAt(0).toUpperCase() + string.slice(1);
            }

            return{
                interns,user_avatar,is_loading, users, capitalizeFirstLetter
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
    i {
                font-family: "Font Awesome 6 Free" !important;
            }

</style>