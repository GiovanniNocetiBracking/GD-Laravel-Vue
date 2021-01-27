
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('dashboard', require('./components/DashboardComponent.vue').default);
Vue.component('user', require('./components/UserComponent.vue').default);
Vue.component('sidebar', require('./components/SidebarComponent.vue').default);
Vue.component('welcome', require('./components/pages/WelcomeComponent.vue').default);
Vue.component('About', require('./components/pages/AboutComponent.vue').default);
Vue.component('Gasdetect', require('./components/pages/GasDetectComponent.vue').default);



export default new VueRouter({
    mode: 'history',
    routes: [
        
        {
            path: '/dashboard',
            name: 'dashboard',
            component: require('./components/DashboardComponent').default
        }, 
        {
            path: '/user',
            name: 'user',
            component: require('./components/UserComponent').default
        },  
        {
            path: '/',
            name: 'welcome',
            component: require('./components/pages/WelcomeComponent').default
        } ,
        {
            path: '/about',
            name: 'about',
            component: require('./components/pages/AboutComponent').default
        }, 
         {
            path: '/product/gasdetect',
            name: 'gasdetect',
            component: require('./components/pages/GasDetectComponent').default
        }, 
        
     
        
    ],
});



