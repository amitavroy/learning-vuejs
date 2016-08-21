<script>
    import {saveTodo} from './todoActions'

    export default {
        data () {
            return {
                todo: {id: null, title: '', completed: false}
            }
        },
        
        methods: {
            addTodo () {
                if (this.$todoAddForm.valid) {
                    this.saveTodo(this.todo)
                    this.todo = {id: null, title: '', completed: false}
                } else {
                    window.alert('Todo text cannot be blank')
                }
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
    <validator name="todoAddForm">
        <form v-on:submit.prevent="addTodo()" novalidate>
          <div class="form-group">
            <input 
                id="todotext" 
                type="text" 
                class="form-control" 
                placeholder="Add a new Todo" 
                v-validate:todotext="{required: { rule: true, message: 'Todo text is required.' }}"
                v-model="todo.title">
                <span v-if="$todoAddForm.todotext.required && $todoAddForm.todotext.touched === true">
                    {{ $todoAddForm.todotext.required }}
                </span>
          </div>
        </form>
    </validator>
</template>
