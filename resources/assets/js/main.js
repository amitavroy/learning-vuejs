/* Importing modules */
import Vue from 'vue'
import VueResource from 'vue-resource'
import VueValidator from 'vue-validator'
import VueRouter from 'vue-router'
import store from './vuex/store'

/* Importing components */
import App from './components/App.vue'
import Dashboard from './pages/Dashboard.vue'
import Movies from './pages/Movies.vue'
import MovieList from './components/Movies/MovieList.vue'
import MovieAdd from './components/Movies/MovieAdd.vue'

/* Setting up the modules with Vue */
Vue.use(VueResource)
Vue.use(VueValidator)
Vue.use(VueRouter)

Vue.component('app', App)
Vue.component('dashboard', Dashboard)
Vue.component('movies', Movies)
Vue.component('movielist', MovieList)
Vue.component('movieadd', MovieAdd)

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
    },
    'movies': {
        name: 'movies',
        component: Movies,
        subRoutes: {
            '/list': {
                name: 'movies-list',
                component: MovieList
            },
            'add': {
                name: 'movies-add',
                component: MovieAdd
            }
        }
    }
})

appRoutes.start(vueInstance, 'body')
