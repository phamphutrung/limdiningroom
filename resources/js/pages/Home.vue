<template>
    <div>
        <v-carousel hide-delimiter-background style="height: 100vh;">
            <template v-slot:prev="{ props }">
                <left-outlined @click="props.onClick" class="text-light btn-slide" />
            </template>
            <v-carousel-item
                src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01.jpg"
                cover></v-carousel-item>
            <v-carousel-item
                src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01.jpg"
                cover></v-carousel-item>
            <v-carousel-item
                src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01.jpg"
                cover></v-carousel-item>
            <v-carousel-item
                src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01.jpg"
                cover>
            </v-carousel-item>
            <template v-slot:next="{ props }">
                <right-outlined @click="props.onClick" class="text-light btn-slide" />
            </template>
        </v-carousel>

        <!-- menu -->
        <div class="container py-6 section">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="line"></div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 active                                                                                                                                                                                                                                     "
                                data-bs-toggle="pill" href="#tab-1">
                                <!-- <i class="fa fa-hamburger fa-2x text-primary"></i> -->
                                <i class="fa-solid fa-utensils fa-2x text-dark"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Food Menu</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <!-- <i class="fa fa-utensils fa-2x text-primary"></i> -->
                                <i class="fa-solid fa-wine-glass fa-2x text-dark"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Wine Menu</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mx-auto" style="width: 95%;">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between pb-2"
                                                style="border-bottom: 1px dotted;">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>ssss
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid"
                                            src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                            alt="" style="width: 60px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="text-detail" style="font-weight: 300;">Ipsum ipsum clita erat
                                                amet dolor justo
                                                diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <router-link :to="{ name: 'menu' }">
                        <button class="btn-global border text-uppercase">SEE MORE</button>
                    </router-link>
                </div>
            </div>
        </div>

        <!-- end menu -->

        <reserve></reserve>
        <about></about>
    </div>
</template>
<script>
import About from './elements/home/About.vue';
import Reserve from './elements/home/Reserve.vue';
import { RightOutlined, LeftOutlined } from '@ant-design/icons-vue';

export default {
    components: {
        About,
        Reserve,
        RightOutlined,
        LeftOutlined
    },
}
</script>

<style scoped>
.btn-slide {
    font-size: 3em;
    transition: all ease-in 0.2s;
}
.btn-slide:hover {
    font-size: 3.2em;
}
</style>
