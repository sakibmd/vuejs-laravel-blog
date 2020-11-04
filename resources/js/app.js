require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import { routes } from './routes';


Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

//form
window.Form = Form;
import { Form, HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


const router = new VueRouter({
  routes,   //routes js e const er jei nam dei. Etai sheita. Same name dite hobe
  mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});
