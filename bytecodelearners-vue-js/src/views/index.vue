<template>
  <div class="homepage">
    <Introduction/>
    <ByteCodeSlider/>
    <PhotoGallery />
  </div>
</template>

<script>
import ByteCodeSlider from "@/components/ByteCodeSlider"
import Introduction from "@/components/Introduction"
import PhotoGallery from "@/components/PhotoGallery"

export default {
     components:{
    Introduction,
    ByteCodeSlider,
    PhotoGallery,
  }

}
</script>

<style scoped>

</style>