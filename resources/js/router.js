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

import FoodManager from './pages/admin/food/FoodManager.vue';
import FoodCreate from './pages/admin/food/FoodCreate.vue'
import GalleryManager from './pages/admin/gallery/GalleryManager.vue';
import GalleryCreate from './pages/admin/gallery/GalleryCreate.vue';
import WineManager from './pages/admin/wine/WineManager.vue';
import FeedBack from './pages/admin/FeedBack.vue';

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
                alias: ['/home', ''],
            },
            {
                path: '/menu',
                name: 'menu',
                component: Menu,
                meta: { title: 'Menu | Lim Dining Room' },
            },
            {
                path: '/book-a-table',
                name: 'bookTable',
                component: Reserve,
                meta: { title: 'Reserve | Lim Dining Room' },
            },
            {
                path: '/gallery',
                name: 'gallery',
                component: Gallery,
                meta: { title: 'Gallery | Lim Dining Room' },
            },
            {
                path: '/event',
                name: 'event',
                component: Event,
                meta: { title: 'Event | Lim Dining Room' },
            },
            {
                path: '/contact',
                name: 'contact',
                component: Contact,
                meta: { title: 'Contact | Lim Dining Room' },
            },
            {
                path: '/about',
                name: 'about',
                component: About,
                meta: { title: 'About | Lim Dining Room' },
            }
        ],
    },
    {
        path: '/admin',
        component: AdminLayout,
        name: 'admin',
        redirect: '/admin/food',
        children: [
            {
                path: 'food',
                name: 'food-manager',
                component: FoodManager,
                meta: { title: 'Lim | Food Management' }
            },
            {
                path: 'food/create',
                name: 'food-create',
                component: FoodCreate,
                meta: { title: 'Lim | Create Food' }
            },
            {
                path: 'food/edit/:id',
                name: 'food-edit',
                component: FoodCreate,
                meta: { title: 'Lim | Edit Food' }
            },
            {
                path: 'gallery',
                name: 'gallery-manager',
                component: GalleryManager,
                meta: { title: 'Lim | Gallery Management' },
            },
            {
                path: 'gallery/create',
                name: 'gallery-create',
                component: GalleryCreate,
                meta: { title: 'Lim | Create Gallery' },
            },
            {
                path: 'wine',
                name: 'wine-manager',
                component: WineManager,
                meta: { title: 'Lim | Wine Gallery' },
            },
            {
                path: 'gallery/edit/:id',
                name: 'gallery-edit',
                component: GalleryCreate,
                meta: { title: 'Lim | Edit Gallery' }
            },
            {
                path: 'feedback',
                name: 'feedback-manager',
                component: FeedBack,
                meta: { title: 'Lim | Feedback Management' }
            }
        ]
    },
    {
        path: '/admin/login',
        component: Login,
        name: 'login'
    },
    {
        path: '/:pathMatch(.*)*', component: NotFound, name: 'not-found'
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { top: 0 }
    },

})

router.beforeEach((to, from, next) => {
    document.title = to.meta.title || 'Lim Dining Room';
    next();
});

export default router;
