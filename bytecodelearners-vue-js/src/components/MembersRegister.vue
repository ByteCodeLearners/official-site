<template>
<center>

    <ByteCodeFormContainer @submit="addMember">
        <template :formData="formData">
          <br>
          <center><b>Personal Information</b></center>
          <br>
          first_name <input type="text" name="first_name" v-model="formData.first_name">
          middle_name <input type="text" name="middle_name" v-model="formData.middle_name">
          last_name <input type="text" name="last_name" v-model="formData.last_name">
          email <input type="text" name="email" v-model="formData.email">
          mobile_number <input type="text" name="mobile_number" v-model="formData.mobile_number">
          batch_year <input type="text" name="batch_year" v-model="formData.batch_year">
          image <input type="file" size="10000" name="image" v-on:change="handleFileUpload">
          <br>
          <center><b>Social Links</b></center>
          <br>
          facebook <input type="text" name="facebook" v-model="formData.facebook">
          twitter <input type="text" name="twitter" v-model="formData.twitter">
          instagram <input type="text" name="instagram" v-model="formData.instagram">
          linkedin <input type="text" name="linkedin" v-model="formData.linkedin">
          github <input type="text" name="github" v-model="formData.github">
        </template>
<!-- </form> -->
    </ByteCodeFormContainer>

</center>

</template>

<script>
import API from '../config/api.js'
import ByteCodeFormContainer from "@/components/ByteCodeFormContainer";


export default {
    name:"ByteCodeContainer",
    data:()=>({
         formData:'',
    }),
    components:{
    ByteCodeFormContainer,
  },
    methods: {
        handleFileUpload(event){
        // this.product_image = this.$refs.file.files[0];
        this.formData.image = event.target.files[0]
      },
    
        addMember(e){
            API.addNewMember(e)
        }

    },
      
}
</script>
<style scoped>
input{
    border:1px solid black;
    display: flex;
    flex-direction: column;
    margin: 5px;
}
</style>