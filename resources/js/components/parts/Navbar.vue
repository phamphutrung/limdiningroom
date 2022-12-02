<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-6 py-3 py-lg-0">
        <a href="" class="navbar-brand">
            <div>
                <h5 class="text-white animated slideInLeft">logo</h5>
                <!-- <img src="static/img/logo.jpg" alt="Logo"> -->
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0 pe-4 animated fadeInDown">
                <router-link :to="{ name: 'home' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'home' }">
                    <span class="text-menu">Home</span>
                </router-link>
                <router-link :to="{ name: 'menu' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'menu' }"><span class="text-menu">Menu</span></router-link>
                <router-link :to="{ name: 'bookTable' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'bookTable' }"><span
                        class="text-menu">Reserve</span></router-link>
                <router-link :to="{ name: 'gallery' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'gallery' }"><span
                        class="text-menu">Gallery</span></router-link>
                <router-link :to="{ name: 'contact' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'contact' }"><span
                        class="text-menu">Contact</span></router-link>
                <router-link :to="{ name: 'about' }" class="nav-item nav-link"
                    :class="{ active: this.$route.name == 'about' }"><span class="text-menu">About</span></router-link>
            </div>
            <router-link :to="{ name: 'bookTable' }"> <button
                    class="text-uppercase btn-book border animated slideInRight"
                    style="font-size: 13px; letter-spacing: .2em;">RESERVE</button></router-link>
        </div>
    </nav>
</template>

<style>
.btn-book {
    color: var(--light);
    transition: 0.3s;
    letter-spacing: 0.2rem;
    padding: 10px 51px;
    background-color: rgb(0, 0, 0, 0);
}

.btn-book:hover {
    background-color: rgb(253, 246, 246);
    color: var(--dark);
    border: 1px solid var(--dark);
}

.text-menu {
    letter-spacing: .16em;
    font-weight: bolder;
}

.text-menu::after {
    content: "";
    width: 0;
    height: 1px;
    background-color: var(--light);
    position: absolute;
    top: 54px;
    left: 0;
    transition: all .6s;
}

.navbar-dark .navbar-nav .nav-link.active .text-menu::after {
    width: 100%;
}

.sticky-top .text-menu::after {
    top: 40px;
}

.nav-item.nav-link:hover .text-menu::after {
    width: 50%;
}

@media (max-width: 992px) {
    .text-menu::after {
        top: 32px;
    }

    .sticky-top .text-menu::after {
        top: 32px;
    }
}
</style>
