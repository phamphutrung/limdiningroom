<template>
    <div class="cover-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-light text-center wow zoomIn" data-wow-delay="0.1s" style="margin-top: 27%;">
                    <p class="text-light m-0" style="font-family: 'Kristi'; font-size: 3em;">Find Us</p>
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
                <div class="col-md-5 mx-auto text-center wow zoomIn" data-wow-delay="0.8s">
                    <h2 class="d-inline-block" style="font-size: 48px; letter-spacing: .07em;">Talk With Us</h2>
                    <div class="line"></div>
                    <v-text-field label="Name" variant="underlined"></v-text-field>
                    <v-text-field label="Email" variant="underlined"></v-text-field>
                    <v-textarea label="Message" variant="underlined"></v-textarea>
                    <button class="text-uppercase border btn-global"
                        style="font-size: 13px; letter-spacing: .2em;">Send</button>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
.cover-page {
    background-image: url(https://demos.pixelgrade.com/osteria/wp-content/uploads/sites/25/2016/10/frontpage-hero-01-1.jpg);
    background-position: center;
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
    background-color: rgba(102, 100, 148, 0.301);
    z-index: -1;
}

.section {
    margin: 5rem 0;
}
</style>
