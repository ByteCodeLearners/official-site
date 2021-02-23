<template>
  <v-app>
    <HeaderComponent/>
    <router-view/>
    <ByteCodeFooter/>
  </v-app>
</template>

<script>
import HeaderComponent from "./components/Layout/HeaderTop"
import ByteCodeFooter from "./components/Layout/ByteCodeFooter"
export default {
  name: 'App', 

  data: () => ({
  }),
  components:{
    HeaderComponent,
    ByteCodeFooter,
  }
  ,
  methods:{
    test()
    {
      console.log("hello")
    }
  }
};
</script>
<style scoped>

</style>
