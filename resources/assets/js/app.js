
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.axios = require('axios');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Vue.component('example-component2', require('./components/ExampleComponent2.vue'));
// Vue.component('example', require('./components/ExampleComponent.vue'));


// const app = new Vue({
//     el: '#app3',
// });
const app2 = new Vue({
    el: '#app2',
    components: {
        example: require('./components/ExampleComponent.vue'),
    },
});

const app3 = new Vue({
    el: '#app3',
    components: {
        example2: require('./components/ExampleComponent2.vue'),
    },
});
// const app3 = new Vue({
//     el: '#app3'
// });
