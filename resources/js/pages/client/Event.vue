<template>
    <div class="cover-page">
        <div class="container h-100">
            <div class="row h-100">
                <div
                    class="col-md-6 mx-auto text-light text-center wow zoomIn justify-center d-flex align-items-center">
                    <p class="text-light m-0 text-cover">Event & Catering</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container section">
        <div class="row">
            <div class="col-md-12 col-lg-6 px-6" v-for="event, i in events" :key="i">
                <v-card class="mx-auto my-12 wow fadeInUpBig" :data-wow-delay="'0.' + i + 's'" data-wow-duration="0.7s">
                    <div style="height: 30rem;" class="mb-5">
                        <v-img style="height: 100%; margin: 0 auto;" :src="'/storage/' + event.image"></v-img>
                    </div>
                    <v-card-item>
                        <v-card-title style="text-transform: capitalize;">{{ event.title }}</v-card-title>
                        <v-card-subtitle>
                            <span class="mr-1">{{ event.sub_title }}</span>

                            <v-icon color="error" icon="mdi-fire-circle" size="small"></v-icon>
                        </v-card-subtitle>
                    </v-card-item>
                    <div class="px-4">
                        <v-chip-group>
                            <v-chip>{{ event.time }}</v-chip>
                        </v-chip-group>
                    </div>

                    <v-card-actions>
                        <v-spacer></v-spacer>

                        <v-btn @click="show[event.id] = !show[event.id]">
                            <span>{{ show[event.id] ? 'collapse' : 'See more' }}</span>
                            <v-icon :icon="show[event.id] ? 'mdi-chevron-up' : 'mdi-chevron-down'"></v-icon>
                        </v-btn>

                    </v-card-actions>
                    <v-expand-transition>
                        <div v-show="show[event.id]">
                            <v-card-text v-html="event.content" />
                        </div>
                    </v-expand-transition>
                </v-card>
            </div>
        </div>
    </div>
</template>

<script>
import request from '../../services/request';
export default {
    data() {
        return {
            events: [],
            show: []
        }
    },
    methods: {
        async getListEvent() {
            await request.get(this.$dataUrl.eventList).then((res) => {
                console.log(res);
                this.events = [...res.data.payload.data]
                console.log(this.events);
            })
        }
    },
    created() {
        this.getListEvent()
        console.log(this.$dataUrl.eventList);
    },
}
</script>

