<template>
    <div>

        <div class="artist-main-section">
            <div class="text">{{artist.description}}</div>
            <div class="pictureandname">
                <img class="artist-image" :src="'../images/authors/' + artist.image">
            <div class="name-artist">{{artist.artist}}</div>
            </div>
        </div>
        <div class="stuff-class">
            <div class="stuff">Stuff:</div>
        </div>


        
        
        <div class="product-class">
                <div class="artist-product-item" v-for="product in products">
                    <a :href="'/product/' + product.id"><img :src="'../images/shirts/' + product.image"></a>
                    <a :href="'/product/' + product.id">{{product.name}}</a>
                    <a :href="'/product/' + product.id">{{product.price}} $</a>
                </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
        'products',
        'artist'
        ]
    }
</script>
