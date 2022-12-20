<template>
    <div class="cover-page mt-lg-9">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center wow zoomIn justify-center d-flex align-items-center">
                    <p class="text-light m-0" :style="{ fontFamily: 'Kristi', fontSizeize: '3em' }">Find Us</p>
                    <p class="text-light m-0 text-cover">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <h6><i class="fa-solid fa-location-dot"></i> Address</h6>
                    <p class="text-detail" style="font-weight: lighter;">96 Nguyen Thai Hoc, Hoi An, Vietnam</p>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <h6><i class="fa-solid fa-phone"></i> Telephone</h6>
                    <p class="text-detail" style="font-weight: lighter;">+84 93 474 02 29</p>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                    <h6><i class="fa-solid fa-envelope"></i> E-mail</h6>
                    <p class="text-detail" style="font-weight: lighter;">contact@limdiningroom.com</p>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                    <h6><i class="fa-solid fa-earth-americas"></i> Website</h6>
                    <p class="text-detail" style="font-weight: lighter;">http://www.limdiningroom.com/</p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-md-5 mx-auto text-center wow zoomIn" data-wow-delay="1.3s">
                    <h2 class="d-inline-block" style="font-size: 48px; letter-spacing: .07em;">Talk With Us</h2>
                    <div class="line"></div>
                    <v-text-field v-model="message.name" clearable label="Name" variant="underlined"></v-text-field>
                    <v-text-field v-model="message.email" clearable label="Email" variant="underlined"></v-text-field>
                    <v-textarea v-model="message.content" label="Message" variant="underlined"></v-textarea>
                    <button @click="sendMessage" class="text-uppercase border btn-global"
                        style="font-size: 13px; letter-spacing: .2em;">
                        <span v-show="!sending">SEND</span>
                        <half-circle-spinner :animation-duration="700" :size="20" v-if="sending" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { HalfCircleSpinner } from 'epic-spinners'
export default {
    components: {
        HalfCircleSpinner
    },
    data() {
        return {
            message: {
                name: '',
                email: '',
                content: ''
            },
            sending: false
        }
    },
    methods: {
        sendMessage() {
            this.sending = !this.sending
        }
    }
}
</script>

