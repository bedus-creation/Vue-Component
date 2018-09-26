
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



Vue.component('purcaseform', require('./components/purcaseForm.vue'));
Vue.component('dynamicform', require('./components/dynamicForm.vue'));
Vue.component('wizardexample', require('./components/wizardExample.vue'));
Vue.component('sweetalert', require('./components/sweetAlert.vue'));


const app = new Vue({
    el: '#app'
});
