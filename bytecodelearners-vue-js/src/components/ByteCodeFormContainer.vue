<template>
<form @submit.prevent="$emit('submit',formData)">
    <slot :formData="formData"></slot>
    <input type="submit" value="submit">
</form>
</template>
<script>
export default {
    name:"ByteCodeContainer",
    data:()=>({
         formData:{
            first_name:'',
            middle_name:'',
            last_name:'',
            email:'',
            mobile_number:'',
      }
    })
    
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