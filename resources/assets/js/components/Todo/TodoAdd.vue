<script>
    import {saveTodo} from './todoActions';

    export default {
        data() {
            return {
                todo: {id: null, title: '', completed: false}
            }
        },
        
        methods: {
            addTodo() {
                this.saveTodo(this.todo);
                this.todo = {id: null, title: '', completed: false};
            }
        },

        vuex: {
            getters: {
                todoStore: state => state.todoStore.todos
            },
            actions: {
                saveTodo
            }
        }
    }
</script>

<template>
    <form v-on:submit.prevent="addTodo()">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Add a new Todo" v-model="todo.title">
      </div>
      
      <div class="form-group">
        <button class="btn btn-primary">
            <i class="fa fa-save"></i> Save
        </button>
      </div>
    </form>
</template>
