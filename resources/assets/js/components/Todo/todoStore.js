const state = {
    todos: []
}

const mutations = {
    GET_TODOS (state, todos) {
        state.todos = todos;
    },

    ADD_TODO (state, todo) {
        state.todos.push(todo);
    },

    DELETE_TODO (state, todo) {
        state.todos.$remove(todo);
    }
}

export default {
    state,
    mutations
}
