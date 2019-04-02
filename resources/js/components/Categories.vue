
<template>
  <div class="main">
    <h1>All Courses</h1>
    <div class="mainspace text-center">
      <Category v-for="category in categories" :key="category.id" v-bind:category="category"></Category>
    </div>
  </div>
</template>


<script>
import axios from "axios";
export default {
  data() {
    return {
      categories: []
    };
  },
  methods: {
    getVideos() {
      const videos = axios.get("/video?groupBy=categories").then(res => {
        this.categories = res.data;
      });
    }
  },
  beforeMount() {
    this.getVideos();
  },
  mounted() {}
};
</script>

<style scoped>
.mainspace {
  display: flex;
  flex-direction: column
}
.main{
    background-color: white
}

</style>