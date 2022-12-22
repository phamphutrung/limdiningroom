<template>
    <div class="cover-page">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center animated fadeInRight justify-center d-flex align-items-center">
                    <p class="text-light text-cover">Reservations</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container wow fadeInLeft">
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
                        <a-select :bordered="false" v-model:value="amountPerson" class="select-person w-100 text-start"
                            placeholder="Person" @change="{}">
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
            value: null
        }
    },
    created() {
        console.log(this.$route)
        console.log(new Date(parseInt(this.$route.query.date)));
    },
}
</script>

