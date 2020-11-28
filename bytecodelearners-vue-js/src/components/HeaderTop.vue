<template>
 <div>
    <v-app-bar
      app
      dark
      height="50"
      collapse
    >
    <v-app-bar-nav-icon
    @click="menu=!menu"></v-app-bar-nav-icon>
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

</style>