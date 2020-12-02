<template>
  <div class="homepage">
    
    <Introduction/>
    <div id="bcl-index-main-content" class="contents">

      <!-- EXAMPLE OF ByteCodeFormContainer -->
      <!-- <ByteCodeFormContainer @submit="formSubmit">
        <template :formData="formData">
          <input type="text" name="first_name" v-model="formData.first_name">
          <input type="text" name="middle_name" v-model="formData.middle_name">
          <input type="text" name="last_name" v-model="formData.last_name">
          <input type="text" name="email" v-model="formData.email">
          <input type="text" name="mobile_number" v-model="formData.mobile_number">
        </template>
      </ByteCodeFormContainer> -->

    </div>
    <div id="bcl-index-main-content" class="contents"></div>
    <v-container>
    <Events/>
    <ByteCodeSlider sliderTitle="Members"/>
    <PhotoGallery />

    </v-container>
  </div>
</template>

<script>
import ByteCodeFormContainer from "@/components/ByteCodeFormContainer";
import ByteCodeSlider from "@/components/ByteCodeSlider"
import Introduction from "@/components/Introduction"
import PhotoGallery from "@/components/PhotoGallery"
import api from "@/config/api"
import Events from "@/components/ByteCodeEvents"



export default {
    name:"homePage",
    data:()=>({
      formData:{
      }
    }),
    components:{
    Introduction,
    Events,
    ByteCodeSlider,
    PhotoGallery,
    ByteCodeFormContainer,
    
  },
  methods:{
    formSubmit(e)
    {
      console.log(api)

    }
  }

}
</script>

<style scoped>
.contents{
  height: 100vh;
}
</style>