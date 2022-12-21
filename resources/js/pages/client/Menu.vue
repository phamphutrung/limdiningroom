<template>
    <div class="cover-page mt-lg-9">
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
                                <div class="container section wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row g-4">
                                        <div class="col-lg-6 mb-6">
                                            <div class="d-flex align-items-center">
                                                <img class="flex-shrink-0 img-fluid"
                                                    src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                                    src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297868488_125254903573531_470806379585356551_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_ohc=kZIGb5Jg74QAX8HZ83Y&_nc_ht=scontent-hkg4-1.xx&oh=00_AfAzUHZx6lJP3KR5sjLeepCrIqbWypiRWvqo6W_PsruGMw&oe=63962815"
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
                                                    src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/297632175_125254916906863_8295190471366431834_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=0sPsluE_9oQAX9J636Z&_nc_ht=scontent-hkg4-2.xx&oh=00_AfCN__ScxSfrs_1jd2CC98WQRHDxYhVj8nQkXKggiKWVNA&oe=6394A379"
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
                                                    src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297955878_125255006906854_4923308110319983165_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=zXt8jpKUsqAAX9j6cS3&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfAyxNxpV16vvIad8Ac_wASXX16__nEegUTrxUPibj6wxw&oe=63962B1A"
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
                                                    src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                                    src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/297286303_125255040240184_821288380641610594_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=iHoRxYEAJtEAX-KpJYe&_nc_ht=scontent-hkg4-2.xx&oh=00_AfAspHSkjKm0A3XnNn7cumWJoXxF-bBbOdfQTXY0htIMDQ&oe=63952410"
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
                                                    src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/297884904_125255010240187_5869468143190977924_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=gYVp2zD_iaoAX8d13Z_&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-hkg4-1.xx&oh=00_AfBEZyj40kSCsByoQJZjoEX4lEgNyLjYqrnRjHFp5a8f2g&oe=639591B4"
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
                                                    src="https://scontent-hkg4-2.xx.fbcdn.net/v/t39.30808-6/297286303_125255040240184_821288380641610594_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=iHoRxYEAJtEAX-KpJYe&_nc_ht=scontent-hkg4-2.xx&oh=00_AfAspHSkjKm0A3XnNn7cumWJoXxF-bBbOdfQTXY0htIMDQ&oe=63952410"
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
                    <v-window-item :value="'wine'">
                        <v-card color="basil" flat>
                            <v-card-text>
                                <div class="cover-menu cover-mn-2">

                                </div>
                                <div class="container section wow fadeInUp" data-wow-delay="0.1s">
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
export default {
    data() {
        return {
            tab: 'food',
            items: [
                'food', 'wine'
            ],
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        }
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
