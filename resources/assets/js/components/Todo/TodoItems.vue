<script>
    export default {
        props: ['todos'],

        methods: {
            todoCompleted(todo) {
                todo.completed = !todo.completed
            }
        }
    }
</script>

<template>
    <div>
      <ul class="list-group">
        <li 
          v-for="todo in todos"
          class="list-group-item"
          v-bind:class="{ 'completed' : todo.completed }">
            {{todo.title}}
            <button class="btn btn-xs pull-right margin-right-10" 
            v-bind:class="{'btn-success' : todo.completed, 'btn-danger' : !todo.completed}"
            v-on:click="todoCompleted(todo)">{{todo.completed ? 'Completed' : 'Pending'}}</button>
          </li>
      </ul>
    </div>
</template>
