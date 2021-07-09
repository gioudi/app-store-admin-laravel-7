import Vue from 'vue';
import VueRouter from 'vue-router';


const router = new VueRouter({
  history,
  routes:[
    {
      path: '/',
      name:'app',
      component: require('./views/pages/Login.vue').default
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
      component: require('./views/Dashboard.vue').default,
      meta: {requiresAuth:true}

    },
    {
      path: '/dashboard/create',
      name:'dashboard.create',
      component: require('./views/post/Create').default,
      meta: {requiresAuth:true}

    },
    {
      path: '/dashboard/edit/:id',
      name:'dashboard.edit',
      component: require('./views/post/Edit').default,
      meta: {requiresAuth:true}

    },
    {
      path: '/dashboard/show/:id',
      name:'dashboard.show',
      component: require('./views/post/Show').default,
      meta: {requiresAuth:true}

    },
    

  ]
});



export default router;

