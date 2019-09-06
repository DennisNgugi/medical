/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import axios from 'axios'
import moment from 'moment';


Vue.use(VueRouter)
Vue.use(axios)
Vue.filter('date', function (created) {
  return moment(created).startOf('hour').fromNow();
})
import Department from './components/department/Department'
// Reception components
 import Reception from './components/reception/Reception'
 // import Patient from './components/reception/Patient'
import Report from './components/department/Report'
//
 import DepartmentQueue from './components/department/DepartmentQueue'
// import Referral from './components/department/Referral'
import DepartmentNotes from './components/department/DepartmentNotes'

const routes = [
  {
        path: '/reception',
        component: Reception,

    },
    {
        path: '/:department',
        component: Department,
        children: [{
            name: 'depQueue',
            path: 'queue',
            component: DepartmentQueue
        },
        {
            name: 'showReports',
            path: 'reports',
            component: Report
        },
        {
            name: 'notes',
            path: 'notes/:patientID/:patientName',
            component: DepartmentNotes
        },
        // {
        //     name: "DepReferral",
        //     path: 'refer/:visitId',
        //     component: Referral
        // },

      ]
    }, {
        path: '*',
        redirect: {
            name: 'depQueue'
        }
    }
]


const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    router
});
