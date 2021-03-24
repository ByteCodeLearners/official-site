import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "@/views/index"
import NotFoundPage from "@/views/404"
import register from "@/components/MemberRegistration"
import login from "@/components/login"
import ByteCodeInitiat from "@/components/ByteCodeInitiator"
import UpComingEvents from "@/components/UpComingEvents"

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
    component:login,
  },
  {
    path:"/initiator",
    name:"initiator",
    component:ByteCodeInitiat,
  },
  {
    path:"*",
    name:"not-found",
    component:NotFoundPage
  },
  {
    path:"/add/upcoming/events",
    name:"UpComingEvents",
    component:UpComingEvents,
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
