<template>
    <a-layout-sider v-model:collapsed="collapsed" collapsible>
        <div class="logo text-light text-center mt-6 fw-bold" style="height: 1em;">
            <router-link :to="{ name: 'home' }">
                <p class="m-0 text-light">LOGO</p>
            </router-link>
        </div>
        <a-divider style="height: 1px; background-color: #7cb305" />
        <a-menu v-model:selectedKeys="selectedKeys" theme="dark" mode="inline">
            <a-menu-item key="menu-manager">
                <appstore-add-outlined />
                <span>
                    Menu Manager
                    <router-link :to="{ name: 'menu-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-menu-item key="gallery-manager">
                <picture-outlined />
                <span>
                    Gallery Management
                    <router-link :to="{ name: 'gallery-manager' }"></router-link>
                </span>
            </a-menu-item>
            <a-sub-menu key="sub1">
                <template #title>
                    <span>
                        <user-outlined />
                        <span>User</span>
                    </span>
                </template>
                <a-menu-item key="3">Tom</a-menu-item>
                <a-menu-item key="4">Bill</a-menu-item>
                <a-menu-item key="5">Alex</a-menu-item>
            </a-sub-menu>
            <a-sub-menu key="sub2">
                <template #title>
                    <span>
                        <team-outlined />
                        <span>Team</span>
                    </span>
                </template>
                <a-menu-item key="6">Team 1</a-menu-item>
                <a-menu-item key="8">Team 2</a-menu-item>
            </a-sub-menu>

            <a-popconfirm title="Are you sure logout?" ok-text="Yes, Logout now" cancel-text="No" @confirm="logout">
                <v-btn class="w-100" color="#002140">
                    <logout-outlined style="color: #fff;" />
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
                this.$route.name
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
