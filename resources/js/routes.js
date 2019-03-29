import Home from './components/Home.vue'
import Videos from './components/Videos.vue'
import Categories from './components/Categories.vue'
import Courses from './components/Courses.vue'
import Payment from './components/Payment.vue'

export default{
    mode: 'history',


    routes: [
        {
            path:'/',
            component:Home
        },
        {
            path:'/videos',
            component:Videos
        },
        {
            path:'/categories',
            component:Categories
        },
        {
            path:'/courses',
            component:Courses
        }
    ]
}