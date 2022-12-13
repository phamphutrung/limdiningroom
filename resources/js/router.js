import { createRouter, createWebHashHistory, createMemoryHistory, createWebHistory } from 'vue-router';

import WebLayout from './layouts/WebLayout.vue';
import AdminLayout from './layouts/AdminLayout.vue';
import Home from './pages/client/Home.vue';
import Menu from './pages/client/Menu.vue';
import Contact from './pages/client/Contact.vue';
import Reserve from './pages/client/Reserve.vue';
import About from './pages/client/About.vue';
import Event from './pages/client/Event.vue';
import Gallery from './pages/client/Gallery.vue';
import NotFound from './pages/client/NotFound.vue';
import Login from './pages/admin/Login.vue';

import MenuManager from './pages/admin/MenuManager.vue';
import GalleryManager from './pages/admin/GalleryManager.vue';

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
                path: '/event',
                name: 'event',
                component: Event
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
        path: '/admin',
        component: AdminLayout,
        name: 'admin',
        children: [
            {
                path: 'menu',
                name: 'menu-manager',
                component: MenuManager,
                alias: ['']
            },
            {
                path: 'gallery',
                name: 'gallery-manager',
                component: GalleryManager
            }
        ]
    },
    {
        path: '/admin/login',
        component: Login,
        name: 'login'
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
