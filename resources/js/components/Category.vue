<template>
  <div class="categories" id="app">
    <h3>{{this.$props.category[0].categories}}</h3>
    <div class="category-list">
      <div class="category-item" v-for="categories in this.$props.category" :key="categories.id">
        <div class="single-item">
          <img
            class="pigpic"
            src="https://previews.123rf.com/images/taichesco/taichesco1303/taichesco130300015/18674439-a-small-crowd-of-pink-piggy-banks-viewed-from-behind-at-random-mode-stand-in-front-a-big-armored-pig.jpg"
            alt="pigs"
          >
          <h4>{{categories.name}}</h4>
        </div>
      </div>
    </div>
    <!-- <div>
        {{this.$props.category !== this.$props.category ? 
            <div class="title">
                {this.$props.category}
            </div>
        }}
            
    </div>-->
  </div>
</template>
<script>
export default {
  mounted() {
    console.log(this.$props.category);
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
.pigpic {
  max-width: 100px;
}
.category-list {
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.single-item{
  margin: 20px
}
</style>