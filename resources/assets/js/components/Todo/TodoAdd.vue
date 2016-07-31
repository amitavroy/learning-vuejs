<script>
    export default {
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
    }
</script>

<template>
    <form v-on:submit.prevent="addTodo()">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter new Todo" v-model="todo.title">
      </div>
      
      <div class="form-group">
        <button class="btn btn-success">Add</button>
      </div>
    </form>
</template>
