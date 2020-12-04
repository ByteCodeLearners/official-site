<template>
<form @submit.prevent="formSubmit">
    <slot></slot>
    <v-btn  type="submit"> submit</v-btn>
</form>
</template>
<script>
export default {
    name:"ByteCodeContainer",
    data:()=>({
    }),
    methods:{
        formSubmit(e)
        {
            let formData=new FormData();
            for(var key in this.formData)
            {
                // console.log(key,this.formData[key])
                formData.append(key,this.formData[key])
            }
            this.$emit('submit',formData);
        }

    },
    props:{
        formData:Object,
    }
    
}
</script>
<style scoped>
input{
    border:1px solid black;
    display: flex;
    flex-direction: column;
    margin: 5px;
}
#submit-btn{
    border: 2px solid red;
    height: 2em;
}
</style>