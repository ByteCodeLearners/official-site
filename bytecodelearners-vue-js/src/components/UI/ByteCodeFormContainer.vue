<template>
<form @submit.prevent="formSubmit">
    <slot></slot>
    <v-btn class="submit-btn" type="submit"> submit</v-btn>
</form>

</template>

<script>
import API from '../../config/api.js'

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
    /* border:1px solid black; */
    /* display: flex; */
    /* flex-direction: column; */
    /* margin: 5px; */
}
form{
    text-align:center;
}
.submit-btn{
    width: 10vw;
    text-shadow: 1px 1px 1px black;
    border-radius: 13px;
    font-weight: 600;
    margin-top: -45px;
}
@media only screen and (max-width: 426px){
    .submit-btn{
        width: 25vw;
    }
}

</style>