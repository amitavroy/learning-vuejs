import Vue from 'vue';

import TodoItems from './components/Todo/TodoItems.vue';
import TodoAddForm from './components/Todo/TodoAdd.vue';

Vue.component('todo-item', TodoItems);
Vue.component('todo-add-form', TodoAddForm);

new Vue({
    el: '#vue-app',

    data: {
        todos: [{id: 1, title: 'Go Shopping', completed: true}],
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
