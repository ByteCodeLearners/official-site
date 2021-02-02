<template>
  <div class="bcl-member-regstration-container">
      <div class="registration-form-title">
          New ByteCoder
      </div>
     <div class="bcl-member-registration-form">
         <center><img :src="url" width="200px" alt=""></center>
          <FormContainer @submit="addNewMember" :formData="forms" >
            <template>
                <v-file-input type="file" @click:clear.prevent="fileFieldCleared" @change="filePicked($event)" accept="image/*" prepend-icon="mdi-camera" outlined required></v-file-input>
                <v-text-field label="First Name" type="text" name="first_name" v-model="forms.first_name" outlined required></v-text-field>
                <v-text-field label="Middle Name" type="text" name="middle_name" v-model="forms.middle_name" outlined></v-text-field>
                <v-text-field label="Last Name" type="text" name="last_name" v-model="forms.last_name" outlined required></v-text-field>
                <v-text-field label="Email" type="email" name="email" v-model="forms.email" outlined required></v-text-field>
                <v-text-field label="Mobile Number" type="text" name="mobile_number" v-model="forms.mobile_number" outlined required></v-text-field>
                <v-text-field label="Select Date Of Joining College" v-model="forms.selected_date" type="date" name="batch"  outlined required></v-text-field>
                <v-text-field outlined label="Batch" v-model="getBatchYear" required readonly/>
                <v-text-field outlined label="Password" v-model="forms.password"
                :type="showPassword ? 'text':'password'" 
                :append-icon="showPassword ? 'mdi-eye':'mdi-eye-off'"
                @click:append="showPassword = !showPassword"
                required/>
                <v-text-field outlined label="Re-Enter your password" v-model="forms.rePassword"
                :type="showPassword ? 'text':'password'" 
                :append-icon="showPassword ? 'mdi-eye':'mdi-eye-off'"
                @click:append="showPassword = !showPassword"
                required/>
                <p>{{result}}</p>
                
                <!-- <v-text-field type="text"  name="linkedin"  outlined  label="Linkedin Profile Link" v-model="forms.linkedin"></v-text-field>
                <v-text-field type="text"  name="youtube"  outlined  label="Youtube Channel Link" v-model="forms.youtube"></v-text-field>
                <v-text-field type="text"  name="twitter"  outlined  label="Twitter Profile Link" v-model="forms.twitter"></v-text-field>
                <v-text-field type="text"  name="facebook"  outlined  label="Facebook Profile Link" v-model="forms.facebook"></v-text-field>
                <v-text-field type="text"  name="instagram"  outlined  label="Instagram Profile Link" v-model="forms.instagram"></v-text-field>
                <v-text-field type="text"  name="github"  outlined  label="Github Profile Link" v-model="forms.github"></v-text-field> -->
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
            result:'',
            showPassword:false,
            url:"",
            
            forms:{
                "first_name":'',
                "middle_name":'',
                "last_name":'',
                "email":'',
                "password":'',
                "image":'',
                "batch":'',
                "selected_date":'',
                

            },
        }
    },
    components:{
        FormContainer,
    },
    computed:{
        getBatchYear:
        {   
            get(){
                var year=this.forms.selected_date.split("-")[0];
                this.forms.batch=year;
                return year;
            },
            set(e){
                
                var date=this.forms.selected_date.split("-");
                this.forms.selected_date=e+"-"+date[1]+"-"+date[2]
            }
        }
    },
    methods:{
        addNewMember(e){
            if(this.rePassword!=this.password)
            {
                return;
            }
            API.addNewMember(e)
            .then(data=>{
                for(var key in this.forms){
                    this.forms[key]='';
                }
                this.result = "Welcome To ByteCodeLearners Community , you has been registered Successfully"
                URL.revokeObjectURL(this.url);
                this.url=''

            })
            .catch(err=>{
                this.result = "Registration Failed . Please Re-submit or try again later ."
            })
        },
        fileFieldCleared(e){
            URL.revokeObjectURL(this.url);
            this.url=''
        },
        filePicked(e)
        {
            if(!e)
            {
                return;
            }
            this.forms.image=e;
            this.url=URL.createObjectURL(e);
        }
    },

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
.registration-form-title{
    color:rgb(8, 112, 4);
    font-size: 2.6em;
    text-align: center;
    width: 100%;
    font-weight: bold;
}
@media only screen and (max-width:450px) {
    
.registration-form-title{
    color:rgb(8, 112, 4);
    font-size: 2.3em;
    text-align: center;
    width: 100%;
    font-weight: bold;
}
}
</style>