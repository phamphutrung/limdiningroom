<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Event Management</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">Event Management</h5>
                            <router-link :to="{ name: 'event-create' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon icon="mdi-plus"></v-icon>
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-table :columns="columns" :data-source="events" :pagination="false">
                            <template #bodyCell="{ column, record }">
                                <template v-if="column.key === 'action'">
                                    <router-link :to="{ name: 'event-edit', params: { id: record.id } }">
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
                            </template>
                            <template #expandedRowRender="{ record }" class="bg-primary">
                                <div class="container" v-html="record.content"></div>
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
            events: [],
            columns: [
                { title: 'Image', dataIndex: 'image', key: 'thumbnail' },
                { title: 'Title', dataIndex: 'title', key: 'title' },
                { title: 'Sub title', dataIndex: 'sub_title', key: 'sub_title' },
                { title: 'Time', dataIndex: 'time', key: 'time' },
                { title: 'Action', key: 'action' },
            ],
            tab: []
        }
    },
    methods: {
        async getListFood() {
            await request.get(this.$dataUrl.eventList).then((res) => {
                let events = res.data.payload.data;
                events.forEach((val, index) => {
                    val['key'] = index;
                });
                this.events = events;
            })
        },
        async handleDelete(id) {
            await request.delete(this.$dataUrl.eventList, {
                params: {
                    eventId: id
                }
            }).then((res) => {
                this.$toast.success('Deleted successfully')
                this.events.forEach((item, index) => {
                    if (item.id == id) {
                        this.events.splice(index, 1)
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
