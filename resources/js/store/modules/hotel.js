import axios from 'axios';
export default  {
    namespaced: true,

    state: {
        hotels: null,
        hotel: {
            name: null,
            description: null,
            address: null,
        },
    },

    getters: {
        hotels:  state => {
            return state.hotels
        },
        hotel: state => {
            return state.hotel
        },
    },

    mutations: {
        setHotels(state, hotels) {
            state.hotels = hotels
        },
        setHotel(state, hotel) {
            state.hotel = hotel
        },
    },

    actions: {
        getAllHotels({ commit }) {
            axios.get("/api/hotels")
                .then(response => {
                    commit('setHotels', response.data.data)
                    console.log(response.data.data)
                })
                .catch(error => {
                    console.log(error.message)
                });
        },

        getOneHotel({ commit }, id) {
            axios.get(`/api/hotel/${id}`)
                .then(response => {
                    commit('setHotel', response.data.data)
                    console.log(response.data.data)
                })
                .catch(error => {
                    console.log(error.message)
                });
        }
    },
}
