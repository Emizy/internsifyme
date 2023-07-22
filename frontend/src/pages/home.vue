<template>
    <main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <h2 class="mt-10 mb-5 text-brand-1">Join InternsifyMe</h2>
                <p class="font-sm text-muted mb-30">Choose the type of account you'd like to create</p>
              </div>
             
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-20">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-6 col-md-12 mb-15 mb-lg-0">
              <router-link class="font-sm text-brand-2" :to="{ name: 'registerIntern'}">
              <div class="box-radius-8 bg-urgent hover-up">
                <div class="image">
                  <figure><img src="@/assets/imgs/intern_svg.svg" alt="intern" height="120" width="120"></figure>
                </div>
                <div class="text-info">
                  <h3 style="margin-bottom: 12px;">Intern</h3>
                  <p class="font-sm color-text-paragraph-2">I want acquire digital skills and able to apply for internship position.</p>
                  
                </div>
              </div>
            </router-link>
            </div>
            
            <div class="col-lg-6 col-md-12">
              <router-link class="font-sm text-brand-2" :to="{ name: 'registerRecruiter'}">
              <div class="box-radius-8 bg-9 hover-up">
                <div class="image">
                  <figure><img src="@/assets/imgs/recruiter_svg.svg" alt="Recruiter" height="120" width="120"></figure>
                </div>
                <div class="text-info">
                 
                  <h3 style="margin-bottom: 12px;">Recruiter</h3>
                  <p class="font-sm color-text-paragraph-2">I am a Recruiter,  I'd to hire interns for internship position in my orgarnisation. </p>
          
                </div>
              </div>
              </router-link>
            </div>
          </div>
        </div>
      </section>
    </main>
</template>

<style scoped>
    

    
</style>