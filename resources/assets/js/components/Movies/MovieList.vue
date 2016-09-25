<script>
    import {getMovies} from './movieActions'

    export default {
        created () {
            this.getMovies()
        },

        vuex: {
            getters: {
                movieStore: state => state.movieStore
            },
            actions: {
                getMovies
            }
        }
    }
</script>

<template>
    <!-- <pre>{{ movieStore | json }}</pre> -->
    <div class="row">
        <div class="col-md-12">
            <p><a v-link="{name: 'movies-add'}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Movie</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item" v-for="movie in movieStore.movies">
                    <h3>{{movie.name}}</h3>
                    <span class="meta">
                        <strong>Director:</strong> {{movie.director}} <br>
                        <strong>Language:</strong> {{movie.language}} <br>
                        <strong>Year:</strong> {{movie.year}}
                    </span>
                </li>
            </ul>
        </div>
    </div>
</template>
