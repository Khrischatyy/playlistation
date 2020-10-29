<template>
    <div class="main-content-product">
        <div class="product" v-for="product in products">
        <a :href="'product/' + product.id"><img :src="'images/shirts/'+ product.image"></a>
        <div class="product-item"><a :href="'product/' + product.id">{{product.name}}</a></div>
        <div class="product-item"><a :href="'product/' + product.id">{{product.price}} $</a></div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
        'products'
        ],
    }
</script>
