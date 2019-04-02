<template>
  <div  id="app" class="box">
    <div class="title">
      <h4>Name: {{this.$props.name}}</h4>
    </div>

    <form method="get" :action="`/course/${this.$props.id}/edit`">
      <button class="btn btn-primary" type="submit">Edit</button>
    </form>
    <Payment-Component></Payment-Component>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {},
  props: ["id", "name"]
};
</script>

<style scoped>
.box {
  background-color: rgb(197, 197, 197);
  margin: 20px;
}

</style>