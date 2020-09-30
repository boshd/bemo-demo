import VueRouter from 'vue-router'

import Contact from './views/app/Contact'
import Welcome from './views/app/Welcome'

window.Vue = require('vue');
Vue.use(VueRouter)

Vue.component('header_', require('./components/Header.vue').default);
Vue.component('footer_', require('./components/Footer.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'welcome',
            component: Welcome
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
    ],
});

const admin = new Vue({
    router,
    el: '#admin',
});
