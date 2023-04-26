import './bootstrap';

import { createApp } from 'vue'
import PostsIndex from './components/Posts/Index.vue'

createApp({})
    .component('PostsIndex', PostsIndex)
    .mount('#app')
