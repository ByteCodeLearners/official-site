<template>
  <div class="homepage">
    <Introduction/>
    <div class="contents"></div>
    <ByteCodeSlider/>

  </div>
</template>

<script>
import ByteCodeSlider from "@/components/ByteCodeSlider"
import Introduction from "@/components/Introduction"
export default {
     components:{
    Introduction,
    ByteCodeSlider,
  }

}
</script>

<style scoped>
.contents{
  height: 200vh;
}
</style>