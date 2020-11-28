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
  },
  mounted()
  {
    var intro=document.getElementsByClassName("intro")[0];
    const height=window.outerHeight-150;
    intro.style.height=height+"px";
  }
};
</script>
<style scoped>

</style>
