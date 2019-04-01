import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import routes from './routes';
import _ from 'lodash';

require('./bootstrap');

Vue.use(VueRouter);

Vue.component('HomeComponent', require('./components/Home.vue').default);
Vue.component('VideoComponent', require('./components/Videos.vue').default);
Vue.component('CategoryComponent', require('./components/Categories.vue').default);
Vue.component('Category', require('./components/Category.vue').default);
Vue.component('VideoIndexed', require('./components/Video.vue').default);
Vue.component('CourseComponent', require('./components/Course.vue').default);
Vue.component('CourseIndex', require('./components/Courses.vue').default);
Vue.component('Payment-Component', require('./components/Payment.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
