<template>
<!--    <template v-for="hotel in hotels">-->
<!--        <div class="p-5">-->
<!--            <div class="card" style="width: 18rem;">-->
<!--                <img src="..." class="card-img-top" alt="image hotel">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">hotel name:  {{ hotel.name }}</h5>-->
<!--                    <p class="card-text">description hotel: {{ hotel.description }}</p>-->
<!--                    <p class="card-text">address hotel: {{ hotel.address }}</p>-->
<!--                    <p class="card-text">facility hotel</p>-->
<!--                    <div class="d-grid gap-2">-->
<!--                        <div class="p-3 card">-->
<!--                            <img src="..." class="card-img-top" alt="image room 1">-->
<!--                            <button class="btn btn-primary" type="button">room 1</button>-->
<!--                        </div>-->
<!--                        <div class="p-3 card">-->
<!--                            <img src="..." class="card-img-top" alt="image room 2">-->
<!--                            <button class="btn btn-primary" type="button">room 2</button>-->
<!--                        </div>-->
<!--                        <div class="p-3 card">-->
<!--                            <img src="..." class="card-img-top" alt="image room 3">-->
<!--                            <button class="btn btn-primary" type="button">room 3</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </template>-->



    <div>
        <div class="d-flex justify-content-center">
            <h2>All hotels</h2>
        </div>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>Name hotel</th>
                <th>Description hotel</th>
                <th>Adress</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="hotel in hotels">
                <tr>
                    <td>
                        {{ hotel.name }}
                    </td>
                    <td>
                        {{ hotel.description }}
                    </td>
                    <td>
                        {{ hotel.address }}
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>

</template>

<script>
import {mapGetters} from 'vuex'
import store from "../../js/store/index.js";

export default {
    name: "show",
    //
    // data() {
    //     return {
    //         hotels: null,
    //         name: '',
    //         description: '',
    //         address: '',
    //     }
    // },
    //
    // methods: {
    //     getAllHotels() {
    //         axios.get("/api/hotels")
    //             .then(res => {
    //                 console.log(res.data)
    //                 this.hotels = res.data.data
    //             });
    //     },
    // },
    //
    // mounted() {
    //     this.getAllHotels()
    // }

    mounted() {
        this.$store.dispatch('hotel/getAllHotels')
    },

    computed: {
        ...mapGetters({
            hotels: 'hotel/hotels'
        })
    },
}
</script>

<style scoped>

</style>
