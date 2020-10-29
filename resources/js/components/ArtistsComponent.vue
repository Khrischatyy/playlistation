<template>
    <main class="main-content-artist">
        <div class="artist-item" v-for="artist in artists">
            <div class="image"><a :href="'/artist/' + artist.id"><img :src="'images/authors/' + artist.image"></a></div>
            <div class="artist-name"><a :href="'/artist/'+ artist.id">{{artist.name}}</a></div>
        </div>
    </main>
</template>

<script>
    export default {
        props: [
        'artists'
        ],
        mounted() {
            console.log(this.artists);
        }
    }
</script>
