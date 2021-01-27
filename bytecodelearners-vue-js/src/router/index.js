import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "@/views/index"
import NotFoundPage from "@/views/404"
import register from "@/components/MemberRegistration"
import ByteCodeInitiator from "@/components/ByteCodeInitiator"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path:"/register",
    name:"register",
    component:register
  },
  {
    path:"/initiator",
    name:"initiator",
    component:ByteCodeInitiator,
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
