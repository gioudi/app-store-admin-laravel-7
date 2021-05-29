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
      meta: { requiresAuth: true },
    },

    {
        path: '/dashboard/users',
        name: 'users',
        component: require('./views/Users.vue').default,
        meta: { requiresAuth: true },
    },

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
    {
        path: '/dashboard/clients',
        name: 'clients',
        component: require('./views/Clients.vue').default,
        meta: { requiresAuth: true },
    },

    {
        path: '/dashboard/clients/:id/show',
        name: 'clients.show',
        component: require('./views/client/ShowClient.vue').default,
        meta: { requiresAuth: true },
    },
    {
        path: '/dashboard/clients/:id/edit',
        name: 'clients.edit',
        component: require('./views/client/EditClient.vue').default,
        meta: { requiresAuth: true },
    },

    {
        path: '/dashboard/cities',
        name: 'cities',
        component: require('./views/Cities.vue').default,
        meta: { requiresAuth: true },
    },

    {
        path: '/dashboard/cities/:id/show',
        name: 'cities.show',
        component: require('./views/city/ShowCity.vue').default,
        meta: { requiresAuth: true },
    },
    {
        path: '/dashboard/cities/:id/edit',
        name: 'cities.edit',
        component: require('./views/city/EditCity.vue').default,
        meta: { requiresAuth: true },
    },
      {
        path: '/dashboard/cities/create',
        name: 'cities.register',
        component: require('./views/city/CreateCity.vue').default,
        meta: { requiresAuth: true },
    }

  ]
});



export default router;

