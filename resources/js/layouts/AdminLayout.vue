<template>
    <div v-if="this.$auth.userLogin">
        <h1>{{ this.$auth.userLogin.name }}</h1>
        <h3>{{ this.$auth.userLogin.username }}</h3>
        <h6>{{ this.$auth.userLogin.email }}</h6>
        <button @click="handleLogout">logout</button>
    </div>
    <router-view></router-view>
    <footer-app></footer-app>
</template>

<script>
import axios from 'axios';
import FooterApp from '../components/parts/Footer.vue';
import Navbar from '../components/parts/Navbar.vue';
// import { UpOutlined } from '@ant-design/icons-vue';
export default {
    components: {
        FooterApp,
        Navbar,
        // UpOutlined
    },
    methods: {
        handleLogout() {
            axios.post('/admin/logout').then((res) => {
                this.$auth.userLogin = false
                this.$router.push({ name: 'login' })
            });
        }
    },
    created() {
        console.log(this.$auth);
        if (!this.$auth.userLogin) {
            this.$router.push({name:'login'})
        }
    }
}
</script>

