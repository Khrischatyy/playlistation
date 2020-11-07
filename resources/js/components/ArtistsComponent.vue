<template>
    <div>
    <main class="main-content-artist">
        <div class="artist-item" v-for="artist in artists">
            <div class="image"><a :href="'/artist/' + artist.id"><img :src="'images/authors/' + artist.image"></a></div>
            <div class="artist-name"><a :href="'/artist/'+ artist.id">{{artist.name}}</a></div>
        </div>
    </main>
    <div class="pagination">
      <div class="container-pagination">
        <span>
            <div class="index-pagination"  v-for="n in pagination.last_page" :key="n" @click.prevent="getArtists('/getartists?page=' + n)">{{n}}</div>
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
            artists : [],
            pagination: {},
          }
        },
        mounted() {
            this.getArtists()
            
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
            getArtists(page_url) {
                page_url = page_url || '/getartists'
                axios
                    .get(page_url)
                    .then(response => {
                        this.artists = response.data.data
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
