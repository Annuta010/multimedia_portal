

import Blog from './views/pages/blog/blog-index.vue'

const _router = {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            title: 'Главная',
            component: Blog
        },
        {
            path: '/blogs',
            name: 'blogs.index',
            title: 'Блог',
            component: Blog
        }
    ]
}

export default {
    _router
}