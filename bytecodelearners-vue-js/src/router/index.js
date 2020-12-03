import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "@/views/index"
import NotFoundPage from "@/views/404"
import register_member from "@/components/MembersRegister"

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/register',
    name: 'MembersRegistration',
    component: register_member,
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
