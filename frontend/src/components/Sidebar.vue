<template>
      <div v-if="( user.user_id  == 1)" class="nav">
        <a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
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
      </div>
      <!-- If Intern -->
      <div v-else-if="( user.user_id == 0)" class="nav">
        <a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
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
        <div class="border-bottom mb-0 mt-0"></div>
        <div id="circle-staticstic-demo" class="svg-container"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 194 186" class="circliful">undefined<circle cx="100" cy="100" r="57" class="border" fill="#d8e0fd" stroke="#d8e0fd" stroke-width="10" stroke-dasharray="360" transform="rotate(-90,100,100)"></circle>
          <circle class="circle" cx="100" cy="100" r="57" fill="none" stroke="#3498DB" stroke-width="10" :stroke-dasharray="stroke_value.concat(', 20000')" transform="rotate(-90,100,100)"></circle><circle cx="100" cy="100" r="28.5" fill="none"></circle>undefined<text class="timer" text-anchor="middle" x="100" y="100" style="font-size: 20px; undefined;font-size: 24px;font-weight: bolder;" fill="#05264E"><tspan class="number">{{user_profile_lenght}}</tspan><tspan class="percent">%</tspan></text></svg></div>
        <div class="box-profile-completed text-center mb-30">
          <div id="circle-staticstic-demo"></div>
          <h6 class="mb-10">Profile Completed</h6>
          <p class="font-xs color-text-mutted">Your profile gives you chances of being discovered by potential recruiters, update often.</p>
        </div>
      </div>
</template>

<script>
    import { reactive,ref, onMounted } from 'vue';
    import { useRouter, useRoute } from "vue-router";
    import axios from 'axios';



export default{
    setup(){
        const router = useRouter();
        const route = useRoute();

        let user_profile_lenght = ref(0);
        let stroke_value = ref('');

        let user = reactive({
                user_id: '',
                firstname: '',
                lastname: '',
                avatar: '',
        });

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
                user.avatar = JSON.parse(localStorage.getItem('user')).avatar;
                
                // get user profile lenght here
                if(user.user_id == 0){
                  axios.get('/api/userprofilelength/').then( res=>{
                    if(res.data.success){
                      user_profile_lenght.value = res.data.data.profile_lenght;

                      // get the css stroke value here
                      stroke_value.value = ((359/100) *  user_profile_lenght.value).toString();
                    }
                  }).catch(e=>{
                      e.response.message;
                  })
                }
                
              
            })

        return{
            logout,route,user_profile_lenght,user,stroke_value
        }
        }

}
</script>


<style scoped>
  @import "@/assets/dashboard/css/style.css";


</style>