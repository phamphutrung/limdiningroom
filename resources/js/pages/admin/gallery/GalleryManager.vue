<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Gallery Management</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">Gallery Management</h5>
                            <router-link :to="{ name: 'gallery-create' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon icon="mdi-plus"></v-icon>
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
