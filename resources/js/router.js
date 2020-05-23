import Vue from 'vue'
import Router from 'vue-router'

import top from './components/top.vue'
import second from './components/second.vue'

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            component: top
        },
        {
            path: '/second',
            component: second
        }
    ]
})
