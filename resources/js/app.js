

import './bootstrap';
/** ant design */
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';

import { createApp } from 'vue/dist/vue.esm-bundler.js'

import App from './App.vue'
import router from './router';


const app = createApp({})

app.config.globalProperties.$auth = window.auth;
app.config.globalProperties.$dataUrl = window.dataUrl;



import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'



// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../css/style.css';
import axios from 'axios';





const vuetify = createVuetify({
    components,
    directives,
})

app.use(VueViewer)
app.use(router)
app.use(vuetify)
app.use(Antd)
app.component('app', App)
app.mount('#app')

