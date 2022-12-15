<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Food Management</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">Food Management</h5>
                            <router-link :to="{ name: 'food-create' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <plus-outlined :style="{ fontSize: '1.4em' }" />
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-table :columns="columns" :data-source="menus" :pagination="false">
                            <template #bodyCell="{ column, record }">
                                <template v-if="column.key === 'action'">
                                    <a-button class="me-1">
                                        <v-icon icon="mdi-tooltip-edit" />
                                    </a-button>
                                    <a-popconfirm title="Are you sure delete?" ok-text="Yes, Delete now"
                                        cancel-text="No" @confirm="{}">
                                        <a-button>
                                            <v-icon icon="mdi-delete-circle" />
                                        </a-button>
                                    </a-popconfirm>
                                </template>
                                <template v-if="column.key === 'thumbnail'">
                                    <a-image :width="'7em'" :src="record.thumbnail" />
                                </template>
                                <template v-if="column.key === 'status'">
                                    <v-chip v-if="record.status == 1" prepend-icon="mdi-check-circle-outline"
                                        variant="outlined" size="small" color="green">
                                        Enable
                                    </v-chip>
                                    <v-chip v-else prepend-icon="mdi-close-circle-outline" variant="outlined"
                                        size="small" color="red">
                                        Unable
                                    </v-chip>
                                </template>
                                <template v-if="column.key === 'type'">
                                    {{ record.isCombo ? 'Combo' : 'single' }}
                                </template>
                            </template>
                            <template #expandedRowRender="{ record }">
                                <p style="margin: 0">
                                    {{ record.content.main_content }}
                                </p>
                            </template>
                        </a-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import request from '../../services/request'
import { PlusOutlined } from '@ant-design/icons-vue'

export default {
    components: {
        PlusOutlined
    },

    data() {
        return {
            menus: [],
            columns: [
                { title: 'Image', dataIndex: 'thumbnail', key: 'thumbnail' },
                { title: 'Name', dataIndex: 'name', key: 'name' },
                { title: 'Price', dataIndex: 'price', key: 'price' },
                { title: 'Sub Description', dataIndex: 'sub_desc', key: 'sub_desc' },
                { title: 'Status', dataIndex: 'status', key: 'status' },
                { title: 'Type', dataIndex: 'type', key: 'type' },
                { title: 'Action', key: 'action' },
            ]
        }
    },

    methods: {
        async getListMenu() {
            await request.get(this.$dataUrl.foodList).then((res) => {
                let menus = res.data.payload.data;
                menus.forEach((val, index) => {
                    val['key'] = index;
                    val['thumbnail'] = "https://i.pinimg.com/564x/da/71/87/da718714a564e0b7d3110fada91d2c44.jpg";
                });
                this.menus = menus;
            })
        }
    },

    created() {
        this.getListMenu()
    }
}
</script>

<style>

</style>


