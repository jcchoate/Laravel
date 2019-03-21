import Home from './components/Home.vue'
import Videos from './components/Videos.vue'
import Categories from './components/Categories.vue'

export default{
    mode: 'history',


    routes: [
        {
            path:'/',
            component:Home
        },
        {
            path:'/Videos',
            component:Videos
        },
        {
            path:'/Categories',
            component:Categories
        }
    ]
}