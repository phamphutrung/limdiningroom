

import './bootstrap';

/** ant design */
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';

/** vuetify */
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '../css/style.css';

/** vue toast */
import Toaster from '@meforma/vue-toaster';

// editor
import CKEditor from '@ckeditor/ckeditor5-vue';

import App from './App.vue'
import router from './router';

import { createApp } from 'vue/dist/vue.esm-bundler.js'

const app = createApp(App)

const vuetify = createVuetify({
    components,
    directives,
})

app.config.globalProperties.$auth = window.auth;
app.config.globalProperties.$dataUrl = window.dataUrl;

app.use(CKEditor)
app.use(router)
app.use(vuetify)
app.use(Antd)
app.use(Toaster,
        {
            duration: 4000,
            position: 'top',
            max: 3
        }
    )

// app.component('app', App)

app.mount('#app')
