require('./bootstrap');

window.Vue = require('vue');


Vue.component('dashboard', require('./components/DashboardComponent.vue').default);
Vue.component('user', require('./components/UserComponent.vue').default);
Vue.component('sidebar', require('./components/SidebarComponent.vue').default);


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

 const router = new VueRouter({
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
     
        
    ],
}); 

const app = new Vue({
    el: '#app',
    router,
    data: {
        menu:0
    }
});
