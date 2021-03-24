import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "../views/index"
import NotFoundPage from "../views/404"
import register from "../views/registration/members/MemberRegistration"
import login from "../views/login/index"
import ByteCodeInitiator from "../views/initiators/index"

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
    component:login
  },
  {
    path:"*",
    name:"not-found",
    component:NotFoundPage
  }
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
