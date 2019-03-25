
<template>
    <div class="mainspace">
        <h1>CATEGORIES</h1>
        <Category 
            v-for="video in videos"
            :key="video.id"
            v-bind:name="video.name"
            v-bind:description="video.description"
            v-bind:category="video.categories"
        >
            
        </Category>
    </div>
</template>


<script>
import axios from 'axios';
    export default {
        data() {
            return {
                videos: []
            }
        },
        methods: {
            getVideos() {
               const videos = axios.get('/videolist').then(res => {
                   this.videos = res.data
               });
            }

        },
        beforeMount(){
            this.getVideos()
        }
    }
</script>

<style scoped>



</style>