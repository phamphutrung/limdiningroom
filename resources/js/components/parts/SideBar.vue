<template>
    <a-layout-sider v-model:collapsed="collapsed" collapsible collapsedWidth="4.6em" width="15em">
        <div class="logo text-light text-center fw-bold py-3 px-4">
            <router-link :to="{ name: 'home' }">
                <img src="/static/img/logo-white.png" alt="logo" style="width: 100%;">
            </router-link>
        </div>
        <a-divider style="height: 1px; background-color: #7cb305; margin: 5px 0 15px 0;" />
        <a-menu v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">
            <a-menu-item key="food-manager">
                <v-icon class="me-4" icon="mdi-food"></v-icon>
                <span>
                    Food Management
                    <router-link :to="{ name: 'food-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-menu-item key="wine-manager">
                <i class="fa-solid fa-wine-glass ms-1 me-5" :style="{ fontSize: '1.3em' }"></i>
                <span>
                    Wine Management
                    <router-link :to="{ name: 'wine-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-menu-item key="gallery-manager">
                <v-icon class="me-4" icon="mdi-image-multiple"></v-icon>
                <span>
                    Gallery Management
                    <router-link :to="{ name: 'gallery-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-menu-item key="event-manager">
                <v-icon class="me-4" icon="mdi-calendar-multiple"></v-icon>
                <span>
                    Event Management
                    <router-link :to="{ name: 'event-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-sub-menu key="sub1">
                <template #title>
                    <span>
                        <v-icon class="me-5" icon="mdi-account-multiple-outline"></v-icon>
                        <span>Customer</span>
                    </span>
                </template>
                <a-menu-item :class="{ marginLeft: '1em' }" key="reserve-manager">
                    <v-icon class="me-1" icon="mdi-timetable"></v-icon>
                    <span>
                        Reserve
                        <router-link :to="{ name: 'feedback-manager' }"></router-link>
                    </span>
                </a-menu-item>
                <a-menu-item :class="{ marginLeft: '1em' }" key="feedback-manager">
                    <v-icon class="me-1" icon="mdi-message-text-outline"></v-icon>
                    <span>
                        Feedback
                        <router-link :to="{ name: 'feedback-manager' }"></router-link>
                    </span>
                </a-menu-item>
            </a-sub-menu>

            <a-popconfirm title="Are you sure logout?" ok-text="Yes, Logout now" cancel-text="No" @confirm="logout">
                <v-btn class="w-100" color="#002140">
                    <logout-outlined style="color: red;" />
                </v-btn>
            </a-popconfirm>

        </a-menu>
    </a-layout-sider>
</template>

<script>
import {
    PictureOutlined,
    UserOutlined,
    TeamOutlined,
    AppstoreAddOutlined,
    LogoutOutlined
} from '@ant-design/icons-vue';
import request from '../../services/request';
export default {
    components: {
        PictureOutlined,
        UserOutlined,
        TeamOutlined,
        AppstoreAddOutlined,
        LogoutOutlined
    },
    data() {
        return {
            collapsed: false,
            selectedKeys: [
                this.$route.name,
            ],
        };
    },
    methods: {
        async logout() {
            await request.post(this.$dataUrl.logout).then((res) => {
                this.$auth.userLogin = false
                this.$router.push({ name: 'login' })
            }).catch((err) => {
                console.log(err);
            })
        }
    },
    created() {
        if (!this.$auth.userLogin) {
            this.$router.push({ name: 'login' })
        }
    }
}
</script>
