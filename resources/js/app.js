
require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-button-component', require('./components/MyButtonComponent.vue').default);


const app = new Vue({
    el: '#app',
});
