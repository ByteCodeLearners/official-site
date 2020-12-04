<template>
  <div class="bcl-member-regstration-container">
     <div class="bcl-member-registration-form">
         <img :src="url" alt="">
          <FormContainer @submit="addNewMember" :formData="forms" >
            <template>
                <v-file-input type="file"  @change="filePicked($event)" accept="image/*" prepend-icon="mdi-camera"></v-file-input>
                <v-text-field label="First Name" type="text" name="first_name" v-model="forms.first_name" outlined></v-text-field>
                <v-text-field label="Middle Name" type="text" name="middle_name" v-model="forms.middle_name" outlined></v-text-field>
                <v-text-field label="Last Name" type="text" name="last_name" v-model="forms.last_name" outlined></v-text-field>
                <v-text-field label="Email" type="email" name="email" v-model="forms.email" outlined></v-text-field>
                <v-text-field label="Mobile Number" type="number" name="mobile_number" v-model="forms.mobile_number" outlined></v-text-field>
                <v-text-field label="Batch " type="number" name="batch" v-model="forms.batch" outlined></v-text-field>
            </template>
      </FormContainer>
     </div>
  </div>
</template>

<script>
import API from "@/config/api.js"
import FormContainer from "@/components/ByteCodeFormContainer"
export default {
    data(){
        return{
            url:"",
            forms:{},
        }
    },
    components:{
        FormContainer,
    },
    methods:{
        addNewMember(e){
            for(var pair of e.entries())
            {
                console.log(pair[0],pair[1]);
            }
            API.addNewMember(e)
            .then(data=>{
                console.log(data);
            })
            .catch(err=>{
                console.log(err);

            })
        },
        filePicked(e)
        {
            if(!e)
            {
                return;
            }
            this.forms.image=e;
            this.url=URL.createObjectURL(e);
        },
    }

}
</script>

<style scoped>
.bcl-member-regstration-container{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center ;
    justify-content: center;
}
.bcl-member-registration-form{
    margin: 5%;
    width: 60%;
}
</style>