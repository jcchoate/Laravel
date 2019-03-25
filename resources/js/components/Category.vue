<template>
    <div id="app">
        <div class="title">
            <h4>{{this.$props.category}}</h4>
        </div>
        <div class="dropdown">
            {{this.$props.name}}
            <br/>
            {{this.$props.description}}
        </div>
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