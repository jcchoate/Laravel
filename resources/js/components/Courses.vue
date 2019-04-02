<template>
    <div class="course-body text-center">
        <h1>COURSES</h1>
        <form action="/courses/create">
            <button class="btn btn-success" type="submit">Add New</button>
        </form>
        <CourseComponent 
            v-for="course in courses"
            
            :key="course.id"
            v-bind:name="course.name"
            v-bind:id="course.id"
        >
        </CourseComponent>
    </div>
</template>


<script>
import axios from 'axios';
    export default {
        data() {
            return {
                courses: [],
                pageTotal: 10
            }
        },
        methods: {
            getCourses() {
               const courses = axios.get('/course').then(res => {
                   this.courses = res.data
               });
            },
            showMore(){
                this.pageTotal + 10
            },
            showLess(){
                this.pageTotal - 10
            }

        },
        beforeMount(){
            this.getCourses()
        }
    }
</script>

<style scoped>
    .course-body{
        background: white
    }


</style>