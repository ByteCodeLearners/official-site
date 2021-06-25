<template>
  <div class="mainContainer">
      <div class="bytecodeLogo"> <router-link :to="{ path: '/' }"><img :src="`/bytecode.png`|staticFile" alt="" /></router-link> </div>
      <div class="container">
          <h1 class="heading">~: Registration :~</h1>
            <FormContainer @submit="addNewMember" :formData="forms" >
               <div class="main">
                  <div  class="row">
                        <span class="material-icons">person</span>
                          <div class="inputname">
                          <input
                            type="text"
                            required
                            placeholder="First Name"
                            class="f_name" 
                            v-model="forms.first_name"
                          />
                         <input type="text" 
                            placeholder="Last Name" 
                            class="l_name" 
                            v-model="forms.last_name" 
                         />
                         </div>
                    
                  </div>

            
              <div class="row">
                <span class="material-icons">call</span>
                <input
                  type="tel"
                  placeholder="Mobile No."
                  value="+91"
                  maxlength="13"
                  class="for_mobile"
                  v-model="forms.mobile_number"
                />
              </div>
              <div class="row">
                <span class="material-icons">photo_camera</span>
                <input
                  type="file"
                  required
                  placeholder="Image"
                  class="for_image"  
                  @click:clear.prevent="fileFieldCleared" 
                  @change="filePicked($event)" 
                  accept="image/*"
                />
              </div>
           
            <div class="row">
              <span class="material-icons">event_note</span>
              <input
                type="date"
                required
                placeholder="select date of joining college "
                class="for_"
                v-model="forms.selected_date"
              />
            </div>

            <div class="row">
              <span class="material-icons">school</span>
              <input type="number" placeholder="Batch" class="for_" v-model="getBatchYear" />
            </div>

            <div class="row">
              <span class="material-icons">person_pin_circle</span>
              <input
                type="text"
                required
                placeholder="Address"
                class="for_"
              />
            </div>

            <div class="row">
              <span class="material-icons">mail_outline</span>
              <input type="email" required placeholder="Email" class="for_" 
              v-model="forms.email"/>
            </div>

            <div class="row">
              <span class="material-icons">security</span>
              <input
                type="password"
                required
                placeholder="Password"
                class="for_"
                id="first_ps"
                v-model="forms.password" 
              />
              <span class="material-icons" @click="show()" id="open"
                >visibility_off</span
              >
            </div>

            <div class="row">
              <span class="material-icons">security</span>
              <input
                type="password"
                required
                placeholder="Confirm Password"
                class="for_"
                id="second_ps"
                v-model="forms.rePassword"
              />

              <span class="material-icons" @click="show1()" id="open1"
                >visibility_off</span
              >
            </div>
            <!-- <div class="for_button">
              <button class="submit" type="submit">Submit</button>
          </div> -->
          </div>
        </FormContainer>
        
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
                <!-- <v-text-field label="Select Date Of Joining College" v-model="forms.selected_date" type="date" name="batch"  outlined required></v-text-field> -->
                <v-text-field outlined label="Batch Starting Year (Eg:- 2020)" name="batch" v-model="batch" required/>
                <v-text-field type="text"  name="linkedin"  outlined  label="Linkedin Profile Link" v-model="forms.linkedin"></v-text-field>
                <v-text-field type="text"  name="youtube"  outlined  label="Youtube Channel Link" v-model="forms.youtube"></v-text-field>
                <v-text-field type="text"  name="twitter"  outlined  label="Twitter Profile Link" v-model="forms.twitter"></v-text-field>
                <v-text-field type="text"  name="facebook"  outlined  label="Facebook Profile Link" v-model="forms.facebook"></v-text-field>
                <v-text-field type="text"  name="instagram"  outlined  label="Instagram Profile Link" v-model="forms.instagram"></v-text-field>
                <v-text-field type="text"  name="github"  outlined  label="Github Profile Link" v-model="forms.github"></v-text-field>
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
               
             <p v-if="result">{{result}}</p>
             <br>
            </template>
      </FormContainer>
     </div>
  </div>
</template>

<script>
import API from "../../../config/api.js"
import FormContainer from "../../../components/UI/ByteCodeFormContainer"
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
                // "selected_date":'',
            },
        }
    },
    components:{
        FormContainer,
    },
    computed:{
        // getBatchYear:
        // {   
        //     get(){
        //         var year=this.forms.selected_date.split("-")[0];
        //         this.forms.batch=year;
        //         return year;
        //     },
        //     set(e){
                
        //         var date=this.forms.selected_date.split("-");
        //         this.forms.selected_date=e+"-"+date[1]+"-"+date[2]
        //     }
        // }
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