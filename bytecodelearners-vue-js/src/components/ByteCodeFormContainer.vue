<template>
<center>
<form @submit.prevent="$emit('submit',submitForm)">
    <slot :formData="formData"></slot>
    <input type="submit" value="submit">
</form>
</center>

</template>

<script>
import API from '../config/api.js'

export default {
    name:"ByteCodeContainer",
    data:()=>({
         formData:{
            first_name:'',
            middle_name:'',
            last_name:'',
            email:'',
            mobile_number:'',
            batch_year:'',
            image:'',
            facebook:'',
            twitter:'',
            instagram:'',
            linkedin:'',
            github:'',
      }
    }),
    methods: {
        
        submitForm(){
            let SendformData = new FormData();
            for(var key in this.formData)
            {
                SendformData.append(key,this.formData[key])
            }
            console.log(SendformData)
            API.addNewMember(SendformData)
            return SendformData
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