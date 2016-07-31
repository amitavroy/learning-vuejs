<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Vuejs</h1>

            <div class="container" id="vue-app">
              <div class="row">
                <div class="col-sm-12">
                  <h1>My Todos</h1>

                  <todo-item :todos="todos"></todo-item>
                  
                  <todo-add-form :newtodo.sync="newTodo"></todo-add-form>
                </div>
              </div>
              
              <template id="todo-add-form">
                <form v-on:submit.prevent="addTodo()">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter new Todo" v-model="todo.title">
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-success">Add</button>
                  </div>
                </form>
              </template>
            </div>
        </div>

        <script src="{{ elixir('js/main.js') }}"></script>
    </body>
</html>
