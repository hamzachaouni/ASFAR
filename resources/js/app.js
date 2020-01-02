require('./bootstrap');

import VueRouter from 'vue-router'
import Vue from 'vue'
import Visitor from './Visitor'

Vue.use(VueRouter)
Vue.component('pagination', require('laravel-vue-pagination'));


var VueTruncate = require('vue-truncate-filter')
Vue.use(VueTruncate)
/*Vue.filter('truncate', function (value, limit) {
  if (value.length > limit) {
      value = value.substring(0, (limit - 3)) + '...';
  }

  return value
})*/

window.Vue = require('vue');


import test from './components/test';
import nouvelles from './components/nouvelles';
import nouvelle from './components/nouvelle';
import equipe from './components/equipe';
import histoire_decennie from './components/histoire_decennie';
import histoire_presidents from './components/histoire_presidents';
import histoire_legendes from './components/histoire_legendes';
import histoire_entraineurs from './components/histoire_entraineurs';
import magasin from './components/magasin';
import joueur from './components/joueur';
import accueil from './components/accueil';
import histoire from './components/histoire';
import image from './components/image';


let routes = [
  { path: '/test', component: test },
  { path: '/accueil', component: accueil },
  { path: '/nouvelles', component: nouvelles },
  { path: '/nouvelle/:slug', component: nouvelle },
  { path: '/equipe', component: equipe },
  { path: '/equipe/:slug', component: joueur },
  { path: '/histoire/decennie', component: histoire_decennie },
  { path: '/histoire/presidents', component: histoire_presidents },
  { path: '/histoire/legendes', component: histoire_legendes },
  { path: '/histoire/entraineurs', component: histoire_entraineurs },
  { path: '/histoire/:slug', component: histoire },
  { path: '/magasin', component: magasin },
  { path: '/image/:slug', component: image },
]


const router = new VueRouter({
  history: true,
  mode: 'history',
  routes // short for `routes: routes`
})

Vue.component('visitor', Visitor)
const app = new Vue({
  el: '#app',
  router
});
