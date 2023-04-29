import './bootstrap';

import { createApp } from 'vue'
import App from './layouts/App.vue'

import router from './routes/index'
import VueSweetalert2 from 'vue-sweetalert2';

createApp(App)
    .use(router)
    .use(VueSweetalert2)
    .mount('#app')
