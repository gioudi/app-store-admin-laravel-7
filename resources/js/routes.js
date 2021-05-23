import Vue from 'vue';
import VueRouter from 'vue-router';


const router = new VueRouter({
  history,
  routes:[
    {
      path: '/',
      name:'app',
      component: require('./App.vue').default
    },
    {
      path: '/login',
      name:'login',
      component: require('./views/pages/Login.vue').default
    },
    {
      path: '/register',
      name:'register',
      component: require('./views/pages/Register.vue').default
    },
    {
      path: '/dashboard',
      name:'dashboard',
      component: require('./views/Dashboard.vue').default
    },

  ]
});



export default router;

