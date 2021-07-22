require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import router from './router';

Vue.config.productionTip = false;

Vue.use(VueAxios, axios);

new Vue(Vue.util.extend({ router }, App)).$mount('#app');
