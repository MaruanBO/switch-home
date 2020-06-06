/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/Notifications.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/**
Vue.component('camara', require('./components/titleNotifications.vue'));


const app = new Vue({
    el: '#app',
    data: {
    	camaras: '',
    },

    created(){

    	if (window.Laravel.id) {
    		axios.post('/notification/camara/notification').then(response=> {
    			this.camaras = response.data;
    			console.log(response.data)
    		});
    	}

    		Echo.private('App.User.' + window.Laravel.id).notification((response) =>{
    			data = {"data":response};
    			this.camaras.push(data);
    			console.log(response);
    		});
    }

});
*/



