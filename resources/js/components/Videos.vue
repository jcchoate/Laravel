
<template>
    <div class="mainspace">
        <h1>VIDEOS</h1>
        <VideoIndexed 
            v-for="video in videos"
            :key="video.id"
            name="video.name"
            description="video.description"
            category="video.categories"
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
               const videos = axios.get('test.test/videolist').then(res => {
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