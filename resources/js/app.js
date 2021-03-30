require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('guess-number', require('./components/GuessNumber.vue').default);
Vue.component('test-test', require('./components/TestComponent.vue').default);


const app = new Vue({
    el: '#app',
});
