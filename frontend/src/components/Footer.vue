<template>
    <footer class="footer mt-20">
          <div class="container">
            <div class="box-footer">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                  <p class="font-sm color-text-paragraph-2">&copy; {{ year }} - InternsifyMe <span> by  </span><a class="color-brand-2" href="http://schoolsif.com" target="_blank"> Schoolsify</a></p>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                  <ul class="menu-footer">
                    <li><a target="_blank" href="/about-us">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a target="_blank" href="/privacy-policy">Policy</a></li>
                    <li><a href="mailto: internsifyme@schoolsify.com">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
</template>
<script>
    import { reactive,ref, onMounted } from 'vue';
    import { useRouter } from "vue-router";

        // js reference
  //  import "../../../resources/dashboard/js/vendor/modernizr-3.6.0.min.js";
  //  import "../../../resources/dashboard/js/vendor/jquery-3.6.0.min.js";
  //  import "../../../resources/dashboard/js/vendor/jquery-migrate-3.3.0.min.js";
  //  import "../../../resources/dashboard/js/vendor/bootstrap.bundle.min.js";
  //  import "../../../resources/dashboard/js/plugins/waypoints.js";
  //  import "../../../resources/dashboard/js/plugins/magnific-popup.js";
  //  import "../../../resources/dashboard/js/plugins/perfect-scrollbar.min.js";
  //  import "../../../resources/dashboard/js/plugins/select2.min.js";
  //  import "../../../resources/dashboard/js/plugins/swiper-bundle.min.js";
  //  import "../../../resources/dashboard/js/plugins/jquery.circliful.js";
  //  import "../../../resources/dashboard/js/main.js";

    export default{
        setup(){
            
           let year = ref('');

           onMounted(() =>{
              year.value = new Date().getFullYear();
            })

            return{
              year
            }
        },

    }
</script>


<style scoped>
   @import "@/assets/dashboard/css/style.css";


</style>