<template>
 <div>
    <v-app-bar
      app
      color="green"
      height="60"
      width="40"
      collapse
      min-width="100"
    >
    <button @click="menu=!menu">
      <span class="material-icons menu-icon">menu</span>
    </button>
    </v-app-bar>
    <v-navigation-drawer app v-model="menu">
      <ul>
        <li v-for="i in 10" :key="i">{{i}} </li>
      </ul>      
    </v-navigation-drawer>
 </div>
</template>

<script>
export default {
  data:()=>({
    menu:false
  }),
    methods:{
    test()
    {
      console.log("hello")
    }
  },

}
</script>

<style scoped>
.menu-icon
{
  font-size: 3.7em !important;
  color: #fff;
}
</style>