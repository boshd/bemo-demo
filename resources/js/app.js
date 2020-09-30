import VueRouter from "vue-router";

import Contact from "./views/Contact";
import Welcome from "./views/Welcome";

import AdminDashboard from "./views/admin/Dashboard";

window.Vue = require("vue");
Vue.use(VueRouter);

Vue.component("header_", require("./components/Header.vue").default);
Vue.component("footer_", require("./components/Footer.vue").default);
Vue.component("banner", require("./components/Banner.vue").default);

Vue.component("editor", require("./components/Editor.vue").default);

const routes = [
    {
        path: "/",
        name: "welcome",
        component: Welcome,
        props: true
    },
    {
        path: "/",
        name: "contact",
        component: Contact,
    },
    // {
    //     path: "/register",
    //     name: "register",
    //     component: Register,
    //     meta: {
    //         auth: false
    //     }
    // },
    // ADMIN ROUTES
    {
        path: "/admin",
        name: "admin.dashboard",
        component: AdminDashboard,
        meta: {
            auth: {
                roles: 2,
                redirect: { name: "login" },
                forbiddenRedirect: "/403"
            }
        }
    }
];

const router = new VueRouter({
    history: true,
    mode: "history",
    routes
});

const app = new Vue({
    router,
    el: "#app"
});
