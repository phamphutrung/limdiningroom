<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Wine Management</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">Wine Management</h5>
                            <router-link :to="{ name: 'gallery-create' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon icon="mdi-plus"></v-icon>
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-table :columns="columns" :data-source="galleries" :pagination="false">
                            <template #bodyCell="{ column, record }">
                                <template v-if="column.key === 'action'">
                                    <router-link :to="{}">
                                        <a-button class="me-1">
                                            <v-icon icon="mdi-border-color" />
                                        </a-button>
                                    </router-link>
                                    <a-popconfirm title="Are you sure delete?" ok-text="Yes, Delete now"
                                        cancel-text="No" @confirm="{}">
                                        <a-button>
                                            <v-icon icon="mdi-delete-circle" />
                                        </a-button>
                                    </a-popconfirm>
                                </template>
                                <template v-if="column.key === 'thumbnail'">
                                    <a-image :width="'10em'"
                                        :src="record.image == null ? '/static/img/defaultImage.jpg' : '/storage/' + record.image" />
                                </template>
                                <template v-if="column.key === 'title'">
                                    <p>
                                        {{ record.title }}
                                    </p>
                                </template>
                                <template v-if="column.key === 'sub_title'">
                                    <p>
                                        {{ record.sub_title }}
                                    </p>
                                </template>
                            </template>
                        </a-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import request from '../../../services/request';
export default {
    data() {
        return {
            columns: [
                { title: 'Image', dataIndex: 'image', key: 'thumbnail' },
                { title: 'Title', dataIndex: 'title', key: 'title' },
                { title: 'Sub title', dataIndex: 'sub_title', key: 'sub_title' },
                { title: 'Action', key: 'action' },
            ],
            galleries: []
        }
    },

    methods: {
        async getListGalleries() {
            await request.get(this.$dataUrl.galleryList).then((res) => {
                this.galleries = res.data.payload
                console.log(res);
            })
        }
    },
    created() {
        this.getListGalleries()
    }
}
</script>
