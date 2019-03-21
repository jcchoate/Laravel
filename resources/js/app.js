import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import routes from './routes'

Vue.use(VueRouter, axios)

Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('video-component', require('./components/Videos.vue'));
Vue.component('category-component', require('./components/Categories.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',


    router:new VueRouter(routes)
});