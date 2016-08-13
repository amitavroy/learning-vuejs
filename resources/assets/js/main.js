import Vue from 'vue';
import VueResource from 'vue-resource';

import TodoItems from './components/Todo/TodoItems.vue';
import TodoAddForm from './components/Todo/TodoAdd.vue';

Vue.use(VueResource);

Vue.component('todo-item', TodoItems);
Vue.component('todo-add-form', TodoAddForm);

/*Adding CSRF token to all HTTP Request*/
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("meta[name=csrf-token]").getAttribute('content');

new Vue({
    el: '#vue-app',

    created() {
        this.$http.get('api/v1/todos').then((response) => {
            this.todos = response.data;
        });
    },

    data: {
        newTodo: {},
        todos: {}
    },

    watch: {
        newTodo(newval, oldval) {
            this.todos.push({
                id: Math.floor(Date.now()),
                title: newval.title,
                completed: false
            });
        }
    }
});
