
<template>
    <div class="mainspace">
        <h1>VIDEOS</h1>
        <VideoIndexed 
            v-for="video in videos"
            :key="video.id"
            v-bind:name="video.name"
            v-bind:description="video.description"
            v-bind:category="video.categories"
        >
            
        </VideoIndexed>
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