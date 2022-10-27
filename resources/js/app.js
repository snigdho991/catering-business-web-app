/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

/*window.Vue = require('vue').default;

//Vue.component('chat', require('./components/Chat.vue').default);
var chat = Vue.component('chat', require('./components/Chat.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    components: {
    	'chat': chat,
	}
});*/

import { createApp } from 'vue';
require('./bootstrap');

let app = createApp({})
app.component('chat', require('./components/Chat.vue').default);
app.mount("#app")
