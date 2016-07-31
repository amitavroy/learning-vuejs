import Vue from 'vue';

var TodoItems = Vue.extend({
    template: '#todo-list-template',
  
  props: ['todos'],
  
  methods: {
    todoCompleted(todo) {
        todo.completed = !todo.completed
    }
  }
});

var TodoAddForm = Vue.extend({
    template: '#todo-add-form',
  
  props: ['newtodo'],
  
  data() {
    return {
        todo: {id: null, title: '', completed: false}
    }
  },
  
  methods: {
    addTodo() {
        this.newtodo = this.todo;
      this.todo = {id: null, title: '', completed: false};
    }
  }
});

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
