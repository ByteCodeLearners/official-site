<template>
  <v-app
  dark>
    <HeaderComponent/>
    <router-view/>
    <ByteCodeFooter/>
  </v-app>
</template>

<script>
import HeaderComponent from "@/components/HeaderTop"
import ByteCodeFooter from "@/components/ByteCodeFooter"
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
