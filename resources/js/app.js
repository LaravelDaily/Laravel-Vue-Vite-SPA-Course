import './bootstrap';

import { createApp, onMounted } from 'vue'

import router from './routes/index'
import VueSweetalert2 from 'vue-sweetalert2';
import useAuth from './composables/auth';

createApp({
    setup() {
        const { getUser } = useAuth()
        onMounted(getUser)
    }
})
    .use(router)
    .use(VueSweetalert2)
    .mount('#app')
