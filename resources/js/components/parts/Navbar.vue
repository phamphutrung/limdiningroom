<template>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand">
                <div>
                    <p class="text-uppercase m-0 text-dark fw-bold wow slideInLeft"
                        style="text-align: center; align-self: center;">logo</p>
                    <!-- <img src="static/img/logo.jpg" alt="Logo"> -->
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto animated fadeInDown">
                    <router-link :to="{ name: 'home' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'home' }">
                        <span class="text-menu">Home</span>
                    </router-link>
                    <router-link :to="{ name: 'menu' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'menu' }"><span
                            class="text-menu">Menu</span></router-link>
                    <router-link :to="{ name: 'bookTable' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'bookTable' }"><span
                            class="text-menu">Reserve</span></router-link>
                    <router-link :to="{ name: 'gallery' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'gallery' }"><span
                            class="text-menu">Gallery</span></router-link>
                    <router-link :to="{ name: 'event' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'event' }"><span
                            class="text-menu">Event</span></router-link>
                    <router-link :to="{ name: 'contact' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'contact' }"><span
                            class="text-menu">Contact</span></router-link>
                    <router-link :to="{ name: 'about' }" class="nav-item nav-link"
                        :class="{ active: this.$route.name == 'about' }"><span
                            class="text-menu">About</span></router-link>
                </div>
                <menu-outlined class="d-none d-sm-none d-md-block animated slideInRight" @click="toggleDrawer"
                    style="font-size: 2em;" />
            </div>
        </nav>
    </div>
    <span class="wp-btn-right">
        <button class="item-btn-right d-block ms-auto mb-2">
            <a href="tel:0934740229">
                <i class="fa-solid fa-phone-volume"></i> <span class="ms-2">Call Now</span>
            </a>
        </button>
        <button class="item-btn-right d-block ms-auto mb-2">
            <a href="http://fb.com/limdiningroom" target="_blank">
                <i class="fa-brands fa-facebook-f"></i> <span class="ms-2">Facebook</span>
            </a>
        </button>
    </span>
    <a-drawer v-model:visible="visible" class="custom-class" closeIcon="" placement="right"
        @after-visible-change="afterVisibleChange">
        <template #extra>
            <router-link v-if="this.$auth.userLogin" :to="{ name: 'admin' }"><v-btn>admin</v-btn></router-link>
            <svg class="mkdf-flip-icon mt-7 me-4" style="font-size: 2em; cursor: pointer; transform: rotate(180deg);" @click="toggleDrawer"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="41.521px" height="15.18px" viewBox="0 0 41.521 15.18" enable-background="new 0 0 41.521 15.18"
                xml:space="preserve">
                <polygon fill="#000000" points="41.521,7.094 1.9,7.094 8.287,0.707 7.58,0 0,7.58 7.58,15.18 8.288,14.473 1.925,8.094
	41.521,8.094 "></polygon>
            </svg>
        </template>

        <div class="row">
            <div class="col-12 mx-auto text-center">
                <div class="">
                    <img class="logo-footer mt-5" src="static/img/logo.jpg"
                        alt="                                                                                                                                                                            ">
                </div>
                <div class="info text-start">
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect">96 Nguyen Thai Hoc, Hoi An, Vietnam</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect">+84 93 474 02 29</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect">contact@limdiningroom.com</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect">Open 08:00 - 22:00</p>
                    </div>
                </div>
            </div>
        </div>
    </a-drawer>

</template>

<script>
import { MenuOutlined, FacebookOutlined } from '@ant-design/icons-vue';

export default {
    components: {
        MenuOutlined,
        FacebookOutlined
    }
    ,
    data() {
        return {
            visible: false
        }
    },
    methods: {
        toggleDrawer() {
            this.visible = !this.visible
        },
    },
}
</script>

<style>
.btn-book {
    color: var(--light);
    transition: 0.3s;
    letter-spacing: 0.2rem;
    padding: 10px 51px;
    background-color: rgba(201, 11, 11, 0);
}

.btn-book:hover {
    background-color: rgb(221, 220, 220);
    background-color: rgb(253, 246, 246);
    color: var(--dark);
    border: 1px solid var(--dark);
}

.text-menu {
    letter-spacing: .23em;
    font-weight: 500;
    /* font-family: ; */
}

.text-menu::after {
    content: "";
    width: 0%;
    height: 1px;
    background-color: black;
    position: absolute;
    top: 56px;
    left: 0;
    transition: all .3s;
}

.navbar-dark .navbar-nav .nav-link.active .text-menu::after {
    width: 100%;
}

.sticky-top .text-menu::after {
    top: 46px;
}

.nav-item.nav-link:hover .text-menu::after {
    width: 30%;
}

@media (max-width: 992px) {
    .text-menu::after {
        top: 32px;
    }

    .sticky-top .text-menu::after {
        top: 32px;
    }
}

/* .ant-drawer-body, .ant-drawer-header {
    background-color: rgb(9, 10, 10);
} */
.ant-drawer-header {
    border: none;
}

.wp-btn-right {
    position: fixed;
    top: 70%;
    right: 0;
    z-index: 100;

}

.wp-btn-right .item-btn-right {
    padding: .8em 1.1em;
    min-width: 3.5em;
    background-color: var(--dark);
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transition: all .6s;
}

.wp-btn-right .item-btn-right a {
    color: white;
    transition: all .6s;
    font-size: 1.1em;
}

.wp-btn-right .item-btn-right a span {
    display: none;
    transition: all .1s;
}

.wp-btn-right .item-btn-right:hover {
    background-color: aliceblue;
}

.wp-btn-right .item-btn-right:hover a {
    color: #000000;
}

.wp-btn-right .item-btn-right:hover a span {
    display: inline;
}
</style>
