/* Importing modules */
import Vue from 'vue'
import VueResource from 'vue-resource'
import VueValidator from 'vue-validator'
import VueRouter from 'vue-router'
import store from './vuex/store'

/* Importing components */
import App from './components/App.vue'
import Dashboard from './pages/Dashboard.vue'

/* Setting up the modules with Vue */
Vue.use(VueResource)
Vue.use(VueValidator)
Vue.use(VueRouter)

Vue.component('app', App)
Vue.component('dashboard', Dashboard)

/*Adding CSRF token to all HTTP Request*/
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("meta[name=csrf-token]").getAttribute('content')

const vueInstance = Vue.extend({
    store
})

var appRoutes = new VueRouter()

appRoutes.map({
    '/': {
        name: 'home',
        component: Dashboard
    }
})

appRoutes.start(vueInstance, 'body')
