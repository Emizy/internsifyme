<template>
  <div>
    <header class="header sticky-bar"> 
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><router-link class="d-flex" :to="{ name: 'dashboardRecruiter'}"><img alt="InternsifyMe" src="@/assets/imgs/internsify-logo.svg"></router-link></div>
            <span v-if="( user.user_id  == 1)" class="btn btn-grey-small ml-10"> Recruiter</span>
            <span v-else-if="( user.user_id == 0)" class="btn btn-grey-small ml-10">Intern</span>
          </div>
        
          <div class="header-right">
  
            <div class="block-signin">
              <router-link v-if="( user.user_id  == 1)" class="btn btn-default-header icon-edit hover-up" :to="{ name: 'CreateJob'}" style="margin-right:20px;">Post a Job</router-link>
               <a v-else-if="( user.user_id == 0)"  class="btn btn-default-header hover-up" :href="'/@' + user.username" target="_blank" style="margin-right:20px;"><svg style="margin-right:8px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg>  View Profile </a>
            
              <div class="member-login">
                <img alt="" :src="user.avatar">
                <div class="info-member">
                  <div class="dropdown"><a class="font-xs color-text-paragraph-2" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"> <strong class="color-brand-1 icon-down" style="margin-top: 10px; text-transform: capitalize;">{{ user?.firstname }} {{ user?.lastname }}  </strong></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                      <li><router-link class="dropdown-item" :to="{ name: 'ProfileSettings'}">Profile Settings</router-link></li>
                      <li><router-link class="dropdown-item" :to="{ name: 'ChangePassword'}">Change Password</router-link></li>
                      <li><button class="dropdown-item" @click="logout">Logout</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="burger-icon burger-icon-white" v-if="!show_burger_menu" @click="showMenu"><span class="burger-icon-top" ></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
    <div class="burger-icon burger-icon-white burger-close" v-else @click="closeMenu">
      <span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span>
    </div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar sidebar-visible" v-if="show_burger_menu">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav v-if="( user.user_id  == 1)">
                <ul class="main-menu">
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'dashboardRecruiter'}" :to="{ name: 'dashboardRecruiter'}"><img src="@/assets/imgs/icons/dashboard.svg" alt="ic"><span class="name">Dashboard</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'Jobs'}" :to="{ name: 'Jobs'}"><img src="@/assets/imgs/icons/jobs.svg" alt="ic"><span class="name">Jobs</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'InternsList'}" :to="{ name: 'InternsList'}"><img src="@/assets/imgs/icons/candidates.svg" alt="ic"><span class="name">Interns</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'CompanyProfile'}" :to="{ name: 'CompanyProfile'}"><img src="@/assets/imgs/icons/cv-manage.svg" alt="ic"><span class="name">Company</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :to="{ name: 'Login'}" @click="logout"><img src="@/assets/imgs/icons/logout.svg" alt="ic"><span class="name">Logout</span></router-link>
                 </li>
                </ul>
              </nav>
              <nav v-else-if="( user.user_id == 0)">
                <ul class="main-menu">
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'dashboardIntern'}" :to="{ name: 'dashboardIntern'}"><img src="@/assets/imgs/icons/dashboard.svg" alt="ic"><span class="name">Dashboard</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'InternJobs'}" :to="{ name: 'InternJobs'}"><img src="@/assets/imgs/icons/jobs.svg" alt="ic"><span class="name">Jobs</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'Recruiters'}" :to="{ name: 'Recruiters'}"><img src="@/assets/imgs/icons/recruiters.svg" alt="ic"><span class="name">Recruiters</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'Courses'}" :to="{ name: 'Courses'}"><img src="@/assets/imgs/icons/courses.svg" alt="ic"><span class="name">Courses</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :class="{'active': route.name === 'InternProfile'}" :to="{ name: 'InternProfile'}"><img src="@/assets/imgs/icons/profiles.svg" alt="ic"><span class="name">My Profile</span></router-link>
                  </li>
                  <li> <router-link class="dashboard2" :to="{ name: 'Login'}" @click="logout"><img src="@/assets/imgs/icons/logout.svg" alt="ic"><span class="name">Logout</span></router-link>
                 </li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <h6 class="mb-10">Your Account</h6>
              <ul class="mobile-menu font-heading">
                <li><router-link class="dropdown-item" :to="{ name: 'ProfileSettings'}">Profile Settings</router-link></li>
                <li><router-link class="dropdown-item" :to="{ name: 'ChangePassword'}">Change Password</router-link></li>
                <li><a class="dropdown-item" @click="logout">Log Out</a></li>
              </ul>
              <div v-if="( user.user_id  == 1)" class="mb-15 mt-15"> <router-link class="btn btn-default hover-up" :to="{ name: 'CreateJob'}">Post a Job</router-link></div>
              <div v-else-if="( user.user_id == 0)" class="mb-15 mt-15"> <a class="btn btn-default hover-up" :href="'/@' + user.username" target="_blank">View Profile</a></div>
            </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    import { reactive,ref, onMounted } from 'vue';
    import { useRouter, useRoute} from "vue-router";
    import axios from 'axios';

    export default{
        setup(){
            const router = useRouter();
            const route = useRoute();
            const image_path = ref('')
            const show_burger_menu = ref(false);

            
           
            let user = reactive({
                user_id: '',
                firstname: '',
                lastname: '',
                username: '',
                avatar: '',
            });


            function showMenu() {
              console.log('LOOK KKK');
              show_burger_menu.value = true
            }
            function closeMenu() {
              console.log('I HAVE VCLOSEK');
              show_burger_menu.value = false
            }

         

            const logout = async() =>{
                await axios.post('/api/logout/').then( res=>{
                    if(res.data.success){
                        localStorage.clear();
                        router.push({name: 'Login'});
                    }
                }).catch(e=>{
                    localStorage.clear();
                    console.log(e.response.data.message);
                })
            }
            onMounted(() =>{
                user.user_id = JSON.parse(localStorage.getItem('user')).user_type;
                user.firstname = JSON.parse(localStorage.getItem('user')).firstname;
                user.lastname = JSON.parse(localStorage.getItem('user')).lastname;
                user.username = JSON.parse(localStorage.getItem('user')).username;
                user.avatar = JSON.parse(localStorage.getItem('user')).avatar;
            })
            return{
                logout,route,
                user,image_path, show_burger_menu, showMenu,
                closeMenu
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