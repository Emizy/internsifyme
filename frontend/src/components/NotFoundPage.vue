<template>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <img alt="InternsifyMe" src="@/assets/imgs/undraw_page_not_found_re_e9o6.svg">
                <p class="font-sm text-brand-2">404 Error. </p>
                <h2 class="mt-10 mb-5 text-brand-1">Page not found!</h2>
                <p class="font-sm text-muted mb-30">Retun to  <router-link class="font-sm text-brand-2" :to="{ name: 'Login'}"><b> <span class="font-sm text-brand-2">Login</span></b></router-link></p>
              </div>
            
            </div>
          </div><br/><br/>
        </div>
      </section>
    </main>
</template>

<style scoped>
    /* @import "../../../resources/css/style.css"; */

    
</style>