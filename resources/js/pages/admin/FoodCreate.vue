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

                        <a-form :layout="'horizontal'" :model="form" :labelCol="{ span: 4 }" :wrapperCol="{ span: 16 }">
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
                                <input type="file" @change="onChangeImage" ref="inputImage" hidden />
                                <div class="default-image">
                                    <img class="w-100 rounded"
                                        :src="previewImageSrc == '' ? '/static/img/defaultImage.jpg' : previewImageSrc"
                                        :class="{ 'image-picked': previewImageSrc }">
                                    <button class="btn btn-choose-image" @click="selectImage(1)">Choose image</button>
                                </div>
                            </a-form-item>
                            <a-form-item label="Sub image">
                                <input type="file" @change="onChangeMultipleImage" ref="inputMultipleImage" multiple
                                    hidden />
                                <div class="default-image" v-for="(item, index) in previewMultipleImageSrc"
                                    :key="index">
                                    <v-icon class="btn-remove-preview" @click="removeItemPreviewImage(index)"
                                        style="cursor: pointer; position: absolute; right: 5px; top: 5px; z-index: 5;"
                                        icon="mdi-minus-circle-outline"></v-icon>
                                    <a-image :src="item" class="rounded" height="100%" width="100%"
                                        :class="'image-picked'" />
                                </div>
                                <div class="default-image">
                                    <img class="w-100 rounded" src="/static/img/defaultImage.jpg">
                                    <v-icon v-if="this.previewMultipleImageSrc.length" class="btn-choose-image"
                                        style="font-size: 3em;" @click="selectImage(2)"
                                        icon="mdi-plus-circle-outline"></v-icon>
                                    <button v-else class="btn btn-choose-image" @click="selectImage(2)">Choose
                                        image</button>
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
                image: null,
                multipleImage: []
            },
            formReset: {},
            contents: [
                {
                    title: null,
                    value: null
                }
            ],
            previewImageSrc: '',
            previewMultipleImageSrc: [],
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
                    'content-type': 'multipart/form-data',
                }
            }).then((res) => {
                this.previewMultipleImageSrc = [],
                    this.previewImageSrc = '',
                    this.contents = [
                        {
                            title: null,
                            value: null
                        }
                    ],
                    this.form = {
                        name: '',
                        price: '',
                        currency: 'VND',
                        sub_desc: '',
                        content: {},
                        status: true,
                        image: null,
                        multipleImage: []
                    }
                this.$toast.success('Create successfully');
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
        onChangeImage(e) {
            this.form.image = e.target.files[0];
            this.previewImageSrc = URL.createObjectURL(this.form.image);
        },
        onChangeMultipleImage(e) {
            console.log(e.target.files);
            let files = e.target.files;
            for (let index = 0; index < files.length; index++) {
                this.form.multipleImage.push(files[index])
                this.previewMultipleImageSrc.push(URL.createObjectURL(files[index]))
            }
            console.log(this.form);
            console.log(this.previewMultipleImageSrc);
        },
        removeItemPreviewImage(index) {
            this.previewMultipleImageSrc.splice(index, 1);
            this.form.multipleImage.splice(index, 1);
            console.log(this.previewMultipleImageSrc);
            console.log(this.form.multipleImage);

        },
        selectImage(index) {
            index == 1 ? this.$refs.inputImage.click() : this.$refs.inputMultipleImage.click();
        }
    },
    created() {
        this.formReset = this.form;

    },


};
</script>

<style scoped>
.default-image {
    position: relative;
    width: 12em;
    height: 12em;
    display: inline-block;
    margin: .3em;
}

.default-image .btn-choose-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    border-color: rgb(168, 163, 163);
    padding: 2px 4px;
    font-size: 12px;
}

.default-image img {
    opacity: .3;
    transition: all 0.3s;
    cursor: pointer;
    height: 100%;
}

.default-image img.image-picked {
    opacity: 1;
    transition: all 0.3s;
    cursor: pointer;
}

.default-image:hover img {
    opacity: .1;
}

.default-image:hover .btn-choose-image {
    display: inline;
}

.btn-remove-preview {
    background-color: rgba(255, 255, 255, 0.705);
    border-radius: 100%;
    opacity: .7;
}
</style>




