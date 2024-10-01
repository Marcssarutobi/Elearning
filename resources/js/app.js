import { createApp } from 'vue';
import './bootstrap';
import App from './components/App.vue'
import { createRouter, createWebHashHistory } from 'vue-router';

const app = createApp({})

app.component('app', App)

const routes = [
    {
        path: "/",
        component: () => import("./components/accueil.vue"),
    },
    {
        path: "/course",
        component: () => import("./components/course.vue"),
    },
    {
        path: "/event",
        component: () => import("./components/event.vue"),
    },
    {
        path: "/course_detail",
        component: () => import("./components/course_detail.vue"),
    },
    {
        path: "/event_detail",
        component: () => import("./components/event_detail.vue"),
    },
    {
        path: "/instructors_details",
        component: () => import("./components/instructors_details.vue"),
    },
    {
        path: "/abouts",
        component: () => import("./components/abouts.vue"),
    },
    {
        path: "/instrue",
        component: () => import("./components/instrue.vue"),
    },
    {
        path: "/contact",
        component: () => import("./components/contact.vue"),
    },
    {
        path: "/login",
        component: () => import("./components/login.vue"),
    },
    {
        path: "/home",
        component: () => import("./components/admin/home.vue"),
    },
    {
        path: "/courseadmin",
        component: () => import("./components/admin/course.vue"),
    },
    {
        path: "/sessionsadmin",
        component: () => import("./components/admin/session.vue"),
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

app.use(router)
app.mount('#app')
