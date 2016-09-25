<script>
    import {saveMovie} from './movieActions'

    export default {
        data () {
            return {
                newMovie: {
                    name: '',
                    director: '',
                    year: '',
                    language: ''
                }
            }
        },

        methods: {
            handleAddMovieSubmit () {
                if (this.$addMovie.valid) {
                    this.saveMovie(this.newMovie)
                    this.newMovie = {
                        name: '',
                        director: '',
                        year: '',
                        language: ''
                    }
                } else {
                    window.alert('Form data is not correct')
                }
            }
        },

        vuex: {
            actions: {
                saveMovie
            }
        }
    }
</script>

<template>
    <pre>{{ $data | json }}</pre>
    <div class="row">
        <div class="col-md-12">
            <validator name="addMovie">
                <form v-on:submit.prevent="handleAddMovieSubmit()">
                    <div class="form-group">
                        <label>Name</label>
                        <input 
                            type="text"
                            class="form-control"
                            placeholder="Movie name"
                            id="moviename"
                            v-model="newMovie.name"
                            v-validate:moviename="{required: { rule: true, message: 'Movie name is required.' }}"
                        >
                    </div>

                    <div class="form-group">
                        <label>Director</label>
                        <input 
                            type="text"
                            class="form-control"
                            placeholder="Director name"
                            id="directorname"
                            v-model="newMovie.director"
                            v-validate:directorname="{required: { rule: true, message: 'Director name is required.' }}"
                        >
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input 
                            type="text"
                            class="form-control"
                            placeholder="Year"
                            id="movieyear"
                            v-model="newMovie.year"
                            v-validate:movieyear="{required: { rule: true, message: 'Year is required.' }}"
                        >
                    </div>

                    <div class="form-group">
                        <label>Language</label>
                        <input 
                            type="text"
                            class="form-control"
                            placeholder="Language of movie"
                            id="movielanuage"
                            v-model="newMovie.language"
                            v-validate:movielanuage="{required: { rule: true, message: 'Language is required.' }}"
                        >
                    </div>

                    <button class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </form>
            </validator>
        </div>
    </div>
</template>
