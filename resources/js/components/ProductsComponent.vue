<template>
    <div>
    <div class="main-content-product">
        <div class="product" v-for="product in products">
            <a :href="'product/' + product.id"><img :src="'images/shirts/'+ product.image"></a>
            <div class="product-item"><a :href="'product/' + product.id">{{product.name}}</a></div>
            <div class="product-item"><a :href="'product/' + product.id">{{product.price}} $</a></div>
        </div>
    </div>
        <div class="pagination">
          <div class="container-pagination">
            <span>
                <div class="index-pagination"  v-for="n in pagination.last_page" :key="n" @click.prevent="getProduct('/getproducts?page=' + n)">{{n}}</div>
            </span>
            <svg viewBox="0 0 100 100">
              <path
                    d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
            </svg>
            <svg viewBox="0 0 100 100">
              <path
                    d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
            </svg>
          </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
          return {
            products : [],
            pagination: {},
          }
        },
        mounted() {
            this.getProduct()
            
        },
        methods: {
            transition () {
                const c = document.querySelector('.container-pagination')
                const indexs = Array.from(document.querySelectorAll('.index-pagination'))
                let cur = -1
                indexs.forEach((index, i) => {
                  index.addEventListener('click', (e) => {
                    // clear
                    c.className = 'container-pagination'
                    void c.offsetWidth; // Reflow
                    c.classList.add('open')
                    c.classList.add(`i${i + 1}`)
                    if (cur > i) {
                      c.classList.add('flip')
                    }
                    cur = i
                  })
                })
            },
            getProduct(page_url) {
                page_url = page_url || '/getproducts'
                axios
                    .get(page_url)
                    .then(response => {
                        this.products = response.data.data
                        this.makePagination(response.data)
                        this.transition()
                    })
            },
            makePagination(response) {
                let pagination = {
                    current_page: response.current_page,
                    total: response.total,
                    last_page: response.last_page,
                }
                this.pagination = pagination
            },
        }
    }
</script>

    