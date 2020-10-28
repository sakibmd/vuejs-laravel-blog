require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import { routes } from './routes';


Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);



const router = new VueRouter({
  routes, 
  mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});
