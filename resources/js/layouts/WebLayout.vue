<template>
    <navbar></navbar>
    <router-view></router-view>
    <footer-app></footer-app>
</template>

<script>
import FooterApp from '../components/parts/Footer.vue';
import Navbar from '../components/parts/Navbar.vue';
// import { UpOutlined } from '@ant-design/icons-vue';

export default {
    components: {
        FooterApp,
        Navbar,
        // UpOutlined
    }
}
</script>

