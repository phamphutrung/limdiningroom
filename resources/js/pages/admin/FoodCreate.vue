<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Food Management</a-breadcrumb-item>
            <a-breadcrumb-item>Create</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">Create Food</h5>
                            <router-link :to="{ name: 'food-manager' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon :style="{ fontSize: '1.4em', paddingBottom: '4px' }"
                                        icon="mdi-backburger"></v-icon>
                                    Back List
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-form :layout="'horizontal'" :model="form" :labelCol="{ span: 4 }" :wrapperCol="{ span: 14 }">
                            <a-form-item label="Name">
                                <a-input v-model:value="form.fieldA" placeholder="Enter food name" />
                            </a-form-item>
                            <a-form-item label="Price" :wrapperCol="{ span: 3, offset: 0 }">
                                <a-input-number :min="0" v-model:value="form.fieldB" placeholder="Enter food price"
                                    :formatter="value => `${value}`.replace(/\B(?=(\d{3})+(?!\d))/g, ',')"
                                    :parser="value => value.replace(/\$\s?|(,*)/g, '')">
                                    <template #addonAfter>
                                        <a-select v-model:value="form.currency" style="width: 5em">
                                            <a-select-option value="USD">VND</a-select-option>
                                            <a-select-option value="EUR">USD</a-select-option>
                                        </a-select>
                                    </template>
                                </a-input-number>
                            </a-form-item>
                            <a-form-item label="Sub description">
                                <a-input v-model:value="form.sub_desc" placeholder="Enter sub description" />
                            </a-form-item>

                            <a-form-item label="Content">
                                <div class="mb-4 d-flex">
                                    <div style="width: 95%;">
                                        <a-input v-model:value="form.sub_desc" placeholder="Enter Title | ex: Introduce"
                                            class="mb-1" />
                                        <a-textarea v-model:value="form.sub_desc" placeholder="Enter body for Introduce"
                                            :rows="8" />
                                    </div>
                                    <div class="text-center ms-2 mt-2" style="cursor: pointer;">
                                        <v-icon class="d-block mx-auto" icon="mdi-minus-circle-outline"></v-icon>
                                    </div>
                                </div>
                                <div class="text-center m-0 p-0" style="width: 95%; cursor: pointer;">
                                    <v-icon class="text-success" icon="mdi-plus-circle-outline"></v-icon>
                                </div>
                            </a-form-item>

                            <a-form-item :wrapperCol="{ span: 14, offset: 4 }">
                                <a-button type="primary">Submit</a-button>
                            </a-form-item>
                        </a-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts">

export default {
    data() {
        return {
            form: {
                fieldA: '',
                fieldB: '',
                currency: 'VND',
                sub_desc: '',
                content: []
            },
        }
    },
};
</script>




