require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import App from './components/App';
import Movies from './components/Movies';
import Movie from './components/Movie';
import Favoritos from './components/Favoritos';

const router = new VueRouter ({
    mode: 'history',
    routes: [
        {
            path: '/filmes',
            name: 'filmes',
            component: Movies
        },
        {
            path: '/filme',
            name: 'filme',
            component: Movie
        },
        {
            path: '/favoritos',
            name: 'favoritos',
            component: Favoritos
        }
    ]
})

const app = new Vue({
    el: '#app',
    components: {App},
    router
});
