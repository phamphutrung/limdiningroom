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
                                    <v-icon icon="mdi-plus"></v-icon>
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-table :columns="columns" :data-source="foods" :pagination="false">
                            <template #bodyCell="{ column, record }">
                                <template v-if="column.key === 'action'">
                                    <router-link :to="{ name: 'food-edit', params: { id: record.id } }">
                                        <a-button class="me-1 text-dark">
                                            <v-icon icon="mdi-border-color" />
                                        </a-button>
                                    </router-link>
                                    <a-popconfirm title="Are you sure delete?" ok-text="Yes, Delete now"
                                        cancel-text="No" @confirm="handleDelete(record.id)">
                                        <a-button>
                                            <v-icon icon="mdi-delete-circle" />
                                        </a-button>
                                    </a-popconfirm>
                                </template>
                                <template v-if="column.key === 'thumbnail'">
                                    <a-image :width="'7em'"
                                        :src="record.image == null ? '/static/img/defaultImage.jpg' : '/storage/' + record.image" />
                                </template>
                                <template v-if="column.key === 'price'">
                                    <strong> {{ record.price + ' ' }}</strong> <span :style="{ fontSize: '0.8em' }">{{
                                            record.currency
                                    }}</span>
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
                            <template #expandedRowRender="{ record }" class="bg-primary">
                                <v-tabs v-if="!(record.content == null)" v-model="tab[record.key]" fixed-tabs>
                                    <v-tab v-for="(val, index) in Object.entries(record.content)" :key="index"
                                        :value="val[0]">
                                        {{ val[0] }}
                                    </v-tab>
                                </v-tabs>
                                <v-window v-if="!(record.content == null)" class="mt-5" v-model="tab[record.key]">
                                    <v-window-item class="container"
                                        v-for="(val, index) in Object.entries(record.content)" :key="index"
                                        :value="val[0]">
                                        {{ val[1] }}
                                    </v-window-item>
                                </v-window>
                            </template>
                        </a-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import request from '../../../services/request'
// import { PlusOutlined } from '@ant-design/icons-vue'

export default {

    data() {
        return {
            foods: [],
            columns: [
                { title: 'Image', dataIndex: 'image', key: 'thumbnail' },
                { title: 'Name', dataIndex: 'name', key: 'name' },
                { title: 'Price', dataIndex: 'price', key: 'price' },
                { title: 'Sub Description', dataIndex: 'sub_desc', key: 'sub_desc' },
                { title: 'Status', dataIndex: 'status', key: 'status' },
                { title: 'Type', dataIndex: 'type', key: 'type' },
                { title: 'Action', key: 'action' },
            ],
            tab: []
        }
    },

    methods: {
        async getListFood() {
            await request.get(this.$dataUrl.foodList).then((res) => {
                let foods = res.data.payload.data;
                foods.forEach((val, index) => {
                    val['key'] = index;
                });
                this.foods = foods;
            })
            console.log(this.foods);

        },
        async handleDelete(id) {
            await request.delete(this.$dataUrl.foodList, {
                params: {
                    foodId: id
                }
            }).then((res) => {
                this.$toast.success('Deleted successfully')
                this.foods.forEach((item, index) => {
                    if (item.id == id) {
                        this.foods.splice(index, 1)
                        return false
                    }
                });
            })
        }

    },

    created() {
        this.getListFood()

    }
}
</script>

<style>
.v-btn__content {
    text-transform: capitalize;
}
</style>


