<template>
    <div id="app" class="box">
        <div class="title">
            <h4>Name: {{this.$props.name}}</h4>
        </div>
        <div class="info">
            <h5>Description:{{this.$props.description}}</h5>
            <h5>Category:{{this.$props.category}}</h5>
        </div>
        <form method="get" :action="`/video/${this.$props.id}/edit`">
            <button class="btn btn-primary" type="submit">Edit</button>
        </form>
    </div>
</template>

<script>
export default {
    mounted() {
            console.log('Component mounted.')
        },
    methods: {

    },
    props: ['id', 'name', 'description', 'category']
}
</script>

<style scoped>
.box{
    background-color: rgb(197, 197, 197);
    margin: 20px;
}
</style>