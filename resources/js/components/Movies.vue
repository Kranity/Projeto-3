<template>
    <div class="row" v-if="movies != ''">
        <div class="col s3" v-for="movie in movies" :key="movie.id">
            <div class="card hoverable">
                <div class="card-image">
                    <a v-on:click="getMovie(movie)"><router-link to="filme"><img src="http://materializecss.com/images/sample-1.jpg"></router-link></a>
                    <a v-on:click="addFavorites(movie)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="card-title"><strong>{{movie.name}}</strong></p>
                    <p>{{movie.genre}}</p>
                    <p>{{movie.date}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                movies: []
            }
        },
        mounted() {
            this.loadMovies()
        },
        methods: {
            loadMovies() {
                axios.get('http://localhost/api/filmes')
                    .then(response => {
                        this.movies = response.data.data
                    })
            },
            addFavorites($movie) {
                axios.post('http://localhost/api/addFavoritos', {
                    id: $movie.id,
                    name: $movie.name,
                    genre: $movie.genre,
                    overview: $movie.overview,
                    date: $movie.date
                })
            },
            getMovie($movie) {
                axios.post('http://localhost/api/postFilme', {
                    id: $movie.id,
                    name: $movie.name,
                    genre: $movie.genre,
                    overview: $movie.overview,
                    date: $movie.date
                })
            }
        }
    }
</script>

<style scoped>
    
</style>