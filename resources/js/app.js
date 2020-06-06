import Vue from 'vue'
import Vuetify from "vuetify"
import router from "./router/router";
import store from "./store/store";

import NavBar from "./components/includes/NavBar";

require('./bootstrap');

Vue.use(Vuetify)


let $app = document.querySelector('#app')
if ($app) {
    new Vue({
        el: '#app',
        store: store,
        router: router,
        components: {
            navbar: NavBar
        },
        vuetify: new Vuetify()
    })
    ;
}
