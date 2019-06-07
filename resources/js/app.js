
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform'

import Swal from 'sweetalert2'
window.Swal = Swal;

const toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

window.toast = toast;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
  color: 'rgb(255,0,0)',
  failedColor: 'red',
  height: '3px'
})

Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('myDate', function(created){
   return moment().format('MMMM Do YYYY, h:mm:ss a');
});

window.Fire = new Vue();


let routes = [
  { path: '/admin', component: require('./components/Admin.vue')},
  { path: '/miperfil', component: require('./components/Miperfil.vue')},
  { path: '/miportafolio', component: require('./components/MiPortafolio.vue')},
  { path: '/habilidades', component: require('./components/Habilidades.vue')},
  { path: '/acercademi', component: require('./components/Acercademi.vue')},
  { path: '/certificaciones', component: require('./components/Certificaciones.vue')},
]

const router = new VueRouter({
  mode: 'history',	
  routes // short for `routes: routes`
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));


const app = new Vue({
    el: '#app',
	router
});
