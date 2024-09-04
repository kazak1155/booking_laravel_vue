<template>

    <div class="card m-lg-3" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="foto hotel">
        <div class="card-body">
            <h5 class="card-title fw-bold">{{ hotel.name }}</h5>
            <p class="card-text">description: <b>{{ hotel.description }}</b></p>
            <p class="card-text">address: <b>{{ hotel.address }}</b></p>
<!--            <template v-for="room in hotel.room_id">-->
<!--&lt;!&ndash;                <a href="#" class="btn btn-primary m-lg-2">{{ room.name }}</a>&ndash;&gt;-->
<!--                <router-link class="btn btn-primary m-lg-2" :to="{ name: 'room.show', params: { id: room.id }}">-->
<!--                    {{ room.name }}-->
<!--                </router-link>-->
<!--            </template>-->
<!--            <ul id="example-1">-->
<!--                <li v-for="room in hotel.room_id">-->
<!--                    <router-link class="btn btn-primary m-lg-2" :to="{ name: 'room.show', params: { id: room.id }}">-->
<!--                        {{ room.name }}-->
<!--                    </router-link>-->
<!--                </li>-->
<!--            </ul>-->

            <template v-for="room in hotel.room_id">
                <tr>
                    <td>
                        <router-link :to="{ name: 'room.show', params: { id: room.id }}">
                            {{ room.name }}
                        </router-link>
                    </td>
                </tr>
            </template>
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
