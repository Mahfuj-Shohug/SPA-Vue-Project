
import Vue from 'vue';
require('./bootstrap');
import routes from '../router/index';

window.Vue = require('vue').default;


//Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    router: routes,
});
