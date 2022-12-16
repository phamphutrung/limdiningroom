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
                                <a-input v-model:value="form.name" placeholder="Enter food name" />
                            </a-form-item>
                            <a-form-item label="Price" :wrapperCol="{ span: 3, offset: 0 }">
                                <a-input-number :min="1" v-model:value="form.price" placeholder="Enter food price"
                                    :formatter="value => `${value}`.replace(/\B(?=(\d{3})+(?!\d))/g, ',')"
                                    :parser="value => value.replace(/\$\s?|(,*)/g, '')">
                                    <template #addonAfter>
                                        <a-select v-model:value="form.currency" style="width: 5em">
                                            <a-select-option value="VND">VND</a-select-option>
                                            <a-select-option value="USD">USD</a-select-option>
                                        </a-select>
                                    </template>
                                </a-input-number>
                            </a-form-item>
                            <a-form-item label="Status">
                                <a-switch size="small" v-model:checked="form.status" /> <v-chip size="small"
                                    class="mx-2">{{
                                            form.status ? 'Enable'
                                                : 'Unable'
                                    }}</v-chip>
                            </a-form-item>
                            <a-form-item label="Image">
                                <form enctype="">
                                    <input type="file" @change="onChange" ref="inputImage" hidden />
                                </form>
                                <div v-if="previewImageSrc" class="default-image w-25">
                                    <img class="w-100" :src="previewImageSrc">
                                    <button class="btn btn-choose-image" @click="selectImage">Choose image</button>
                                </div>
                                <div v-else class="default-image w-25">
                                    <img class="w-100" src="/static/img/defaultImage.jpg">
                                    <button class="btn btn-choose-image" @click="selectImage">Choose image</button>
                                </div>
                            </a-form-item>


                            <a-form-item label="Sub description">
                                <a-input v-model:value="form.sub_desc" placeholder="Enter sub description" />
                            </a-form-item>


                            <a-form-item label="Content">
                                <div class="d-flex" v-for="(item, index) in contents" :key="index"
                                    :class="index == (contents.length - 1) ? 'mb-1' : 'mb-4'">
                                    <div :style="{ width: contents.length > 1 ? '95%' : '100%' }">
                                        <a-input v-model:value="item.title" placeholder="Enter Title | ex: Introduce"
                                            class="mb-1" />
                                        <a-textarea v-model:value="item.value" placeholder="Enter body for Introduce"
                                            :rows="8" />
                                    </div>
                                    <div v-if="contents.length > 1" class="text-center ms-2 mt-2"
                                        style="cursor: pointer;">
                                        <v-icon @click="removeItemContent($event, index)" class="d-block mx-auto"
                                            icon="mdi-minus-circle-outline"></v-icon>
                                    </div>
                                </div>
                                <div class="text-center m-0 p-0" style="width: 95%; cursor: pointer;">
                                    <v-icon @click="incrementContent" class="text-success"
                                        icon="mdi-plus-circle-outline"></v-icon>
                                </div>
                            </a-form-item>

                            <a-form-item :wrapperCol="{ span: 14, offset: 4 }">
                                <a-button @click="handleCreate" type="primary">Submit</a-button>
                            </a-form-item>
                        </a-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts">
import request from '../../services/request.js';

export default {
    components: {

    },
    data() {
        return {
            form: {
                name: '',
                price: '',
                currency: 'VND',
                sub_desc: '',
                content: {},
                status: true,
                image: null
            },
            contents: [
                {
                    title: null,
                    value: null
                }
            ],
            previewImageSrc: '',
        }
    },
    methods: {
        async handleCreate() {
            this.form.content = {};
            if (this.contents[0].title) {
                this.contents.forEach((item) => {
                    if (item.title) {
                        this.form.content[item.title] = item.value
                    }
                });
            }
            console.log(this.form);
            await request.post('/foods', this.form, {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            })
        },
        incrementContent() {
            this.contents.push({
                title: null,
                value: null
            });
        },
        removeItemContent(event, index) {
            this.contents.splice(index, 1);
        },
        onChange(e) {
            this.form.image = e.target.files[0];
            this.previewImageSrc = URL.createObjectURL(this.form.image);
            console.log(this.previewImageSrc);
        },
        selectImage() {
            this.$refs.inputImage.click()
        }
    },


};
</script>

<style scoped>
.default-image {
    position: relative;
}

.default-image .btn-choose-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    transition: all 0.3s;
    border-color: rgb(167, 164, 164);
}

.default-image img {
    opacity: .8;
    transition: all 0.3s;
    cursor: pointer;
}

.default-image:hover img {
    opacity: .25;
}

.default-image:hover .btn-choose-image {
    display: inline;
}
</style>




