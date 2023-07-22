<template>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="text-center">
                <p class="font-sm text-brand-2">Welcome! </p>
                <h2 class="mt-10 mb-5 text-brand-1">Register</h2>
                <p class="font-sm text-muted mb-30">Join <span class="font-sm text-brand-2">InternsifyMe</span> as an Intern</p>
              </div>
              <div class="alert alert-success" role="alert" v-if="is_success">
                Successfully Registered, email verification mail has been sent to you, kindly confirm your mail and login.<hr/>
                                            If you don’t see an email from us within 5 minutes, one of these things could
                                                have happened:<br/><br/>
                                            
                                                - The email might be in your spam folder. (If you use Gmail, please check
                                                    your Promotions folder as well.)<br/>
                                                    
                                             - The email address you entered had a typo.<br/>
                                                    
                                                - You accidentally entered another email address. (Usually happens with
                                                    auto-complete.)<br/>
                                                - We can’t deliver the email to this address. (Usually because of
                                                    corporate firewalls or filtering).
              </div>

              <div class="alert alert-danger" role="alert" v-if="errors.length != 0">
                 {{ errors }}
              </div>
           
              <form class="login-register text-start mt-20" @submit.prevent="register">
                <input type="hidden" id="user_type" name="user_type" v-model="form.user_type">
				<div class="form-group">
					<label class="form-label" for="input-1">Firstname *</label>
					<input class="form-control" id="input-1" type="text" name="firstname" placeholder="Firstname" v-model="form.firstname" required>
				 </div>
				 <div class="form-group">
					<label class="form-label" for="input-2">Lastname *</label>
					<input class="form-control" id="input-2" type="text" name="lastname" placeholder="Lastname" v-model="form.lastname" required>
				 </div>
                <div class="form-group">
                  <label class="form-label" for="input-3">Email address *</label>
                  <input class="form-control" id="input-3" type="email" name="email" placeholder="Email Address" v-model="form.email"  required>
                </div>
				<div class="form-group">
                  <label class="form-label" for="input-5">Phone Number *</label>
                  <input class="form-control" id="input-5" type="text" name="phone_no" placeholder="Phone Number" v-model="form.phone_no" maxlength="11" required>
                  
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">Password *</label>
                  <input class="form-control" id="input-4" type="password" name="password" placeholder="************" v-model="form.password" required>
                  <div style="color:red;padding-top: 5px;" v-if="form.password.length != 0 && form.password.length < 8"> Your password lenght should be greater than or equal to 8</div>
                </div>
				<div class="login_footer form-group d-flex justify-content-between">
                    <label>
                     <span class="text-muted text-center"> Creating an account means you are okay with our <a class="font-sm text-brand-2" href="#"><b>Terms Of Service</b></a> and <a class="font-sm text-brand-2" href="#"><b>Privacy Policy</b></a></span>
                    </label>
              </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" :disabled="is_loading || form.password.length < 8" type="submit" name="login">
                    <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span v-else>Register</span>
                </button>
                     
                    
                </div>
                <div class="text-muted text-center">Have an Account already? <router-link class="font-sm text-brand-2" :to="{ name: 'Login'}"><b> Login</b></router-link> </div>
              </form>
            </div>
          </div><br/><br/>
        </div>
      </section>
    </main>
</template>
<script>
    import { reactive,ref } from 'vue'
    import { useRouter } from "vue-router"
    import { useToast } from "vue-toastification";
    import axios from 'axios';
    // import { useStore } from 'vuex'

    export default{
        setup(){
            const router = useRouter()
            const toast = useToast();

            let form = reactive({
                firstname :'',
                lastname :'',
                phone_no :'',
                email: '',
                password: '',
                user_type: 0,
            });
            let errors = ref([])
            const is_loading = ref(false);
            const is_success = ref(false);

            const register = async() =>{
                is_loading.value = true;
                await axios.post('/api/register/',form).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        is_success.value = true;
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                        Object.keys(form).forEach(v => form[v] = "");
                        toast.success("Successfully Registered!");
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    errors.value = e.response.data.message;
                })
            }
            return{
                form,
                register,
                errors,
                is_loading,
                is_success,
                toast
            }
            
        }
    }
</script>

<style scoped>

    
</style>