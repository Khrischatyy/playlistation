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
                    <p>{{product.price}} RUB.</p>
                    <p>SIZE</p>
                </div>
                <div  class="choose-section">
                    <div class="radioinput"><label>S</label><input type="radio" name="S"></div>
                    <div class="radioinput"><label>M</label><input type="radio" name="M"></div>
                    <div class="radioinput"><label>L</label><input type="radio" name="L"></div>
                </div>
                    <div class = "button-shop"><button v-on:click="buy()">BUY</button>
                    </div>
            </div>
            <div class="description-photo-1">
                <p>{{product.composition}}</p>
                <p>{{product.cut}}</p>
                <p>{{product.color}}</p>
                <p>{{product.size}}</p>
            </div>
            <div class="description">
                <p class="description-item">T-SHIRT CARE</p>
                <p class="description-item"></p>
            </div>
                <div class="line-shop"><hr></div>
                <p>ABOUT DELIVERY</p>
                <div class="line-shop"><hr></div>
                <p>ABOUT RETURN</p>
                </div>
        </section>
    </main>
</template>

<script>
    export default {
        props: [
        'product'
        ],
        methods: {
            buy() {
                let id = this.product.id
                axios.get('/add-to-cart/' + id)
                    .then(() =>{
                        console.log('Hi its awesome')
                    })
                    .catch((e) => {
                        console.log(e)
                    })
            }
        }

    }
</script>
