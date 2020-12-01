<template>
  <div class="homepage">
    
    <Introduction/>
    <div id="bcl-index-main-content" class="contents"></div>
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



export default {
    name:"homePage",
    components:{
    Introduction,
    ByteCodeSlider,
    PhotoGallery,
    
  }

}
</script>

<style scoped>
.contents{
  height: 200vh;
}
</style>