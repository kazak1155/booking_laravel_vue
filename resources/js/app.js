import './bootstrap';
import App from '../componets/App.vue'
import router from './router/router.js'

import { createApp } from "vue";


const app = createApp(App).use(router).mount('#app')
