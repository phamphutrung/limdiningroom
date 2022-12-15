<template>
    <a-layout style="min-height: 100vh">
        <side-bar />
        <a-layout>
            <a-layout-header style="background: #fff; padding: 0">
            </a-layout-header>
            <a-layout-content style="margin: 0 16px">
                <router-view></router-view>
            </a-layout-content>
            <a-layout-footer style="text-align: center">
                Aff Design ©2022 Created by AffCoder
            </a-layout-footer>
        </a-layout>
    </a-layout>
</template>



<script lang="ts">
import SideBar from '../components/parts/SideBar.vue';

export default {
    components: {
        SideBar
    },
    data() {
        return {
            collapsed: false,
        }
    },
};
</script>

<style>
#components-layout-demo-side .logo {
    height: 32px;
    margin: 16px;
    background: rgba(255, 255, 255, 0.3);
}

.site-layout .site-layout-background {
    background: #fff;
}

[data-theme='dark'] .site-layout .site-layout-background {
    background: #141414;
}
</style>

