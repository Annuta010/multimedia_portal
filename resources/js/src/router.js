

import VueRouter from 'vue-router';
import Blog from './views/pages/blog/blog-index.vue'
import Posts from './views/pages/posts/posts-index.vue'
import Home from './views/pages/home.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            title: 'Главная',
            component: Home
        },
        {
            path: '/blogs',
            name: 'blogs.index',
            title: 'Блог',
            component: Blog
        },
        {
            path: '/posts',
            name: 'posts.index',
            title: 'Блог',
            component: Posts
        },
    ]
})

export default router