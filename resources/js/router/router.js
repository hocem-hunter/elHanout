import Vue from 'vue'
import VueRouter from 'vue-router'
/************************************************/

//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\


Vue.use(VueRouter)

const routes = [
    {path: '/'},
    {path: '/home',
        name: 'home',
        component: {}
    }
]

export default new VueRouter({
    mode: 'history',
    routes: routes,
    // base: '/'
})
