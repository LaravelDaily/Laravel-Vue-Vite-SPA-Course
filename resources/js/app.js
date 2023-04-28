import './bootstrap';

import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './layouts/App.vue'
import PostsIndex from './components/Posts/Index.vue'
import PostsCreate from './components/Posts/Create.vue'

const routes = [
    { path: '/', component: PostsIndex },
    { path: '/posts/create', component: PostsCreate },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp(App)
    .use(router)
    .mount('#app')
