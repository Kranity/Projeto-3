<template>
    <div class="row" v-if="movie != ''">
        <div class="col s7">
            <div class="card hoverable">    
                <div class="card-image">
                    <img src="http://materializecss.com/images/sample-1.jpg">
                </div>
                <div class="card-content" v-for="movie in movie" :key="movie.id">
                    <p class="card-title"><strong>{{movie.name}}</strong></p>
                    <p>{{movie.genre}}</p>
                    <p>{{movie.overview}}</p>
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
                movie: []
            }
        },
        mounted() {
            this.loadMovie()
        },
        methods: {
            loadMovie() {
                axios.get('http://localhost/api/filme')
                    .then(response => {
                        this.movie = response.data.data
                    })
            }
        }
    }
</script>

<style scoped>
    .row {
        margin-left: 500px;
    }
</style>