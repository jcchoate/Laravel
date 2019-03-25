import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import routes from './routes'

Vue.use(VueRouter);


Vue.component('HomeComponent', require('./components/Home.vue').default);
Vue.component('VideoComponent', require('./components/Videos.vue').default);
Vue.component('CategoryComponent', require('./components/Categories.vue').default);
Vue.component('Category', require('./components/Category.vue').default);
Vue.component('VideoIndexed', require('./components/Video.vue').default)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',


    router: new VueRouter(routes)
});
