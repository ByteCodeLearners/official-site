import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "@/views/index"
import NotFoundPage from "@/views/404"
import register from "@/components/MemberRegistration"
import login from "@/components/login"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path:"/freshers_register",
    name:"freshers_register",
    component:register
  },
  {
    path:"/login",
    name:"login",
    component:login
  },
  {
    path:"*",
    name:"not-found",
    component:NotFoundPage
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
