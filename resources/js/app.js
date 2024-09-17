import './bootstrap';
import App from '../componets/App.vue'
import router from './router/router.js'
import store from './store'

import { createApp } from "vue";



const app = createApp(App).use(router).use(store).mount('#app')
