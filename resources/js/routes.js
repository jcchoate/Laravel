import Home from './components/Home.vue'
import Videos from './components/Videos.vue'
import Categories from './components/Categories.vue'

export default{
    mode: 'history',


    routes: [
        {
            path:'/',
            component:Home
        }
    ]
}