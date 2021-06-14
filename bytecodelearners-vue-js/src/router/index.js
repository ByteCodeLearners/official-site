import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "../views/index"
import NotFoundPage from "../views/404"
import register from "../views/registration/members/MemberRegistration"
import login from "../views/login/index"
import ByteCodeInitiator from "../views/initiators/index"
import UpComingEvents from "@/components/UpComingEvents"
import EventsWinner from "../views/winners/EventWinners"
import BytecodeMembers from "../views/members/index"

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

    path:"/events_winner",
    name:"events_winner",
    component:EventsWinner,
  },
  {

    path:"/login",
    name:"login",
    component:login,
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
  },
  {

    path:"/batches",
    name:"BytecodeMembers",
    component:BytecodeMembers,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
