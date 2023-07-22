<template>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="text-center">
                <p class="font-sm text-brand-2">Welcome Back! </p>
                <h2 class="mt-10 mb-5 text-brand-1">Login</h2>
                <p class="font-sm text-muted mb-30">Login to  <span class="font-sm text-brand-2">InternsifyMe</span></p>
              </div>
              <div class="alert alert-danger" role="alert" v-if="errors.length != 0">
                 {{ errors }}
              </div>
           
              <form class="login-register text-start mt-20" @submit.prevent="login">
                <div class="form-group">
                  <label class="form-label" for="input-3">Email address *</label>
                  <input class="form-control" id="input-3" type="email" name="email" placeholder="Email Address" v-model="form.email"  required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">Password *</label>
                  <input class="form-control" id="input-4" type="password" name="password" placeholder="************" v-model="form.password" required>
                </div>
				<div class="login_footer form-group d-flex justify-content-between">
                  <label class="cb-container">
                  </label> <router-link class="font-sm text-brand-2" :to="{ name: 'forgetPassword'}"><b> Forgot Password</b></router-link> 
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" :disabled="is_loading || form.password.length < 8" type="submit" name="login">
                    <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span v-else>Login</span>
                </button>
                     
                    
                </div>
                <div class="text-muted text-center">Don't have an Account? <router-link class="font-sm text-brand-2" :to="{ name: 'Register'}"><b> Register</b></router-link> </div>
              </form>
            </div>
          </div><br/><br/>
        </div>
      </section>
    </main>
</template>
<script>
    import { reactive,ref, onMounted } from 'vue';
    import { useRouter, useRoute } from "vue-router";
    import { useToast } from "vue-toastification";
    import axios from 'axios';
    

    export default{
        setup(){
            const router = useRouter();
            // Get toast interface
            const toast = useToast();
            const route = useRoute();
            const { params } = route;

            let form = reactive({
                email: '',
                password: '',
            });
            let errors = ref([]);
            const is_loading = ref(false);
            

            const login = async() =>{
                is_loading.value = true;
                await axios.post('/api/login',form).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                        Object.keys(form).forEach(v => form[v] = "");
                        localStorage.setItem('token', res.data.data.token);
                        localStorage.setItem('user', JSON.stringify(res.data.data.user));
                        toast.success("Successfully loggedin!");
                        // check user type to know where to redirect
                        if(JSON.stringify(res.data.data.user.user_type) == 0){
                          // check user profile if intern profile is created
                          if (JSON.stringify(res.data.data.user.profile_created) == 0){
                                router.push({name: 'CreateInternProfile'});
                              }else{
                                router.push({name: 'dashboardIntern'});
                              }
                          }else if(JSON.stringify(res.data.data.user.user_type) == 1){
                              // check user profile if created to know where to redirect
                              if (JSON.stringify(res.data.data.user.profile_created) == 0){
                                router.push({name: 'AddCompany'});
                              }else{
                                router.push({name: 'dashboardRecruiter'});
                              }
                        }
                      
                    }
                }).catch(e=>{
                  is_loading.value = false;
                  if (e.response && 419 === e.response.status) {
                      toast.error("Please, kindly re-login!");
                      window.location.reload()
                  }else{
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    toast.error(e.response.data.message);
                  }
                    
                })
            }
            onMounted(() =>{
                
                if (route.query.emailverify == 1) {
                  toast.success("Your e-mail is verified. You can now login!");
                } else if (route.query.emailverify == 0) {
                  toast.info("Your e-mail is already verified. You can now login!");
                } else if(route.query.emailverify == 2) {
                  toast.error("Your e-mail is not verified, kindly create new account");
                }
            })
            return{
                form,
                login,
                errors,
                is_loading,
                toast
            }
            
        },
    }
</script>

<style scoped>
 
</style>