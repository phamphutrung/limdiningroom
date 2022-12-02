<template>
    <footer class="container-fluid footer wow fadeInUp" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-sm-12 col-lg-3 mx-auto text-center">
                <div class="">
                    <img class="logo-footer" src="static/img/logo.jpg"
                        alt="                                                                                                                                                                            ">
                </div>
                <div class="info">
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-muted">96 Nguyen Thai Hoc, Hoi An, Vietnam</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-muted">+84 93 474 02 29</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-muted">contact@limdiningroom.com</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-muted">Open 08:00 - 22:00</p>
                    </div>
                </div>
                <div class="d-flex justify-content-around" style="margin-bottom: 5em;">
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-uppercase" style="font-weight: 400;">Facebook</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-uppercase" style="font-weight: 400;">Instagram</p>
                    </div>
                    <div class="m-0 p-0">
                        <p class="m-0 text-detail text-effect text-uppercase" style="font-weight: 400;">TRIP ADVISOR</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin-bottom: 5em;">
                    <div><img style="cursor: pointer" src="https://cf.shopee.vn/file/d4bbea4570b93bfd5fc652ca82a262a8">
                    </div>
                    <div><img style="cursor: pointer" src="https://cf.shopee.vn/file/a0a9062ebe19b45c1ae0506f16af5c16">
                    </div>
                    <div><img style="cursor: pointer" src="https://cf.shopee.vn/file/38fd98e55806c3b2e4535c4e4a6c4c08">
                    </div>
                    <div><img style="cursor: pointer" src="https://cf.shopee.vn/file/5e3f0bee86058637ff23cfdf2e14ca09">
                    </div>
                </div>
                <div>
                    <p style="font-weight: 300;">© 2022 Qode Interactive, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="text-dark back-to-top"><span class="material-icons">
            keyboard_arrow_up
        </span>
    </a>
</template>

<style scoped>
.info {
    margin-bottom: 5em;
}

.text-effect {
    font-weight: 300;
    cursor: pointer;
    display: inline-block;
    position: relative;
}

.text-effect::after {
    content: "";
    width: 0;
    height: 1px;
    background-color: #7e8383;
    position: absolute;
    top: 20px;
    left: 0;
    transition: all .4s;
}

.text-effect:hover::after {
    width: 100%;
}
</style>
