<template>
 <div>
    <v-app-bar
      app
      dark
      collapse
      class="bcl-menu-bar"
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
  font-size: 2.7em !important;
  color: #0B0505;
}
.bcl-menu-bar{
  height: 60px !important;
}

@media only screen and (max-width: 500px) {
.bcl-menu-bar{
  height: 50px !important;
  width: 70px !important;
}
}
</style>