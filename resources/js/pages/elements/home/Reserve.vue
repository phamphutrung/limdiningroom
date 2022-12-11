<template>
    <div class="container-fluid section position-relative">
        <div class="cover-reserve d-flex align-items-center justify-content-center wow zoomIn" data-wow-delay="0.5s">
            <div>
                <h3 class="text-white text-center" style="letter-spacing: .1em;">
                    <p>Lorem ipsum it amet,</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi.</p>
                </h3>
            </div>
        </div>
        <div class="container content-reserve">
            <div class="row">
                <div class="col-md-10 detail-reserve">
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.1s">
                        <a-select :bordered="false" v-model:value="amountPerson" class="select-person" @change="{}">
                            <a-select-option value="1">1 Person</a-select-option>
                            <a-select-option value="2">2 Person</a-select-option>
                            <a-select-option value="3">3 Person</a-select-option>
                            <a-select-option value="4">4 Person</a-select-option>
                            <a-select-option value="5">5 Person</a-select-option>

                        </a-select>
                    </div>
                    <div class="mx-3  text-uppercase sub-text wow zoomIn" data-wow-delay="0.2s">For</div>
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.2s">
                        <a-date-picker v-model:value="date" :bordered="false" :style="{ width: '100%' }" />
                    </div>
                    <div class="mx-3  text-uppercase sub-text wow zoomIn" data-wow-delay="0.2s">At</div>
                    <div class="border item-reserve px-3 py-1 wow fadeInDown" data-wow-delay="0.2s">
                        <a-date-picker v-model:value="time" :bordered="false" :picker="'time'"
                            :style="{ width: '100%' }" />
                    </div>
                    <div class="item-reserve wow fadeInDown" data-wow-delay="0.4s">
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
    background-image: url(https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/315904258_156068473841617_8380899548986618921_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_ohc=dsSrfhvaF_QAX9TF8MP&_nc_ht=scontent-hkg4-1.xx&oh=00_AfC9NBXUNRujnvBBG-TTMw3l9EjLAjpMHD1PjdDBr0b4CA&oe=63960F06);
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
