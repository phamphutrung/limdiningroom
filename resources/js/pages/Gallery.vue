<template>
    <div class="cover-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-light text-center wow zoomIn" data-wow-delay="0.1s"
                    style="margin-top: 27%;">
                    <p class="text-light text-cover" style="font-size: 6rem;">Gallery</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-6 d-flex justify-center">
            <div class="col-md-5 col-sm-5 col-lg-4 text-center">
                <v-tabs fixed-tabs bg-color="" v-model="tab">
                    <play-circle-outlined class="m-4" @click="show" style="font-size: 1.5em;" />
                    <v-tab v-for="item in items" :key="item" :value="item">
                        {{ item }}
                    </v-tab>
                </v-tabs>
            </div>
        </div>
        <v-window v-model="tab">
            <v-window-item :value="'food'">
                <div class="images section" v-viewer>
                    <div class="row mx-5">
                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" v-for="(image, index) in images1"
                            :key="index">
                            <div class="image-gallery">
                                <img class="" :data-wow-delay="`0.${index + 1}s`"
                                    :style="{ objectFit: 'cover', overflow: 'hidden' }" :src="image">
                                <div class="title-gallery">
                                    <p class="m-1 ms-2">Title image</p>
                                    <p class="m-1 ms-2 text-detail">Description image</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </v-window-item>
            <v-window-item :value="'env'">
                <div class="images section" v-viewer>
                    <div class="row mx-5">
                        <div class="col-lg-3 col-md-4 col-sm-6 image-gallery wow fadeInUp"
                            v-for="(image, index) in images2" :key="index">
                            <img class="img-fluid w-100 h-100" :data-wow-delay="`0.${index + 1}s`"
                                :style="{ objectFit: 'cover', overflow: 'hidden' }" :src="image">
                        </div>
                    </div>
                </div>
            </v-window-item>
        </v-window>

    </div>
</template>

<script>
import { PlayCircleOutlined } from '@ant-design/icons-vue';

