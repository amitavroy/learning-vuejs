import _ from 'underscore'

const state = {
    todos: []
}

const mutations = {
    GET_TODOS (state, todos) {
        state.todos = todos
    },

    ADD_TODO (state, todo) {
        state.todos.push(todo)
    },

    DELETE_TODO (state, todo) {
        state.todos.$remove(todo)
    },

    TOGGLE_STATUS_TODO (state, todo) {
        _.each(state.todos, function (value, index) {
            if (todo.id === value.id) {
                state.todos[index].completed = !state.todos[index].completed
            }
        })
    }
}

export default {
    state,
    mutations
}
