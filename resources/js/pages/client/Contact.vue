<template>
    <div class="cover-page">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center wow flipInX justify-center d-flex align-items-center">
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
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <h6><i class="fa-solid fa-phone"></i> Telephone</h6>
                    <p class="text-detail" style="font-weight: lighter;">+84 93 474 02 29</p>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <h6><i class="fa-solid fa-envelope"></i> E-mail</h6>
                    <p class="text-detail" style="font-weight: lighter;">contact@limdiningroom.com</p>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <h6><i class="fa-solid fa-earth-americas"></i> Website</h6>
                    <p class="text-detail" style="font-weight: lighter;">http://www.limdiningroom.com/</p>
                </div>
            </div>
        </div>
        <div class="row section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5427.195562057517!2d108.32408609898435!3d15.877250897274164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420f2b61849189%3A0xe4e3d806a872e7a2!2sLim%20Dining%20Room!5e0!3m2!1svi!2s!4v1671734248267!5m2!1svi!2s"
                width="100%" height="450" style="border:0; color: #000;o" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-md-5 mx-auto text-center wow zoomIn" data-wow-delay="0.3s">
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