export default {
    components: {
        PlayCircleOutlined
    },
    data() {
        return {
            tab: 'food',
            items: [
                'food', 'env'
            ],
            images1: [
                "https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/315721503_156068883841576_8074411728748525202_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=28Gw3cM9FggAX_CqWJr&_nc_ht=scontent-sin6-2.xx&oh=00_AfAV0nkkPe1sqQvnW7d1EjoueN9PDKkX2SaH_CFDG-NpLw&oe=6394BBD1",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/315704091_156068833841581_1841167127497613186_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=q90GVnBG-AwAX_r-NT9&_nc_ht=scontent-tpe1-1.xx&oh=00_AfDCHOUJdlviCgSxBHnqNgQ9AG2OOWHu00zdSJXHQ_lEmQ&oe=6396C28B",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/315708540_156068537174944_6174339043161374794_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=tZ4rdPXszjwAX_Ph5MC&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-tpe1-1.xx&oh=00_AfC4DhJHO3d32vd0dktGJBYuDFy1wKnHi9704PFFCHpPZw&oe=6396BF2F",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313293583_147510768030721_1421212071400898474_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=uA6HUxtMhOcAX_9ZUSj&_nc_ht=scontent-tpe1-1.xx&oh=00_AfByc5j6K8C1rZgyFEHUPy0Nj1WYAEVDMKpOvnz304y7hg&oe=639668B0",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313033502_147510431364088_2013833963407046724_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=lx3sH8oAam8AX-2FmzV&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD7xjvPd-gcGH7aaQ7tNmZI3sjLuzfFTkW9pFgzpF-LbQ&oe=6397717F",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313099464_146489248132873_5924546961099972048_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=URlsBNIJ6yoAX9rGbMC&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBfkuL7iDvpAIvy8L18Y8egGBdaFePytk1FyHqfgINq5A&oe=63965606",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/312799635_146473178134480_2208022492062408230_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=Nn439KOFgWoAX-r2ZBg&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBvEZPeXWF6Vg2zQ-KiOwOV5OsbAw2sA5x9ZZw4XTWz_A&oe=63980DD7",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313132589_146473124801152_4615414757975818487_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=cpUfhySTZcgAX9wYCdj&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD15FKsFIGiw7QrlDpB0dhqfimK0UXofP9QkFnpKlHrVg&oe=6397B947",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313033502_147510431364088_2013833963407046724_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=lx3sH8oAam8AX-2FmzV&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD7xjvPd-gcGH7aaQ7tNmZI3sjLuzfFTkW9pFgzpF-LbQ&oe=6397717F",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313099464_146489248132873_5924546961099972048_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=URlsBNIJ6yoAX9rGbMC&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBfkuL7iDvpAIvy8L18Y8egGBdaFePytk1FyHqfgINq5A&oe=63965606",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/312799635_146473178134480_2208022492062408230_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=Nn439KOFgWoAX-r2ZBg&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBvEZPeXWF6Vg2zQ-KiOwOV5OsbAw2sA5x9ZZw4XTWz_A&oe=63980DD7",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313132589_146473124801152_4615414757975818487_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=cpUfhySTZcgAX9wYCdj&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD15FKsFIGiw7QrlDpB0dhqfimK0UXofP9QkFnpKlHrVg&oe=6397B947",
            ],
            images2: [
                "https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/315721503_156068883841576_8074411728748525202_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=28Gw3cM9FggAX_CqWJr&_nc_ht=scontent-sin6-2.xx&oh=00_AfAV0nkkPe1sqQvnW7d1EjoueN9PDKkX2SaH_CFDG-NpLw&oe=6394BBD1",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/315704091_156068833841581_1841167127497613186_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=q90GVnBG-AwAX_r-NT9&_nc_ht=scontent-tpe1-1.xx&oh=00_AfDCHOUJdlviCgSxBHnqNgQ9AG2OOWHu00zdSJXHQ_lEmQ&oe=6396C28B",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/312799635_146473178134480_2208022492062408230_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=Nn439KOFgWoAX-r2ZBg&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBvEZPeXWF6Vg2zQ-KiOwOV5OsbAw2sA5x9ZZw4XTWz_A&oe=63980DD7",
                "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313132589_146473124801152_4615414757975818487_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=cpUfhySTZcgAX9wYCdj&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD15FKsFIGiw7QrlDpB0dhqfimK0UXofP9QkFnpKlHrVg&oe=6397B947",
            ]
        };
    },
    methods: {
        show() {
            this.$viewerApi({
                images: [...this.images1, ...this.images2],
            })
        },
    },
}
</script>


<style scoped>
.cover-page {
    background-image: url(https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313033502_147510431364088_2013833963407046724_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=fVsRBkqpUSoAX-UPGJY&tn=1lPppkSVnK9GXqDT&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD3RXQejB5h-odr4psAYjMW1Smvwi-vvBDoewHjM1YK2g&oe=6397717F);
    background-position: bottom;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    height: 70vh;
    z-index: 2;
}

.cover-page::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(175, 147, 22, 0);
    z-index: -1;
}

.image-gallery {
    position: relative;
    z-index: 2;
    margin-bottom: 1.5em;
    cursor: pointer;
    overflow: hidden;
    background-clip: content-box;
    box-sizing: border-box;
    height: 20em;
    transition: all 1s;
}

.image-gallery:hover .title-gallery {
    bottom: 0;
}

.image-gallery .title-gallery {
    width: 100%;
    height: 20%;
    position: absolute;
    bottom: -20%;
    left: 0;
    background-color: rgb(255, 255, 255);
    z-index: 3;
    background-clip: content-box;
    transition: 0.7s;
}

.image-gallery:hover img {
    transform: scale(110%);
}

.image-gallery img {
    width: 100%;
    height: 100%;
    transition: all 1s;
}
</style>
