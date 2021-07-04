require('./bootstrap');
import "datatables/media/js/jquery.dataTables"
import $ from 'jquery';
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueAxios, axios);
import VeeValidate from 'vee-validate';

 
Vue.use(VueRouter);





import router from './routes.js';

import App from './App.vue'

Vue.config.productionTip = false;
Vue.use(VeeValidate)
window.eventBus = new Vue();

const app = new Vue({
  el: '#app',
  router,
  render: h =>h(App)
})