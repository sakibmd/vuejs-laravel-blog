require('./bootstrap');

window.Vue = require('vue');

// suppot editor
import 'v-markdown-editor/dist/v-markdown-editor.css';
import Editor from 'v-markdown-editor'
// global register
Vue.use(Editor);


//support moment js
import {
    filter
} from './filter'



// vuex
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"

const store = new Vuex.Store(
    storeData
)

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import {
    routes
} from './routes';


Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);
Vue.component('home-main', require('./components/public/PublicMaster.vue').default);

//form
import {
    Form,
    HasError,
    AlertError
} from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
window.Form = Form;

// sweet alert
import Swal from 'sweetalert2'
window.Swal = Swal;


const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 6000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})



window.Toast = Toast;

const router = new VueRouter({
    routes, //routes js e const er jei nam dei. Etai sheita. Same name dite hobe
    mode: 'hash'
})

const app = new Vue({
    el: '#app',
    router,
    store
});
