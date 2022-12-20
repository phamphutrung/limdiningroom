<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Gallery Management</a-breadcrumb-item>
            <a-breadcrumb-item>Create Gallery</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">
            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">{{ galleryId ? 'Update Gallery' : 'Create Gallery' }}</h5>
                            <router-link :to="{ name: 'gallery-manager' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon :style="{ fontSize: '1.4em', paddingBottom: '4px' }"
                                        icon="mdi-backburger"></v-icon>
                                    Back list
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />

                        <a-form :layout="'horizontal'" :model="form" :labelCol="{ span: 4 }" :wrapperCol="{ span: 16 }">
                            <a-form-item label="Title">
                                <a-input v-model:value="form.title" placeholder="Enter title" />
                            </a-form-item>

                            <a-form-item label="Sub title">
                                <a-input v-model:value="form.sub_title" placeholder="Enter sub title" />
                            </a-form-item>

                            <a-form-item label="Image">
                                <input type="file" @change="onChangeImage" ref="inputImage" hidden
                                    accept="image/png, image/jpeg" />
                                <div class="default-image">
                                    <img class="w-100 rounded"
                                        :src="previewImageSrc == '' ? '/static/img/defaultImage.jpg' : previewImageSrc"
                                        :class="{ 'image-picked': previewImageSrc }">
                                    <button class="btn btn-choose-image" @click="selectImage">Choose image</button>
                                </div>
                            </a-form-item>




                            <a-form-item :wrapperCol="{ span: 14, offset: 4 }">
                                <a-button v-if="!galleryId" @click="handleCreate" type="primary"
                                    :loading="saving">Create</a-button>
                                <a-button v-else type="primary" @click="handleUpdate"
                                    :loading="saving">Update</a-button>
                            </a-form-item>
                        </a-form>
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
            saving: false,
            form: {
                title: '',
                sub_title: '',
                image: null
            },
            previewImageSrc: '',
            galleryId: false,
        }
    },
    methods: {
        onChangeImage(e) {
            this.form.image = e.target.files[0];
            this.previewImageSrc = URL.createObjectURL(this.form.image);
        },
        selectImage() {
            this.$refs.inputImage.click()
        },
        async handleCreate() {
            this.saving = true
            await request.post(this.$dataUrl.galleryCreate, this.form, {
                headers: {
                    'content-type': 'multipart/form-data',
                }
            }).then((res) => {
                console.log(res);
                this.saving = false
                this.$toast.success('Create successfully')
            }).catch((err) => {
                this.saving = false
            })
        },
        handleUpdate() {

        }
    },
}
</script>
