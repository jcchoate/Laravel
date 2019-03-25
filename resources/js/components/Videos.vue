<template>
    <div class="mainspace">
        {videolist}
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        getVideos() {
           const videos = axios.get('test.test/videolist').then(({data}) => {
               console.log(videos)
           })
        }
    }
</script>

<style scoped>



</style>