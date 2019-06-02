
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router'
Vue.use(VueRouter)

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
