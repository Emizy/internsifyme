import { createWebHistory, createRouter } from "vue-router";

import login from './pages/login.vue';
import home from './pages/home.vue';
import register from './pages/register.vue';
import forgetPassword from './pages/forget-password.vue';
import registerIntern from './pages/register-intern.vue';
import registerRecruiter from './pages/register-recruiter.vue';
import dashboardIntern from './pages/dashboard-intern.vue';
import dashboardRecruiter from './pages/dashboard-recruiter.vue';
import AddCompany from './pages/create-company.vue';
import ChangePassword from './pages/change-password.vue';
import ProfileSettings from './pages/profile-settings.vue';
import CompanyProfile from './pages/company-profile.vue';
import CreateJob from './pages/create-job.vue';
import Jobs from './pages/jobs.vue';
import RecruiterJobDetails from './pages/recruiter-job-detail.vue';
import InternsList from './pages/interns.vue';
import CreateInternProfile from './pages/create-profile.vue';
import InternProfile from './pages/intern-profile.vue';
import Courses from './pages/courses.vue';
import InternJobs from './pages/jobs-intern.vue';
import Recruiters from './pages/recruiters.vue';
import EditJob from './pages/edit-job.vue';
import NotFoundPage  from './components/NotFoundPage.vue';




const routes = [
    {
        path: '/',
        name: 'Home',
        meta: { title: 'Join InternsifyMe' , requiresAuth: false },
        meta: { title: 'Home' },
        component: home
    },
    {
        path: '/login',
        name: 'Login',
        meta: { title: 'Login - InternsifyMe' , requiresAuth: false },
        component: login,
    }, 
    {
        path: '/register',
        name: 'Register',
        meta: { title: 'Register - InternsifyMe' },
        component: register,
    },
    {
        path: '/forget-password',
        name: 'forgetPassword',
        meta: { title: 'Forget Password - InternsifyMe', requiresAuth: false },
        component: forgetPassword,
    },
    {
        path: '/register-intern',
        name: 'registerIntern',
        meta: { title: 'Register as Intern - InternsifyMe' , requiresAuth: false},
        component: registerIntern,
    },
    {
        path: '/register-recruiter',
        name: 'registerRecruiter',
        meta: { title: 'Register as Recruiter - InternsifyMe', requiresAuth: false },
        component: registerRecruiter,
    },
    {
        path: '/intern/dashboard',
        name: 'dashboardIntern',
        meta: { title: 'Intern Dashboard', requiresAuth: true },
        component: dashboardIntern,
    },
    {
        path: '/recruiter/dashboard',
        name: 'dashboardRecruiter',
        meta: { title: 'Recruiter Dashboard', requiresAuth: true },
        component: dashboardRecruiter,
    },
    {
        path: '/recruiter/add-company',
        name: 'AddCompany',
        meta: { title: 'Add your Company - Dashboard', requiresAuth: true  },
        component: AddCompany,
    },
    {
        path: '/dashboard/change-password',
        name: 'ChangePassword',
        meta: { title: 'Change Password', requiresAuth: true  },
        component: ChangePassword,
    },
    {
        path: '/dashboard/profile-settings',
        name: 'ProfileSettings',
        meta: { title: 'Profile Settings', requiresAuth: true  },
        component: ProfileSettings,
    },
    {
        path: '/recruiter/company-profile', 
        name: 'CompanyProfile',
        meta: { title: 'Company Profile Settings', requiresAuth: true  },
        component: CompanyProfile,
    },
    {
        path: '/recruiter/create-job', 
        name: 'CreateJob',
        meta: { title: 'Create Job', requiresAuth: true  },
        component: CreateJob,
    },
    {
        path: '/recruiter/jobs',
        name: 'Jobs',
        meta: { title: 'Jobs', requiresAuth: true  },
        component: Jobs,
    },
    {
        path: '/recruiter/jobdetails/:id',
        name: 'RecruiterJobDetails',
        meta: { title: 'Job Details', requiresAuth: true  },
        component: RecruiterJobDetails,
    },
    {
        path: '/recruiter/editjob/:id',
        name: 'EditJob',
        meta: { title: 'Edit Job', requiresAuth: true  },
        component: EditJob,
    },
    {
        path: '/recruiter/interns',
        name: 'InternsList',
        meta: { title: 'Interns Lists', requiresAuth: true  },
        component: InternsList,
    },
    {
        path: '/intern/create-profile',
        name: 'CreateInternProfile',
        meta: { title: 'Create Intern Profile', requiresAuth: true  },
        component: CreateInternProfile,
    },
    {
        path: '/intern/profile',
        name: 'InternProfile',
        meta: { title: 'My Profile', requiresAuth: true  },
        component: InternProfile,
    },
    {
        path: '/intern/courses',
        name: 'Courses',
        meta: { title: 'Courses', requiresAuth: true  },
        component: Courses,
    },
    {
        path: '/intern/jobs',
        name: 'InternJobs',
        meta: { title: 'Jobs', requiresAuth: true  },
        component: InternJobs,
    },
    {
        path: '/intern/recruiters',
        name: 'Recruiters',
        meta: { title: 'Recruiters', requiresAuth: true  },
        component: Recruiters,
    },
    {
        path: "/:catchAll(.*)",
        name: "NotFound",
        meta: { title: '404 Error :: Page not found' },
        component: NotFoundPage,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});


router.beforeEach((to, from) => {
    document.title = to.meta.title;
    if(to.meta.requiresAuth && !localStorage.getItem('token')){
        return { name: 'Login'}
    }
    if(to.meta.requiresAuth == false && localStorage.getItem('token')){
        return { name: 'dashboardIntern'}
    }
})

export default router;