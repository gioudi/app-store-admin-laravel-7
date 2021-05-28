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
      component: require('./views/Dashboard.vue').default,
      meta: { requiresAuth: true },
    },
 
    {
        path: '/dashboard/users',
        name: 'users',
        component: require('./views/Users.vue').default,
        meta: { requiresAuth: true },
    },
    /*  {
        path: '/dashboard/users/registeruser',
        name: 'users.register',
        component: require('./views/user/RegisterUser.vue').default,
        meta: { requiresAuth: true },
    } */
    {
        path: '/dashboard/users/:id/show',
        name: 'users.show',
        component: require('./views/user/ShowUser.vue').default,
        meta: { requiresAuth: true },
    },
    {
        path: '/dashboard/users/:id/edit',
        name: 'users.edit',
        component: require('./views/user/EditUser.vue').default,
        meta: { requiresAuth: true },
    },  

  ]
});



export default router;

