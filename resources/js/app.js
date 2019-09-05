/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

Vue.use(VueRouter)
Vue.use(axios)

//import Department from './components/department/Department'
// Reception components
 import Reception from './components/reception/Reception'
 // import Queue from './components/reception/Queue'
 // import Patient from './components/reception/Patient'
// import Report from './components/department/Report'
//
// import CurrentQueue from './components/department/CurrentQueue'
// import Referral from './components/department/Referral'
// import Notes from './components/department/Notes'

const routes = [
  {
        path: '/reception',
        component: Reception,
        // children: [{
        //         path: 'patient',
        //         component: Patient
        //     },
        //      {
        //         path: 'queue',
        //         component: Queue
        //     }]
    },
    // {
    //     path: '/:department',
    //     component: Department,
    //     children: [{
    //         name: 'depQueue',
    //         path: 'queue',
    //         component: CurrentQueue
    //     }, {
    //         name: "notes",
    //         path: 'notes/:visitId',
    //         component: Notes
    //     }, {
    //         name: "DepReferral",
    //         path: 'refer/:visitId',
    //         component: Referral
    //     }, {
    //         path: '/reports',
    //         component: Report,
    //         name: 'viewReports'
    //
    //     }]
    // }, {
    //     path: '*',
    //     redirect: {
    //         name: 'depQueue'
    //     }
    // }
    //

]


const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    router
});
