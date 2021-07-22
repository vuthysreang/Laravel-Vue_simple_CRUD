import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home';
import About from './components/About';


Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",
    routes: [
        {
            name: "/",
            path: "/",
            component: Home
        },
        {
            name: "/about",
            path: "/about",
            component: About
        }
    ]
});
