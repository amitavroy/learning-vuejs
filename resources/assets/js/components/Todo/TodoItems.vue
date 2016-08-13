<script>
    export default {
        props: ['todos'],

        methods: {
            todoCompleted(todo) {
                todo.completed = !todo.completed
            },

            todoDelete(todo) {
                this.todos.$remove(todo);
            }
        }
    }
</script>

<template>
    <!-- <pre>{{ $data | json }}</pre> -->
    <div>
      <ul class="list-group">
        <li 
          v-for="todo in todos"
          class="list-group-item"
          v-bind:class="{ 'completed' : todo.completed }">
            {{todo.title}}

            <button 
                class="btn btn-xs btn-danger pull-right"
                v-on:click="todoDelete(todo)">
                <i class="fa fa-trash"></i>
            </button>
            <button class="btn btn-xs pull-right margin-right-10" 
            v-bind:class="{'btn-success' : todo.completed, 'btn-warning' : !todo.completed}"
            v-on:click="todoCompleted(todo)">{{todo.completed ? 'Completed' : 'Pending'}}</button>
          </li>
      </ul>
    </div>
</template>
