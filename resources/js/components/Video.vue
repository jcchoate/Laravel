<template>
    <div id="app">
        Name: {this.$props.name}
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