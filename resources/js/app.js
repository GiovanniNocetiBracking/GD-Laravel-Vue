import Vue from 'vue'
import router from './router'

require('./bootstrap');

window.Vue = require('vue');



const app = new Vue({
    el: '#app',
    router,
    
});
