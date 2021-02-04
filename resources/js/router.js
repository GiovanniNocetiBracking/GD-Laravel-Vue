
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


Vue.component('welcome', require('./components/pages/WelcomeComponent.vue').default);
Vue.component('About', require('./components/pages/AboutComponent.vue').default);
Vue.component('Gasdetect', require('./components/pages/GasDetectComponent.vue').default);



export default new VueRouter({
    mode: 'history',
    routes: [
        
         
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



