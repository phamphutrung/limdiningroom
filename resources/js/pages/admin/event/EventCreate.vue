<template>
    <div>
        <a-breadcrumb style="margin: 16px 0">
            <a-breadcrumb-item>Admin</a-breadcrumb-item>
            <a-breadcrumb-item>Event Management</a-breadcrumb-item>
            <a-breadcrumb-item>{{ eventId ? 'Edit' : 'Create ' }}</a-breadcrumb-item>
        </a-breadcrumb>

        <div class="container-fluid">

            <div class="row">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="d-flex justify-space-between">
                            <h5 class="d-inline-block my-1">{{ eventId ? 'Edit Event' : 'Create Event' }}</h5>
                            <router-link :to="{ name: 'event-manager' }">
                                <button class="btn btn-sm btn-outline-success">
                                    <v-icon :style="{ fontSize: '1.4em', paddingBottom: '4px' }"
                                        icon="mdi-backburger"></v-icon>
                                    Back list
                                </button>
                            </router-link>
                        </div>
                        <a-divider style="height: 1px; background-color: #7cb305" />
                        <a-form :layout="'horizontal'" :model="form" :labelCol="{ span: 4 }" :wrapperCol="{ span: 16 }">

                            <a-form-item>
                                <template #label>
                                    Image <span class="text-danger ms-1">*</span>
                                </template>
                                <input type="file" @change="onChangeImage" ref="inputImage" hidden
                                    accept="image/png, image/jpeg" />
                                <div class="default-image">
                                    <img class="w-100 rounded"
                                        :src="previewImageSrc == '' ? '/static/img/defaultImage.jpg' : previewImageSrc"
                                        :class="{ 'image-picked': previewImageSrc }">
                                    <button class="btn btn-choose-image" @click="selectImage">Choose image</button>
                                </div>
                            </a-form-item>
                            <a-form-item>
                                <template #label>
                                    Title <span class="text-danger ms-1">*</span>
                                </template>
                                <a-input v-model:value="form.title" placeholder="Enter title" />
                            </a-form-item>

                            <a-form-item label="Sub title">
                                <a-input v-model:value="form.sub_title" placeholder="Enter sub title" />
                            </a-form-item>

                            <a-form-item label="Time">
                                <a-input v-model:value="form.time" placeholder="Enter time" />
                            </a-form-item>
                            <a-form-item label="Content">
                                <ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
                            </a-form-item>


                            <a-form-item :wrapperCol="{ span: 14, offset: 4 }">
                                <a-button v-if="!eventId" @click="handleCreate" type="primary"
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
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


export default {
    data() {
        return {
            editor: ClassicEditor,
            editorConfig: {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
            },
            saving: false,
            form: {
                title: '',
                sub_title: '',
                image: null,
                content: ''
            },
            previewImageSrc: '',
            eventId: false,
        }
    },
    mounted() {
        if (this.eventId) {
            this.getEventEdit(this.eventId)
            this.form.eventId = this.eventId
        }
    },
    methods: {
        showContent() {
            console.log(this.a);
        },
        async getEventEdit(id) {
            await request.get(this.$dataUrl.eventShow, {
                params: { id: id }
            }).then((res) => {
                let result = res.data.payload
                if (result.image) {
                    this.previewImageSrc = '/storage/' + result.image
                }
                this.form.title = result.title ?? ''
                this.form.sub_title = result.sub_title ?? ''
                this.form.time = result.time ?? ''
                this.form.content = result.content ?? ''
            }).catch((err) => {
                if (err.response.status == 404) {
                    this.$router.push({ name: 'event-create' })
                    this.eventId = false
                }
            })
        },
        onChangeImage(e) {
            this.form.image = e.target.files[0];
            this.previewImageSrc = URL.createObjectURL(this.form.image);
        },
        selectImage() {
            this.$refs.inputImage.click()
        },
        async handleUpdate() {
            this.saving = true
            await request.post(this.$dataUrl.eventUpdate, this.form, {
                headers: {
                    'content-type': 'multipart/form-data',
                }
            }).then((res) => {
                this.saving = false
                this.$toast.success('Update successfully')
            })
        },
        async handleCreate() {
            this.saving = true
            await request.post(this.$dataUrl.eventCreate, this.form, {
                headers: {
                    'content-type': 'multipart/form-data',
                }
            }).then((res) => {
                this.saving = false
                this.$toast.success('Create successfully')
                this.form = {
                    title: '',
                    sub_title: '',
                    image: null,
                    content: ''
                },
                    this.previewImageSrc = ''
            }).catch((err) => {
                this.saving = false
            })
        },
    },
    created() {
        if (this.$route.params.id) {
            this.eventId = this.$route.params.id;
        }
    }
}
</script>

<style>

</style>
