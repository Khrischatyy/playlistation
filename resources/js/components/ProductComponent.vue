<template>
    <main class="main-product">
        <section class="photo-description">
            <div class="photo">
                <img :src="'../images/shirts/' + product.image">
            </div>
            <div class="description-photo">
                <p>{{product.composition}}</p>
                <p>{{product.cut}}</p>
                <p>{{product.color}}</p>
                <p>{{product.size}}</p>
            </div>
        </section>
        <section class="all-info">
            <div class="buy-section">
                <div class="product-name">
                    <p>{{product.name}}</p>
                    <p>{{product.price}} USD</p>
                </div>
                    <div class ="button-shop"><button v-on:click="buy()">ADD TO CART</button>
                    </div>
            </div>
            <div class="description-photo-1">
                <p>{{product.composition}}</p>
                <p>{{product.cut}}</p>
                <p>{{product.color}}</p>
                <p>{{product.size}}</p>
            </div>
            <div class="main-desc-tshirt main-desc-tshirt_1">
            <div class="description">
                <p>T-SHIRT CARE</p>
                <div class="fuckin"><p class="description-item"></p></div>
            </div>
            <div class="desc-tshirt desc-tshirt_1">Close back dude</div>
            </div>
            <div class="main-desc-tshirt main-desc-tshirt_2">
            <div class="description">
                <p>ABOUT DELIVERY</p>
                <div class="fuckin"><p class="description-item"></p></div>
            </div>
            <div class="desc-tshirt desc-tshirt_2">You did it again</div>
            </div>
            <div class="main-desc-tshirt main-desc-tshirt_3">
            <div class="description">
                <p>ABOUT RETURN</p>
                <div class="fuckin"><p class="description-item"></p></div>
            </div>
            <div class="desc-tshirt desc-tshirt_3">Get out of here</div>
            </div>

                </div>
        </section>
    </main>
</template>

<script>

    export default {
        props: [
        'product'
        ],
        mounted()  {

            $(document).ready(function() {
                $('.main-desc-tshirt_1').click(function() {
                    $('.desc-tshirt_1').toggle(300);

            });
            $('.main-desc-tshirt_2').click(function() {
                $('.desc-tshirt_2').toggle(300);

            });
            $('.main-desc-tshirt_3').click(function() {
                    $('.desc-tshirt_3').toggle(300);

            });
            });



        },
        methods: {
            buy() {
                let id = this.product.id
                axios.get('/add-to-cart/' + id)
                    .then((response) =>{
                        console.log(response);
                        let count = response.data;
                        this.$store.dispatch('updateUser',{count});
                    })
                    .catch((e) => {
                        console.log(e)
                    })
            }
        }

    }
</script>
