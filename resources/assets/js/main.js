import Vue from 'vue';
import VueResource from 'vue-resource';

import TodoItems from './components/Todo/TodoItems.vue';
import TodoAddForm from './components/Todo/TodoAdd.vue';

Vue.use(VueResource);

Vue.component('todo-item', TodoItems);
Vue.component('todo-add-form', TodoAddForm);

new Vue({
    el: '#vue-app',

    data: {
        newTodo: {}
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
