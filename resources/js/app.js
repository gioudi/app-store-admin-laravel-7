require('./bootstrap');
import "datatables/media/js/jquery.dataTables"
import $ from 'jquery';
import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import moment from 'moment';
import VueMoment from 'vue-moment';


require('moment/locale/es');


moment.locale('es')


Vue.use(VueMoment, {moment})


Vue.filter('formatDate', function (value) {
  if(value) {
    return moment(String(value)).format('MM/DD/YYYY hh:mm')
  }
});


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