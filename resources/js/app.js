import Vue from 'vue'
import {createInertiaApp, Link} from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import 'bootstrap'

Vue.component('Link', Link)
Vue.prototype.$route = route
InertiaProgress.init()
createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        Vue.use(plugin)

        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
})
