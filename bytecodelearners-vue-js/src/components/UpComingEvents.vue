<template>
    <div id="form">
            <h2 class="heading">UPCOMING EVENTS</h2>
             <!-- <form @submit.prevent="addevent" method="post"> -->
                <div class="form-group">
                    <label>Topic</label>
                    <input type="text" name="topic" class="form-control" id="Topic" placeholder="Topic" v-model="topic">
              
                </div>
                <div class="form-group">
                    <label >Link Details</label>
                    <input type="text" name="link_details" class="form-control" id="link" placeholder="meeting link" v-model="link_details"
                        >
                        
                </div>
                <div class="form-group">
                    <label >Add Image</label>
                    <input type="file" name="image" @change="onFileChoosen" class="form-control" id="image" >
                </div>
                <div class="form-group">
                    <label >Add Note</label>
                    <input type="text" name="note" class="form-control" id="note" placeholder="add note" v-model="note">
                        
                </div>
                
                <div class="form-group">
                    <v-btn  
                  color="success" id="button"  @click="addevent">Submit</v-btn>
                </div>
            <!-- </form>  -->
    </div>
</template>
<script>
//import API from "@/config/api.js"
// import Vue from 'vue'
 import axios from 'axios'
// import VueAxios from 'vue-axios'
// Vue.use(VueAxios,axios)

export default {
  data:()=>{
    return{
      
            topic:"",
            link_details:"",
            image:"",
            note:"",      
    }
  },
methods:{
  onFileChoosen(event){
     this.image=event.target.files[0]
   },

   addevent(){
       const fd =new FormData();
       fd.append('topic',this.topic)
       fd.append('image',this.image)
       fd.append('link_details',this.link_details)
       fd.append('note',this.note)

       axios.post(process.env.VUE_APP_SERVER_URL+'/addevents',fd)
       .then(res=>{
           this.topic="";
           this.link_details="";
           this.image=" ";
           this.note="";
       })
   }
  }
}

</script>
<style  scoped>
  h2{
      color: seagreen;
      font-size: 50px;
      text-align: center;
  }
  #form{
      text-align: center;
      border: seagreen solid;
      width: 50%;
      margin-right: auto;
      margin-left: auto;
      margin-bottom: 2%;
      padding:5%;
  }
  .form-group{
      margin-top: 5%;
      text-align: left;
      font-size:20px;
      color: seagreen;
      display: flex;
      flex-direction: row;
  }
  input{
     margin-left:5%; 
     border: seagreen solid;
     width: 50%;
     margin-right: auto; 
     text-align: center; 
     flex: 1;   
  }
  button{
      margin-right: 50%;
      margin-left: 45%;
  }
  label{
      flex:1;
  }
  @media only screen and (max-width:425px){
      #form{
          width: 20em;
      }
      #button{
          margin-left: 35%;
      }
      .heading{
          font-size: 35px;
      }
  }
</style>