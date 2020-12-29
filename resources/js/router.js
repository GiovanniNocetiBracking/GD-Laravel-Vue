
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('dashboard', require('./components/DashboardComponent.vue').default);
Vue.component('user', require('./components/UserComponent.vue').default);
Vue.component('sidebar', require('./components/SidebarComponent.vue').default);
Vue.component('welcome', require('./components/WelcomeComponent.vue').default);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: require('./components/DashboardComponent').default
        },  
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
            component: require('./components/WelcomeComponent').default
        } 
        
     
        
    ],
}); 


