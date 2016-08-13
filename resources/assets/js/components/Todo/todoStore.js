const state = {
    todos: []
}

const mutations = {
    GET_TODOS (state, todos) {
        state.todos = todos;
    },

    ADD_TODO (state, todo) {
        state.todos.push(todo);
    }
}

export default {
    state,
    mutations
}
