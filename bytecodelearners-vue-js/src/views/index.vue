<template>
  <div class="homepage">
    
    <Introduction/>
    <div id="bcl-index-main-content" class="contents"></div>
    <Events/>
    <ByteCodeSlider/>
    <v-container>
    <PhotoGallery />

    </v-container>
  </div>
</template>

<script>
import ByteCodeSlider from "@/components/ByteCodeSlider"
import Introduction from "@/components/Introduction"
import PhotoGallery from "@/components/PhotoGallery"
import Events from "@/components/ByteCodeEvents"



export default {
    name:"homePage",
    components:{
    Introduction,
    Events,
    ByteCodeSlider,
    PhotoGallery,
    
  }

}
</script>

<style scoped>
.contents{
  height: 100vh;
}
</style>