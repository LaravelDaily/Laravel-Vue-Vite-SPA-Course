import './bootstrap';

import { createApp } from 'vue'

import router from './routes/index'
import VueSweetalert2 from 'vue-sweetalert2';

createApp({})
    .use(router)
    .use(VueSweetalert2)
    .mount('#app')
