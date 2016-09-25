const state = {
    movies: []
}

const mutations = {
    GET_MOVIE_LIST (state, movies) {
        state.movies = movies
    }
}

export default {
    state, mutations
}
