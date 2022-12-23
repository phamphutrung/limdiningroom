<template>
    <div class="cover-page">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center fadeInDown wow justify-center d-flex align-items-center">
                    <p class="text-light text-cover" style="font-size: 6rem;">Gallery</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <!-- <div class="row mt-6 d-flex justify-center">
            <div class="col-md-5 col-sm-5 col-lg-4 text-center">
                <v-tabs fixed-tabs bg-color="" v-model="tab">
                    <play-circle-outlined class="m-4" @click="show" style="font-size: 1.5em;" />
                    <v-tab v-for="item in items" :key="item" :value="item">
                        {{ item }}
                    </v-tab>
                </v-tabs>
            </div>
        </div> -->
        <div class="row mt-6 d-flex justify-center wow fadeInUp" data-wow-delay="0.01s">
            <div class="col-md-5 col-sm-5 col-lg-4 text-center">
                <play-circle-outlined class="m-4" @click="show" style="font-size: 1.5em;" />
                <!-- <h1>Gallery</h1> -->
                <div class="line"></div>
            </div>
        </div>
        <!-- <v-window v-model="tab">
            <v-window-item :value="'food'">
                <div class="images section" v-viewer>
                    <div class="row mx-5">
                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" v-for="(image, index) in images1"
                            :key="index">
                            <div class="image-gallery">
                                <img class="" :data-wow-delay="`0.${index + 1}s`"
                                    :style="{ objectFit: 'cover', overflow: 'hidden' }"
                                    :src="'/storage/' + image.image">
                                <div class="title-gallery">
                                    <p class="m-1 ms-2">{{ image.title }}</p>
                                    <p class="m-1 ms-2 text-detail">{{ image.sub_title }}</p>
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
                                :style="{ objectFit: 'cover', overflow: 'hidden' }" :src="'/storage/' + image.image">
                        </div>
                    </div>
                </div>
            </v-window-item>
        </v-window> -->
        <div class="mt-10 mb-16" v-viewer>
            <div class="row mx-5">
                <div class="col-lg-3 col-md-4 col-sm-6" v-for="(gallery, index) in galleries" :key="index">
                    <div class="image-gallery">
                        <img class="wow fadeInUp" :data-wow-delay="`0.${index + 1}s`"
                            :style="{ objectFit: 'cover', overflow: 'hidden' }" :src="'/storage/' + gallery.image">
                        <div class="title-gallery">
                            <p class="m-1 ms-2">{{ gallery.title }}</p>
                            <p class="m-1 ms-2 text-detail">{{ gallery.sub_title }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { PlayCircleOutlined } from '@ant-design/icons-vue';
import request from '../../services/request';
export default {
    components: {
        PlayCircleOutlined
    },
    data() {
        return {
            // tab: 'food',
            // items: [
            //     'food', 'env'
            // ],
            // images1: [
            //     {
            //         title: "adasda",
            //         sub_title: "dsdsd",
            //         image: "/static/img/logo-gold.png"
            //     }
            // ],
            // images2: [
            //     "https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/315721503_156068883841576_8074411728748525202_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=28Gw3cM9FggAX_CqWJr&_nc_ht=scontent-sin6-2.xx&oh=00_AfAV0nkkPe1sqQvnW7d1EjoueN9PDKkX2SaH_CFDG-NpLw&oe=6394BBD1",
            //     "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/315704091_156068833841581_1841167127497613186_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=q90GVnBG-AwAX_r-NT9&_nc_ht=scontent-tpe1-1.xx&oh=00_AfDCHOUJdlviCgSxBHnqNgQ9AG2OOWHu00zdSJXHQ_lEmQ&oe=6396C28B",
            //     "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/312799635_146473178134480_2208022492062408230_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_ohc=Nn439KOFgWoAX-r2ZBg&_nc_ht=scontent-tpe1-1.xx&oh=00_AfBvEZPeXWF6Vg2zQ-KiOwOV5OsbAw2sA5x9ZZw4XTWz_A&oe=63980DD7",
            //     "https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/313132589_146473124801152_4615414757975818487_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_ohc=cpUfhySTZcgAX9wYCdj&_nc_ht=scontent-tpe1-1.xx&oh=00_AfD15FKsFIGiw7QrlDpB0dhqfimK0UXofP9QkFnpKlHrVg&oe=6397B947",
            // ]
            galleries: [],
        };
    },
    methods: {
        show() {
            let images = []
            this.galleries.forEach((item) => {
                images.push('/storage/' + item.image)
            })
            this.$viewerApi({
                images
            })
        },
        async getListGallery() {
            await request.get(this.$dataUrl.galleryList).then((res) => {
                this.galleries = res.data.payload
            })
        }
    },
    created() {
        this.getListGallery()
    }
}
</script>


<style scoped>
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

.image-gallery .title-gallery {
    width: 100%;
    position: absolute;
    right: calc(-100%);
    bottom: 0;
    background-color: rgb(255, 255, 255);
    z-index: 3;
    background-clip: content-box;
    transition: .6s;
}

.image-gallery:hover img {
    transform: scale(110%);
}

.image-gallery:hover .title-gallery {
    right: 0;
}

/* .image-gallery:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
} */

.image-gallery img {
    width: 100%;
    height: 100%;
    transition: all 1s;
}
</style>
