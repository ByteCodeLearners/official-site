<template>
  <div class="homepage">
    <Introduction/>
    <div id="bcl-index-main-content" class="contents"></div>
    <v-container>
    <About/>
    <Events/>
    <ByteCodeSlider sliderTitle="MEMBERS">
      <v-card style="width:100%;text-align:center"><div id="members">MEMBERS</div></v-card>
    </ByteCodeSlider>
    <PhotoGallery />
    <SocialFeed/>
    </v-container>
  </div>
</template>

<script>
import ByteCodeSlider from "../components/Layout/ByteCodeSlider";
import Introduction from "../components/Layout/Introduction"
import PhotoGallery from "../components/Layout/PhotoGallery"
import Events from "../components/Layout/ByteCodeEvents"
import About from "../components/Layout/ByteCodeAboutUs"


import SocialFeed from "../components/Layout/ByteCodeSocialFeed"
 export default {
    name:"homePage",
    data:()=>({
      formData:{
      }
    }),
    components:{
    Introduction,
    Events,
    About,
    ByteCodeSlider,
    PhotoGallery,
    SocialFeed,
  },
  methods:{
  }

</script>

<style scoped>
/* .contents{
  height: 100vh;
} */
</style>
