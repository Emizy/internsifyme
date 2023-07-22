import { createApp } from 'vue'
import App from './layouts/App.vue'
import router from './router.js';
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";
import './assets/main.css'


import "@/assets/dashboard/js/vendor/modernizr-3.6.0.min.js";
import "@/assets/dashboard/js/vendor/jquery-3.6.0.min.js";
import "@/assets/dashboard/js/vendor/jquery-migrate-3.3.0.min.js";
import "@/assets/dashboard/js/vendor/bootstrap.bundle.min.js";
import "@/assets/dashboard/js/plugins/waypoints.js";
import "@/assets/dashboard/js/plugins/magnific-popup.js";
import "@/assets/dashboard/js/plugins/perfect-scrollbar.min.js";
import "@/assets/dashboard/js/plugins/select2.min.js";
import "@/assets/dashboard/js/plugins/swiper-bundle.min.js";
import "@/assets/dashboard/js/plugins/jquery.circliful.js";
import "./assets/dashboard/js/main.js";

import axios from 'axios';

axios.interceptors.request.use(
    config => {
        const token = localStorage.getItem('token');
        const auth = token ? `Bearer ${token}` : '';
        config.headers.Authorization = auth;
        // Development
      config.baseURL = 'http://127.0.0.1:8000';
        // Production
    //    config.baseURL = 'https://internsifyme.com';
        return config;
    },
    error => Promise.reject(error),
);

const app = createApp(App)
const options = {
    // You can set your default options here
};

app.use(router)
app.use(Toast, options)
app.mount("#app")