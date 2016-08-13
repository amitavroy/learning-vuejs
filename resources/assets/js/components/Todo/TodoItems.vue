<script>
    export default {
        props: ['todos'],

        methods: {
            todoCompleted(todo) {
                var postData = {id: todo.id};
                this.$http.post('api/v1/todo-status', postData).then((response) =>  {
                    /*check if it's a success*/
                    if (response.status == 200) {
                        todo.completed = !todo.completed
                    }
                }).catch((response) => {
                    console.log('Error', response);
                });
            },

            todoDelete(todo) {
                var postData = {id: todo.id};
                this.$http.post('api/v1/todo-delete', postData).then((response) =>  {
                    /*check if it's a success*/
                    if (response.status == 200) {
                        this.todos.$remove(todo);
                    }
                }).catch((response) => {
                    console.log('Error', response);
                });
            }
        }
    }
</script>

<template>
    <!-- <pre>{{ $data | json }}</pre> -->
    <!-- <pre>{{ todos | json }}</pre> -->
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
