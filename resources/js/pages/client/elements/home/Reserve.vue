<template>
    <div class="container-fluid position-relative section">
        <div class="cover-reserve d-none d-sm-none d-md-flex align-items-center justify-content-center wow zoomIn"
            data-wow-delay="0.5s" data-wow-duration="1.3s">
            <div>
                <h3 class="text-white text-center m-0 p-0" style="letter-spacing: .1em;">
                    <p>Lorem ipsum it amet,</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi.</p>
                </h3>
            </div>
        </div>
        <div class="container content-reserve">
            <div class="row text-center d-block d-sm-none wow fadeInLeft">
                <div class="col-md-5 mx-auto">
                    <h2 class="d-inline-block" style="font-size: 48px; letter-spacing: .07em;">Book a table</h2>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 detail-reserve">
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.3s">
                        <a-select :bordered="false" v-model:value="amountPerson" class="select-person" @change="{}">
                            <a-select-option value="1">1 Person</a-select-option>
                            <a-select-option value="2">2 Person</a-select-option>
                            <a-select-option value="3">3 Person</a-select-option>
                            <a-select-option value="4">4 Person</a-select-option>
                            <a-select-option value="5">5 Person</a-select-option>
                            <a-select-option value="6">6 Person</a-select-option>
                            <a-select-option value="7">7 Person</a-select-option>
                            <a-select-option value="8">8 Person</a-select-option>
                            <a-select-option value="9">9 Person</a-select-option>
                            <a-select-option value="10">10 Person</a-select-option>
                        </a-select>
                    </div>
                    <div class="mx-3  text-uppercase sub-text wow zoomIn" data-wow-delay="0.4s">For</div>
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.5s">
                        <a-date-picker v-model:value="date" :bordered="false" :style="{ width: '100%' }" />
                    </div>
                    <div class="mx-3  text-uppercase sub-text wow zoomIn" data-wow-delay="0.6s">At</div>
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.7s">
                        <a-date-picker v-model:value="time" :bordered="false" :picker="'time'"
                            :style="{ width: '100%' }" />
                    </div>
                    <div class="item-reserve wow fadeInDown" data-wow-delay="0.8s">
                        <router-link
                            :to="{ name: 'bookTable', query: { amount: amountPerson, date: date, time: time } }">
                            <button class="btn-global border">RESERVE</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            amountPerson: '1',
            date: null,
            time: null,
        }
    },
}
</script>

<style scoped>
/* ** reserve ** */
.cover-reserve {
    margin: 0 0.5em;
    background-image: url('/static/img/cover-reserve.jpg');
    background-position: 0 -160px;
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    height: 30em;
    z-index: 2;
}

.cover-reserve::after {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(102, 100, 148, 0.1);
    z-index: -1;
}

.content-reserve {
    left: 50%;
    z-index: 36;
    transform: translateX(-50%);
    bottom: -76px;
    background-color: white;
    position: absolute;
    padding: 4em;
}

.detail-reserve {
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.item-reserve {
    margin: 0 .9em;
}

.content-reserve .detail-reserve .item-reserve .select-person {
    width: 11em;
}

@media (max-width: 1205px) {
    .content-reserve .detail-reserve .sub-text {
        display: none;
    }

    .content-reserve .detail-reserve .select {
        width: 100%;
    }

    .content-reserve {
        padding: 2em;
        position: relative;
        transform: translateX(0%);
        left: 0;
    }

    .detail-reserve {
        display: block;
    }

    .select-person {
        width: 100% !important;
    }

    .item-reserve {
        margin: 1em 0;
    }
}
</style>
