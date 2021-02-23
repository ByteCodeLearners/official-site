<template>

  <div class="login">
    <notifications position="center top" group="login_notification"/>
<center><h1>ByteCodeLearners Members Login</h1></center>
<br><br>
    <v-card width="400" class="mx-auto my-auto" style="margin-top:40vh">
      <v-card-title>
      <h1 class="display-1">LOGIN</h1>
      </v-card-title>
      <v-card-text>
        <v-form>
          <v-text-field
          label="USERNAME"
          v-model="email"
          prepend-icon="mdi-account-circle"
          />
          <v-text-field 
          :type="showPassword ? 'text':'password'" 
          label="PASSWORD" 
          v-model="password"
          prepend-icon="mdi-lock"
          :append-icon="showPassword ? 'mdi-eye':'mdi-eye-off'"
          @click:append="showPassword = !showPassword"
          />
          <form method="get" action="http://medicaresolution.in/accounts/reset_password/">
           <v-btn
              text
              color="primary"
              
              type="submit"
            >
              Forget Password
            </v-btn>
          </form>
        
        </v-form>
      </v-card-text>
      <v-divider></v-divider>
      <v-card-actions>
      <v-btn color="success" to="/sign_up">Register</v-btn>
      <v-spacer />
      <v-btn color="info" @click="log_in">Login</v-btn>
      </v-card-actions>
    </v-card>
  </div>
</template>


<script>

import axios from 'axios'
import API from '../../config/api.js'



export default {
  name: 'Log_In',

  data : ()=>{
      return{
          email:'',
          password:'',
          showPassword:false,
      }
  },

  methods:{
      log_in(){
        //   this.$store.dispatch('addState',this.msg)
    // this.store = this.$store.state.user;
        //   this.$store.dispatch('LogInState',)
        if(this.email!='' && this.password!='')
        {
          API.log_in(this.email,this.password)
          .then((response)=>{
              localStorage.setItem("token",response.data.token)
              window.scroll({
              top: 0,
              behavior: 'smooth'
            });
              this.$store.dispatch('AuthTokenState', response.data.token)
              API.token = response.data.token


            const token=localStorage.getItem("token");
            
            if(token)
            {
              axios.post(process.env.VUE_APP_SERVER+'/accounts/clientlogin',{"token":token})
              .then((response)=>
              {
                // console.log(response.data)
                this.$store.dispatch('ClientData', response.data)
                
                
              })
              .catch(()=>{
                    // localStorage.removeItem('token')   
                this.$notify({ group: 'login_notification',title: '<h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M24 3.752l-4.423-3.752-7.771 9.039-7.647-9.008-4.159 4.278c2.285 2.885 5.284 5.903 8.362 8.708l-8.165 9.447 1.343 1.487c1.978-1.335 5.981-4.373 10.205-7.958 4.304 3.67 8.306 6.663 10.229 8.006l1.449-1.278-8.254-9.724c3.287-2.973 6.584-6.354 8.831-9.245z"/></svg> Error</h3>', text: 'Invalid Email Or Password' ,type:'error'})
              })
            }


              this.$router.push("/")
          })
            .catch(()=>{
                // console.log(err.data)
                this.$notify({ group: 'login_notification',title: '<h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M24 3.752l-4.423-3.752-7.771 9.039-7.647-9.008-4.159 4.278c2.285 2.885 5.284 5.903 8.362 8.708l-8.165 9.447 1.343 1.487c1.978-1.335 5.981-4.373 10.205-7.958 4.304 3.67 8.306 6.663 10.229 8.006l1.449-1.278-8.254-9.724c3.287-2.973 6.584-6.354 8.831-9.245z"/></svg> Error</h3>', text: 'Invalid Email Or Password' ,type:'error'})
            })
        }
        else{
            this.$notify({ group: 'login_notification',title: '<h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M24 3.752l-4.423-3.752-7.771 9.039-7.647-9.008-4.159 4.278c2.285 2.885 5.284 5.903 8.362 8.708l-8.165 9.447 1.343 1.487c1.978-1.335 5.981-4.373 10.205-7.958 4.304 3.67 8.306 6.663 10.229 8.006l1.449-1.278-8.254-9.724c3.287-2.973 6.584-6.354 8.831-9.245z"/></svg> Error</h3>', text: 'Please Enter Your Email And Password' ,type:'warn'})
        }
      },

  },


 mounted(){
  
    const token=localStorage.getItem("token");
    
    if(token)
    {
      axios.post(process.env.VUE_APP_SERVER+'/accounts/clientlogin',{"token":token})
      .then((response)=>
      {
        // console.log(response.data)
        this.$store.dispatch('ClientData', response.data)
        
        this.$router.push("/");
      })
      .catch(()=>{
            localStorage.removeItem('token')   
      })
    }
    
  },

}
</script>

<style scoped>
.login{
    padding-top: 10vh;
    padding-bottom: 10vh;
    /* height: 85vh; */
    width: 100%;
    min-height: 90vh;
    /* background-image: url(../assets/login_back.jpg); */
    background: rgb(73, 243, 144);
    background-size: cover;
}
</style>