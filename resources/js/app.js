/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';
import _router from './src/router.js'


import App from './src/views/layouts/app.vue'
import Nav from './src/components/common/menu/v-nav.vue'
Vue.use(VueRouter)
const router = new VueRouter(_router)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('app', require('./src/views/layouts/app.vue').default)
Vue.component('v-nav', require('./src/components/common/menu/v-nav.vue').default)
// Vue.component('home', require('./components/home.vue').default)
Vue.component('blog-index', require('./src/views/pages/blog/blog-index.vue').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    components: {App},
    router,
});
