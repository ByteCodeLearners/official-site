import Vue from 'vue'
import VueRouter from 'vue-router'
<<<<<<< HEAD
import Home from "@/views/index"
import NotFoundPage from "@/views/404"
import register from "@/components/MemberRegistration"
import login from "@/components/login"
import ByteCodeInitiat from "@/components/ByteCodeInitiator"
import UpComingEvents from "@/components/UpComingEvents"
=======
import Home from "../views/index"
import NotFoundPage from "../views/404"
import register from "../views/registration/members/MemberRegistration"
import login from "../views/login/index"
import ByteCodeInitiator from "../views/initiators/index"
>>>>>>> 980929086d8ddd68a135d5ee43591c575de1e6ce

Vue.use(VueRouter);

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

    path:"/initiator",
    name:"initiator",
    component:ByteCodeInitiator,
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
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
