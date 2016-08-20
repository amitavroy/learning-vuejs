export const getTodos = function (store) {
    this.$http.get('api/v1/todos').then((response) => {
        if (response.data.length > 0) {
            var dispatch = store.dispatch
            dispatch('GET_TODOS', response.data)
        }
    })
}

export const saveTodo = function (store, postData) {
    this.$http.post('api/v1/todo', postData).then((response) =>  {
        /*check if it's a success*/
        if (response.status == 201) {
            var dispatch = store.dispatch
            dispatch('ADD_TODO', response.data)
        }
    }).catch((response) => {
        console.log('Error', response)
    })
}

export const deleteTodo = function (store, todo) {
    var postData = {id: todo.id}
    this.$http.post('api/v1/todo-delete', postData).then((response) =>  {
        /*check if it's a success*/
        if (response.status == 200) {
            var dispatch = store.dispatch
            dispatch('DELETE_TODO', todo)
        }
    }).catch((response) => {
        console.log('Error', response)
    })
}

export const toggleTodoStatus = function (store, todo) {
    var postData = {id: todo.id}
    this.$http.post('api/v1/todo-status', postData).then((response) =>  {
        /*check if it's a success*/
        if (response.status == 200) {
            var dispatch = store.dispatch
            dispatch('TOGGLE_STATUS_TODO', todo)
        }
    }).catch((response) => {
        console.log('Error', response);
    });
}
