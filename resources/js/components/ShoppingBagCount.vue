<template>
    <div class="cartnumber">{{countFunc.count}}</div>
</template>

<script>
	import {mapGetters} from 'vuex'
    export default {
    	mounted() {
    		axios.get('/getCountShoppingCart')
    		.then((response) => {
    			let count = response.data;
    			this.$store.dispatch('updateUser',{count});
    		})
    	},
        computed: mapGetters(["countFunc"]),
    }
</script>
