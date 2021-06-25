<template>
<form @submit.prevent="formSubmit">
    <slot></slot>
    <v-btn class="submit-btn"
    color="success"
              dark
              large type="submit"> submit</v-btn>
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
    width: 9vw;
    text-shadow: 1px 1px 1px black;
    border-radius: 13px;
    font-weight: 500;
    margin-top:-7vh;
    height:0.5vh;
}
.v-btn:not(.v-btn--round).v-size--default{
height:3vh;
}

@media only screen and (max-width: 809.9px)and (min-width: 600px){

.v-btn:not(.v-btn--round).v-size--default{
height:4.2vh;
}
.submit-btn{
    width: 18vw;
    font-weight: 600;
    margin-top:-7vh;
}
}

@media only screen and (max-width: 599.9px)and (min-width: 423px){

.v-btn:not(.v-btn--round).v-size--default{
height:4.2vh;
 font-size:1rem;
}
.submit-btn{
    width: 22vw;
    font-weight: 700;
    margin-top:-3vh;
   
}
}
@media only screen and (max-width: 423px){
    .submit-btn{
        width: 25vw;
        margin-top:1vh;
    }
}

</style>