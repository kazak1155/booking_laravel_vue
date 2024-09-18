<template>
    <div>
        Update Hotel
    </div>

    <div class="card m-lg-3 p-3" style="width: 30%">
        <div class="mb-3">
            <img :src="hotel.img_url" alt="hotel img" />
            <br>
            <input type="file" @change="showUploadImage" name="imageHotel" id="imageHotel"/>
            <div v-if="imageUrl">
                <h3>Предпросмотр изображения:</h3>
                <img :src="imageUrl" alt="Uploaded Image" width="200" />
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-text">name hotel</h5>
            <input  v-model="hotel.name" class="card-text mb-5" type="text" name="nameHotel" id="nameHotel"  placeholder="{{ hotel.name }}" />
            <p class="card-text">description</p>
            <input  v-model="hotel.description" class="card-text mb-5" type="text" name="descriptionHotel" id="descriptionHotel"  placeholder="{{ hotel.description }}" />
            <p class="card-text">address</p>
            <input  v-model="hotel.address" class="card-text mb-5" type="text" name="addressHotel" id="addressHotel"  placeholder="{{ hotel.address }}" />

            <div>
                <p class="card-text">rooms</p>
                <template v-for="room in hotel.room_id">
                    <router-link class="btn btn-primary m-1" :to="{ name: 'room.show', params: { id: room.id }}">
                        {{ room.name }}
                    </router-link>
                </template>
            </div>

        </div>
    </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "updateHotel",

    mounted() {
        this.$store.dispatch('hotel/getOneHotel', this.$route.params.id)
    },

    computed: {
        ...mapGetters({
            hotel: 'hotel/hotel',
            imageUrl: 'hotel/imageUrl',
        }),
    },

    methods: {
        showUploadImage(event) {
            this.$store.dispatch('hotel/onImageSelected', event)
        }
    }
}
</script>

<style scoped>

</style>
