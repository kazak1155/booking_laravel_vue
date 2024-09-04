<template>
    <div>
        show one hotel 1111
    </div>

    <div class="card m-lg-3" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="foto hotel">
        <div class="card-body">
            <h5 class="card-title fw-bold">{{ hotel.name }}</h5>
            <p class="card-text">description: <b>{{ hotel.description }}</b></p>
            <p class="card-text">address: <b>{{ hotel.address }}</b></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "showOne",

    mounted() {
        this.$store.dispatch('hotel/getOneHotel', this.$route.params.id)
    },

    computed: {
        ...mapGetters({
            hotel: 'hotel/hotel'
        })
    },
}
</script>

<style scoped>

</style>
