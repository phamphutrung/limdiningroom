

import './bootstrap';

/** ant design */
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';

/** upload image */
import { UploadMedia, UpdateMedia } from 'vue-media-upload';

/** vuetify */
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../css/style.css';

/** show image */
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'

/** vue toast */
import Toaster from '@meforma/vue-toaster';

import App from './App.vue'
import router from './router';

import { createApp } from 'vue/dist/vue.esm-bundler.js'


const app = createApp({})

app.config.globalProperties.$auth = window.auth;
app.config.globalProperties.$dataUrl = window.dataUrl;

const vuetify = createVuetify({
    components,
    directives,
})

app.use(VueViewer)
app.use(router)
app.use(vuetify)
app.use(Antd)
app.use(Toaster, {
    duration: 4000,
    position: 'top',
    max: 3
})
app.component('app', App)
app.component('upload-media' , UploadMedia);
app.component('update-media' , UpdateMedia);
app.mount('#app')

