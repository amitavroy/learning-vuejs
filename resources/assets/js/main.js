import Vue from 'vue'
import VueResource from 'vue-resource'

import store from './vuex/store'
import TodoItems from './components/Todo/TodoItems.vue'
import TodoAddForm from './components/Todo/TodoAdd.vue'

Vue.use(VueResource)

Vue.component('todo-item', TodoItems)
Vue.component('todo-add-form', TodoAddForm)

/*Adding CSRF token to all HTTP Request*/
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("meta[name=csrf-token]").getAttribute('content')

new Vue({
    el: '#vue-app',

    store
})
