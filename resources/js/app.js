import Vue from 'vue'
import router from './router'
import VueToast from 'vue-toast-notification';
import Toasted from 'vue-toasted';
import Vuelidate from 'vuelidate';


Vue.use(Vuelidate);
Vue.use(VueToast);
Vue.use(Toasted);

require('./bootstrap');

window.Vue = require('vue');



const app = new Vue({
    el: '#app',
    router,
    
});
