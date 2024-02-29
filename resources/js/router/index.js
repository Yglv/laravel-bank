// router/index.js
//import Vue from 'vue';
import {createRouter, createWebHistory} from 'vue-router';
import Welcome from '../Welcome.vue'
import Clients from '../components/Clients.vue'

//Vue.use(createRouter);

const routes = [
    { path: '/', component: Welcome },
    { path: '/clients', component: Clients }
];

const router = new createRouter({
    history: createWebHistory(import.meta.env.VITE_API_BASE_URL),
    routes
});

export default router
