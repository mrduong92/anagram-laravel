const routes = [
  {
    path: '/',
    name: 'index',
    component: require('./components/Example.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: require('./components/Login.vue')
  },
  {
    path: '/logout',
    name: 'logout'
  },
  {
    path: '/user',
    name: 'user',
    component: require('./components/User.vue')
  },
]

export default routes
