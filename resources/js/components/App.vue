<template>
    <div>
        <nav>
            <div class="nav-wrapper purple darken-4">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><router-link :to="{name: 'filmes'}">Filmes</router-link></li>
                    <li><router-link :to="{name: 'favoritos'}">Favoritos</router-link></li>
                </ul>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .brand-logo {
        margin-left: 330px;
    }
    #nav-mobile {
        margin-right: 330px;
    }
</style>