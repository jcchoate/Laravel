<template>
  <div class="dropdown" id="app">
    <button class="btn btn-terciary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
      <h3>{{this.$props.category[0].categories}}</h3>
    </button>
    <div class="dropdown-menu">
      <div class="dropdown-item" v-for="course in this.$props.courses" :key="course.id">
        <h4>{{course.name}}</h4>
      </div>
    </div>
    <!-- <div>
        {{this.$props.category !== this.$props.category ? 
            <div class="title">
                {this.$props.category}
            </div>
        }}
            
    </div>-->
    <form method="get" :action="`/video/${this.$props.id}/edit`">
      <button class="btn btn-primary" type="submit">Edit</button>
    </form>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {},
  props: ["category"]
};
</script>

<style scoped>
.box {
  background-color: rgb(197, 197, 197);
  margin: 20px;
}
</style>