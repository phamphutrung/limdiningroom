<template>
    <div class="cover-page">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center wow fadeInLeft justify-center d-flex align-items-center">
                    <h1 class="text-light text-cover">Our menus</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="section wow fadeInRight">
            <div class="row text-center">
                <div class="col-md-5 mx-auto">
                    <h2 class="d-inline-block" style="font-size: 48px; letter-spacing: .07em;">Eat what you love</h2>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <v-tabs fixed-tabs bg-color="" v-model="tab">
                    <v-tab v-for="item in items" :key="item" :value="item">
                        {{ item }}
                    </v-tab>
                </v-tabs>
                <div class="col-md-6 text-center mx-auto mt-6 text-muted"
                    style="font-style: italic; letter-spacing: .05em; font-weight: 300;">
                    <p> Our menu offers modern dishes, inspired by historic Italian gastronomy. The A la Carte menu is
                        available throughout lunch and dinner with an additional set lunch menu offered Monday to Friday
                        excluding Public holidays</p>
                </div>
                <v-window v-model="tab">
                    <v-window-item :value="'food'">
                        <v-card color="basil" flat>
                            <v-card-text>
                                <div class="cover-menu cover-mn-1">

                                </div>
                                <div class="container mt-16 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row gx-5 gy-4">
                                        <div class="col-lg-6 mb-10" v-for="food, index in foods" :key="index">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    :src="food.image ? '/storage/' + food.image : '/static/img/defaultImage.jpg'"
                                                    alt="" style="width: 8.7em;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5
                                                        class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                        <span>{{ food.name }}</span>
                                                        <span class="">{{ `${food.price}` }} <small
                                                                class="text-muted">{{ food.currency
                                                                }}</small></span>

                                                    </h5>
                                                    <small class="text-detail"
                                                        style="font-weight: 300; font-size: .9em;">{{ food.sub_desc }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-window-item>
                    <v-window-item :value="'wine'">
                        <v-card color="basil" flat>
                            <v-card-text>
                                <div class="cover-menu cover-mn-2">

                                </div>
                                <div class="container mt-16 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row g-4">
                                        <div class="col-lg-6 mb-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                                    alt="" style="width: 110px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5
                                                        class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                        <span>Chicken Burger</span>
                                                        <span class="">$115</span>
                                                    </h5>
                                                    <small class="text-detail" style="font-weight: 300;">Ipsum ipsum
                                                        clita erat
                                                        amet dolor justo
                                                        diam</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                                    alt="" style="width: 110px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5
                                                        class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                        <span>Chicken Burger</span>
                                                        <span class="">$115</span>
                                                    </h5>
                                                    <small class="text-detail" style="font-weight: 300;">Ipsum ipsum
                                                        clita erat
                                                        amet dolor justo
                                                        diam</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                                    alt="" style="width: 110px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5
                                                        class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                        <span>Chicken Burger</span>
                                                        <span class="">$115</span>
                                                    </h5>
                                                    <small class="text-detail" style="font-weight: 300;">Ipsum ipsum
                                                        clita erat
                                                        amet dolor justo
                                                        diam</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    src="http://www.nicdarkthemes.com/themes/restaurant/wp/demo/restaurant/wp-content/uploads/sites/2/2019/01/product-01.jpg"
                                                    alt="" style="width: 110px;">
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5
                                                        class="d-flex ms-0 m-1 justify-content-between border-bottom pb-2">
                                                        <span>Chicken Burger</span>
                                                        <span class="">$115</span>
                                                    </h5>
                                                    <small class="text-detail" style="font-weight: 300;">Ipsum ipsum
                                                        clita erat
                                                        amet dolor justo
                                                        diam</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-window-item>
                </v-window>
            </div>
        </div>
    </div>
</template>

<script>
import request from '../../services/request';
export default {
    data() {
        return {
            tab: 'food',
            items: [
                'food', 'wine'
            ],
            foods: [],
        }
    },
    methods: {
        async getListFood() {
            await request.get(this.$dataUrl.foodList).then((res) => {
                this.foods = res.data.payload.data;
            })
            console.log(this.foods);
        },
    },
    created() {
        this.getListFood()
    },
}
</script>

<style scoped>
.cover-menu {
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    height: 23vh;
    z-index: 2;
}

.cover-menu::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(8, 56, 146, 0.199);
    z-index: -1;
}

.cover-mn-1 {
    background-image: url('/static/img/cover-food-menu.jpg');
    background-position: 0 -100px;
}

.cover-mn-2 {
    background-image: url('/static/img/cover-wine.jpg');
    background-position: 0 -480px;
}
</style>
