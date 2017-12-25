
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

const app = new Vue({
	el: "#app"
});

console.log("Does this work");


// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// 


// We're not going to use system wide vuejs setup, it's gonna be on every component
// const app = new Vue({
//     el: '#app'
// });
