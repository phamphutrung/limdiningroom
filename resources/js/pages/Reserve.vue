<template>
    <div class="cover-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-light text-center animated fadeInRight" style="margin-top: 27%;">
                    <p class="text-light text-cover">Reservations</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    FOR US COOKING IS A FORM OF ART. DISCOVER A NEW DIMENSION OF DELICIOUS MEALS AND ORIGINAL DISHES.
                    BOOK YOUR TABLE TODAY!
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-md-5 mx-auto text-center">
                    <h2 class="d-inline-block" style="font-size: 48px; letter-spacing: .07em;">Book a table</h2>
                    <div class="line"></div>
                    <div class="border mb-6 px-3 py-1 wow fadeInUp" data-wow-delay="0.1s">
                        <a-input v-model:value="value" placeholder="Full Name" :bordered="false" class="w-100" />
                    </div>
                    <div class="border mb-6 px-3 py-1 wow fadeInUp" data-wow-delay="0.15s">
                        <a-input v-model:value="value" placeholder="Phone Number" :bordered="false" class="w-100" />
                    </div>
                    <div class="border mb-6 px-3 py-1 wow fadeInUp" data-wow-delay="0.2s">
                        <a-select :bordered="false" v-model:value="amountPerson" class="select-person w-100 text-start" placeholder="Person"
                            @change="{}">
                            <a-select-option value="1">1 Person</a-select-option>
                            <a-select-option value="2">2 Person</a-select-option>
                            <a-select-option value="3">3 Person</a-select-option>
                            <a-select-option value="4">4 Person</a-select-option>
                            <a-select-option value="5">5 Person</a-select-option>
                        </a-select>
                    </div>
                    <div class="border mb-6 px-3 py-1 wow fadeInUp" data-wow-delay="0.25s">
                        <a-date-picker v-model:value="date" :bordered="false" :style="{ width: '100%' }" />
                    </div>
                    <div class="border mb-6 px-3 py-1 wow fadeInUp" data-wow-delay="0.3s">
                        <a-date-picker :bordered="false" :picker="'time'" :style="{ width: '100%' }" />
                    </div>
                    <button class="text-uppercase border btn-global w-100 wow fadeInUp" data-wow-delay="0.35s"
                        style="font-size: 13px; letter-spacing: .2em;">Book a table</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import dayjs from 'dayjs';

export default {
    data() {
        return {
            amountPerson: this.$route.query.amount,
            date: null,

            // date: dayjs('2015-01-01', 'YYYY-MM-DD')
        }
    },
    created() {
        console.log(this.$route)
        console.log(new Date(parseInt(this.$route.query.date)));
        // this.date = new Date(parseInt(this.$route.query.date))
    },
}
</script>

<style scoped>
.cover-page {
    background-image: url(https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/312118896_146472838134514_3616999144811157247_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_ohc=F7oortnS0gEAX9dgY2k&_nc_ht=scontent-hkg4-1.xx&oh=00_AfCsab79hqsmrI1YiZzGCEOYubKK0h2MyrYnfLl9pspI2w&oe=63951490);
    background-position: 0 -128px;
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
    background-color: rgba(13, 11, 145, 0.199);
    z-index: -1;
}
</style>
