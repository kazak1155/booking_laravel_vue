<template>
    <div>
        <h2>Create hotel</h2>
            <form @submit.prevent="this.$store.dispatch('hotel/storeHotel', {name: hotel.name, description: hotel.description, address: hotel.address})">
            <div class="mb-3 border-top">
                <label class="form-label">enter hotel name</label>
                <br>
                <input v-model="hotel.name" type="text"  id="nameHitel"  placeholder="Hotel name" />
            </div>
            <div class="mb-3 border-top">
                <label class="form-label">enter description name</label>
                <br>
                <input v-model="hotel.description" type="text" name="description" id="hotelDescription" placeholder="Hotel description">
            </div>
            <div class="mb-3 border-top">
                <label class="form-label">enter address name</label>
                <br>
                <input v-model="hotel.address" type="text" name="address" id="hotelAddress" placeholder="Hotel address">
            </div>
            <div class="mb-3 border-top">
                <label class="form-formData.bel">upload image hotel</label>
                <br>
                <input type="file" @change="showUploadImage"  ref="fileInput" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Create hotel</button>
            </div>
        </form>
        <div v-if="imageUrl">
            <h3>Предпросмотр изображения:</h3>
            <img :src="imageUrl" alt="Uploaded Image" width="200" />
        </div>
    </div>
</template>

<script>
import {mapActions, mapGetters, mapMutations, mapState} from 'vuex';

export default {
    computed: {
        ...mapGetters({
            hotel: 'hotel/hotel',
            image: 'hotel/image',
            imageUrl: 'hotel/imageUrl',
        })
    },

    methods: {
        showUploadImage(event) {
            this.$store.dispatch('hotel/onImageSelected', event)
        }
    }
};
</script>
