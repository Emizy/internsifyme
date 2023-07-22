<template>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <h2 class="mt-10 mb-5 text-brand-1">Forget Password</h2>
                <p class="font-sm text-muted mb-30">Recover your <span class="font-sm text-brand-2">InternsifyMe</span> password</p>
              </div>
              <div class="alert alert-success" role="alert" v-if="is_success">
                {{ message }}
              </div>

              <div class="alert alert-danger" role="alert" v-if="errors.length != 0">
                 {{ errors }}
              </div>
           
              <form class="login-register text-start mt-20" @submit.prevent="forgetpassword">
                <div class="form-group">
                  <label class="form-label" for="input-3">Email address *</label>
                  <input class="form-control" id="input-3" type="email" name="email" placeholder="Email Address" v-model="form.email"  required>
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" :disabled="is_loading" type="submit" name="login">
                    <span v-if="is_loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span v-else>Send Reset Instructions</span>
                </button>
                     
                    
                </div>
                <div class="text-muted text-center">Remember your password? <router-link class="font-sm text-brand-2" :to="{ name: 'Login'}"><b> Login</b></router-link> </div>
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
    import axios from 'axios';
    // import { useStore } from 'vuex'

    export default{
        setup(){
            const router = useRouter()
       
            let form = reactive({
                email: '',
            });
            let errors = ref([])
            const is_loading = ref(false);
            const is_success = ref(false);
            let message = ref('');

            const forgetpassword = async() =>{
                is_loading.value = true;
                await axios.post('/api/resetpasswordrequest/',form).then( res=>{
                    if(res.data.success){
                        is_loading.value = false;
                        is_success.value = true;
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                        message.value = res.data.message;
                        Object.keys(form).forEach(v => form[v] = "");
                    }
                }).catch(e=>{
                    is_loading.value = false;
                    document.body.scrollTop = document.documentElement.scrollTop = 0;
                    errors.value = e.response.data.message;
                })
            }
            return{
                form,
                forgetpassword,
                errors,
                is_loading,
                is_success,message
            }
            
        }
    }
</script>

<style scoped>
 

    
</style>