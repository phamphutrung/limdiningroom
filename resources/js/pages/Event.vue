<template>
    <div class="cover-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-light text-center wow zoomIn" data-wow-delay="0.1s"
                    style="margin-top: 27%;">
                    <p class="text-light m-0 text-cover">Event & Catering</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    </div>
</template>


<style scoped>
.cover-page {
    background-image: url(https://scontent-tpe1-1.xx.fbcdn.net/v/t39.30808-6/288719618_102460429186312_8201621591868181645_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_ohc=yAr3cnjduysAX_nKaYZ&_nc_oc=AQnRDzqrg3HepbCIeGRUoPIvLurXpBcEPNDzFIPSVba34WLzLuZdoUMvV5aVYp-j6ZdY7BXhJ8PO4C91_uoW73Qi&_nc_ht=scontent-tpe1-1.xx&oh=00_AfC1cVAeEjfbEZn9RZnY4nehgfCwLORWPU2Rb5Fzt6oCXQ&oe=6397EB38);
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
    background-color: rgba(39, 14, 133, 0.164);
    z-index: -1;
}

.section {
    margin: 5rem 0;
}
</style>
