export const getMovies = function (store) {
    this.$http.get('api/v1/movie-list').then((response) => {
        console.log('response', response);
        if (response.status == 200) {
            var dispatch = store.dispatch
            dispatch('GET_MOVIE_LIST', response.data)
        }
    }).catch((response) => {
        console.log('Error', response)
    })
}

export const saveMovie = function (store, movie) {
    this.$http.post('api/v1/movie-save', movie).then((response) =>  {
        /*check if it's a success*/
        if (response.status == 201) {
            console.log('response', response)
        }
    }).catch((response) => {
        console.log('Error', response)
    })
}
