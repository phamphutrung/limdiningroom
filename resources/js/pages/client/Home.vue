<template>
    <div>
        <div style="position: relative; width: 90%; margin: 0 auto;" class="wow fadeIn" data-wow-delay="">
            <v-carousel hide-delimiters style="height: 644px;">
                <template v-slot:prev="{ props }">
                    <span class="h-100 d-flex align-items-center btn-left btn-arrow">
                        <svg @click="props.onClick" class="text-light" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="57px"
                            viewBox="0 0 59.723 206.221" enable-background="new 0 0 59.723 206.221" xml:space="preserve"
                            fill="#ffffff">
                            <polygon points="3.512,206.221 0,204.305 55.168,103.175 0.132,1.91 3.647,0 59.723,103.179">
                            </polygon>
                        </svg>
                    </span>
                </template>
                <v-carousel-item src="/static/img/cover-home.jpg" cover></v-carousel-item>
                <v-carousel-item height="100%"
                    src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2017/01/gastronomika-2-13.jpg"
                    cover></v-carousel-item>
                <v-carousel-item
                    src="https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01.jpg"
                    cover></v-carousel-item>
                <template v-slot:next="{ props }">
                    <span class="h-100 d-flex align-items-center btn-right btn-arrow">
                        <svg @click="props.onClick" class="text-light" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="57px"
                            viewBox="0 0 59.723 206.221" enable-background="new 0 0 59.723 206.221" xml:space="preserve"
                            fill="#ffffff">
                            <polygon points="3.512,206.221 0,204.305 55.168,103.175 0.132,1.91 3.647,0 59.723,103.179">
                            </polygon>
                        </svg>
                    </span>
                </template>
            </v-carousel>
        </div>

        <!-- menu -->
        <!-- <div class="container py-6"> -->
        <div class="container my-15">
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297868488_125254903573531_470806379585356551_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_ohc=kZIGb5Jg74QAX8HZ83Y&_nc_ht=scontent-hkg4-1.xx&oh=00_AfAzUHZx6lJP3KR5sjLeepCrIqbWypiRWvqo6W_PsruGMw&oe=63962815"
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
                                        src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/297632175_125254916906863_8295190471366431834_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=0sPsluE_9oQAX9J636Z&_nc_ht=scontent-hkg4-2.xx&oh=00_AfCN__ScxSfrs_1jd2CC98WQRHDxYhVj8nQkXKggiKWVNA&oe=6394A379"
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
                                        src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/297632175_125254916906863_8295190471366431834_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=0sPsluE_9oQAX9J636Z&_nc_ht=scontent-hkg4-2.xx&oh=00_AfCN__ScxSfrs_1jd2CC98WQRHDxYhVj8nQkXKggiKWVNA&oe=6394A379"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297955878_125255006906854_4923308110319983165_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=zXt8jpKUsqAAX9j6cS3&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfAyxNxpV16vvIad8Ac_wASXX16__nEegUTrxUPibj6wxw&oe=63962B1A"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297955878_125255006906854_4923308110319983165_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=zXt8jpKUsqAAX9j6cS3&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfAyxNxpV16vvIad8Ac_wASXX16__nEegUTrxUPibj6wxw&oe=63962B1A"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                        src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
            <div class="text-center mt-6 wow fadeInUp">
                <router-link :to="{ name: 'menu' }">
                    <button class="btn-global border text-uppercase">SEE MORE</button>
                </router-link>
            </div>
        </div>
        <!-- </div> -->
        <!-- end menu -->

        <reserve></reserve>

        <about></about>

        <!-- feedback -->
        <div class="container section">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="m-0" style="font-family: kristi; font-size: 5em;">"</h1>
            </div>
            <div class="row mx-auto wow fadeInUp">
                <v-carousel height="300" hide-delimiters>
                    <template v-slot:prev="{ props }">
                        <span class="h-100 d-flex align-items-center btn-arrow-normal btn-left">
                            <svg @click="props.onClick" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="57px"
                                viewBox="0 0 59.723 206.221" enable-background="new 0 0 59.723 206.221"
                                xml:space="preserve" fill="#000">
                                <polygon
                                    points="3.512,206.221 0,204.305 55.168,103.175 0.132,1.91 3.647,0 59.723,103.179">
                                </polygon>
                            </svg>
                        </span>
                    </template>
                    <v-carousel-item v-for="(n, i) in 2" :key="i">
                        <!-- <v-sheet height=""> -->
                        <div style="height: 100%;">
                            <div class="d-flex text-center justify-content-center align-items-center">
                                <div class="w-75">
                                    <h1 class="mb-13">Lorem ipsum dolor sit .</h1>
                                    <div class="line"></div>
                                    <p class="mt-12" style="font-size: 1.5em; color: #5b5b5b; font-weight: 300;">Lorem
                                        ipsum dolor sit amet consectetur sit amet consectetur sit amet consectetur sit
                                        amet
                                        consectetur, adipisicing
                                        elit. Asperiores natus et
                                        nobis?</p>
                                    <p style="font-weight: 500; font-size: 1.3em;">Lorem ipsum dolor, sit amet
                                        consectetur adipisicing.</p>
                                </div>
                            </div>
                        </div>
                        <!-- </v-sheet> -->
                    </v-carousel-item>
                    <template v-slot:next="{ props }">
                        <span class="h-100 d-flex align-items-center btn-arrow-normal btn-right">
                            <svg @click="props.onClick" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="57px" height="57px"
                                viewBox="0 0 59.723 206.221" enable-background="new 0 0 59.723 206.221"
                                xml:space="preserve" fill="#000">
                                <polygon
                                    points="3.512,206.221 0,204.305 55.168,103.175 0.132,1.91 3.647,0 59.723,103.179">
                                </polygon>
                            </svg>
                        </span>
                    </template>
                </v-carousel>
            </div>
        </div>
        <!-- end feedback -->

        <!-- especial -->
        <div class="container section wow fadeInUp">
            <div class="text-center">
                <h1 class="mb-5">Most Especial Items</h1>
            </div>
            <div class="line"></div>
            <div class="row mt-15">
                <div class="col-md-4 mb-5">
                    <div class="box-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="wp-image-box">
                            <img src="/static/img/especial-1.jpg" alt="">
                        </div>
                        <div class="content-box">
                            <p class="title-box">
                                This is name item
                            </p>
                            <p class="sub-title-box">
                                This is sub name item
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="box-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="wp-image-box">
                            <img src="/static/img/especial-3.jpg" alt="">
                        </div>
                        <div class="content-box">
                            <p class="title-box">
                                This is name item
                            </p>
                            <p class="sub-title-box">
                                This is sub name item
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="box-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="wp-image-box">
                            <img src="/static/img/especial-2.jpg" alt="">
                        </div>
                        <div class="content-box">
                            <p class="title-box">
                                This is name item
                            </p>
                            <p class="sub-title-box">
                                This is sub name item
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end especial -->
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
    data() {
        return {
            slides: [
                'First',
                'Second',
                'Third',
                'Fourth',
                'Fifth',
            ],

        }
    },
}
</script>

<style scoped>
.box-item {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    border-radius: .5em;
    transition: .3s;
}

.box-item .wp-image-box {
    width: 100%;
    height: 14rem;
    overflow: hidden;
}

.box-item .wp-image-box img {
    max-height: 100%;
    width: 100%;
    transition: 0.3s;
}

.box-item .content-box {
    padding: .9em;
}

.box-item .content-box p.title-box {
    font-weight: 400;
    font-size: 1.4em;
    margin-bottom: .5em;
    text-transform: uppercase;
    letter-spacing: .04em;
}

.box-item .content-box p.sub-title-box {
    color: rgb(92, 96, 99);
    letter-spacing: .05em;
}

.box-item:hover {
    box-shadow: none;
    transform: translateY(3px);
}

.box-item .wp-image-box:hover img {
    transform: scale(103%);
}
</style>
