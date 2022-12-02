import { createRouter, createWebHashHistory, createMemoryHistory, createWebHistory } from 'vue-router';

import WebLayout from './layouts/WebLayout.vue';
import Home from './pages/Home.vue';
import Menu from './pages/Menu.vue';
import Contact from './pages/Contact.vue';
import Reserve from './pages/Reserve.vue';
import About from './pages/About.vue';
import Gallery from './pages/Gallery.vue';
// import Login from './pages/Login.vue';
import NotFound from './pages/NotFound.vue';

const routes = [
    {
        path: '/',
        component: WebLayout,
        name: 'home',
        redirect: '/home',
        children: [
            {
                path: '/',
                component: Home,
                name: 'home',
                alias: ['/home', '']
            },
            {
                path: '/menu',
                name: 'menu',
                component: Menu
            },
            {
                path: '/book-a-table',
                name: 'bookTable',
                component: Reserve
            },
            {
                path: '/gallery',
                name: 'gallery',
                component: Gallery
            },
            {
                path: '/contact',
                name: 'contact',
                component: Contact
            },
            {
                path: '/about',
                name: 'about',
                component: About
            }
        ],
    },
    {
        path: '/:pathMatch(.*)*', component: NotFound
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { top: 0 }
    },

})

export default router;
