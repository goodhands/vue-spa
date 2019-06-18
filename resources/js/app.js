require('./bootstrap');

import router from './routes';

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({

    el: '#app',

    router,

});
