<template>
    <div class="row" v-if="favorites != ''">
        <div class="col s3" v-for="favorite in favorites" :key="favorite.id">
            <div class="card hoverable">
                <div class="card-image">
                    <a v-on:click="getMovie(favorite)"><router-link to="filme"><img src="http://materializecss.com/images/sample-1.jpg"></router-link></a>
                    <a v-on:click="removeFavorite(favorite.id)" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite</i></a>
                </div>
                <div class="card-content">
                    <p class="card-title"><strong>{{favorite.name}}</strong></p>
                    <p>{{favorite.genre}}</p>
                    <p>{{favorite.date}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                favorites: []
            }
        },
        mounted() {
            this.loadFavorites()
        },
        methods: {
            loadFavorites() {
                axios.get('http://localhost/api/favoritos')
                    .then(response => {
                        this.favorites = response.data.data
                    })
            },
            removeFavorite($favorite) {
                axios.post('http://localhost/api/removeFavoritos', {
                    id: $favorite,
                })
                this.loadFavorites()
            },
            getMovie($favorite) {
                axios.post('http://localhost/api/postFilme', {
                    id: $favorite.id,
                    name: $favorite.name,
                    genre: $favorite.genre,
                    overview: $favorite.overview,
                    date: $favorite.date
                })
            }
        }
    }
</script>

<style scoped>
    
</style>