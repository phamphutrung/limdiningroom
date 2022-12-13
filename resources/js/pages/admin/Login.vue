<template>
    <div class="container bg-secondary">
        <div class="row">
            <div class="col-sm-9 col-md-6 col-lg-3"
                style="position: fixed; left: 50%; transform: translate(-50%, -50%); top: 30%;">
                <div class="p-4 form-login bg-light">
                    <router-link :to="{ name: 'home' }">
                        <h4 class="fw-bold"><a class="text-dark">LOGO</a></h4>
                    </router-link>
                    <form @submit.prevent="handleLogin">
                        <v-text-field clearable label="Username" variant="outlined"
                            v-model="form.username"></v-text-field>
                        <v-text-field clearable label="Password" variant="outlined" type="password"
                            v-model="form.password"></v-text-field>
                        <button :class="{ 'btn-disabled': (! form.username == null || form.password == null) }"
                            type="submit" class="btn-global w-100 text-uppercase border">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import request from '../../services/request.js';

export default {
    data() {
        return {
            form: {
                username: null,
                password: null
            },
        }
    },

    methods: {
        async handleLogin() {
            await request.post(this.$dataUrl.login, this.form).then((res) => {
                this.$auth.userLogin = res.data.payload;
                this.$router.push({ name: 'admin' })
            })
        }
    },

    created() {
        console.log(this.$auth);
        if (this.$auth.userLogin) {
            this.$router.push({ name: 'admin' })
        }
    }
}
</script>

<style>
.form-login {
    box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
</style>
