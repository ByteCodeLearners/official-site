<template>
<div class="members-page">
  
  <div class="heading">
    <v-card elevation="0" class="members-head">Members</v-card>
  </div>

  <v-card>
    <v-tabs
      v-model="tab"
      background-color="rgba(0, 180, 0, 0.4)"
      light
      centered
    >
      <v-tab
        v-for="item in items"
        :key="item.year"
      >
        <b>{{ item.year }}</b>
      </v-tab>
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item
        v-for="item, key in items"
        :key="key"
        class="tabs"
        style="display:flex; flex-wrap:wrap;flex-direction:row;justify-content: space-between;margin:10px;"
      >
      <template v-if="item.members!=null">
        <div class="bcl-group-slider-content" v-for="(i ,key) in item.members" :key="key">
          <MembersDetailsCard2021 :details="i"/>
        </div>
      </template>
      <template v-else>
        <InitiatorCards class="bcl-group-slider-content"  v-for="(initiator,key) in initiators" :key="key" :details="initiator"/>
      </template>
      
      </v-tab-item>
      
    </v-tabs-items>
  </v-card>

  </div>
</template>
<script>
import API from "../../config/api"
import MembersDetailsCard2021 from "../../components/UI/ByteCodeMemberDetailsCard2021"
// import MembersDetailsCard from "../../components/UI/ByteCodeMemberDetailsCard"
// import ByteCodeSlider2021 from "../../components/Layout/ByteCodeSlider2021";
import InitiatorCards from "../../components/UI/InitiatorCards";

export default {
    name:'BytecodeMembers',
     data () {
      return {
        tab: null,
        items: [
          { year: '2018', members: null},
          { year: '2019', members: null},
          { year: '2020', members: null},
          // { year: '2021', members: null},
        ],
        initiators:[
                    {
                        fullName:"Dipu Kumar Sah",
                        imageUrl:"http://bytecodelearners.club/initiators-image/dipu-kumar-sah.jpg",
                        socialLinks:{
                            github:"https://github.com/dipu-kr-sah",
                            email:"dipuxah7@gmail.com",
                            linkedin: "https://www.linkedin.com/in/dipu-kumar-sah-07b308181/",
                        }
                    },
                    {
                        fullName:"Yash Raj",
                        imageUrl:"http://bytecodelearners.club/initiators-image/yash-raj.jpg",
                        socialLinks:{
                            github:"https://github.com/180905",
                            email:"yash180905@gmail.com",
                            linkedin: "https://www.linkedin.com/in/yash-raj-3719111b2/",
                        }

                    },
                    {
                        fullName:"Raj Patel",
                        imageUrl:"http://bytecodelearners.club/initiators-image/raj-patel.jpg",
                        socialLinks:{
                            github:"https://github.com/rajpatel2619",
                            email:"kakhilesh79@gmail.com",
                            linkedin :"https://www.linkedin.com/in/rajpatel2619/",

                        }
                    },
                    {
                        fullName:"Shantanu Pratap",
                        imageUrl:"http://bytecodelearners.club/initiators-image/shantanu-pratap.jpg",
                        socialLinks:{
                            linkedin: "https://www.linkedin.com/in/shantanu-p-291b991b4",
                            github:"https://github.com/180896-cse",
                            email:"shantanupratap180896@gmail.com",
                            
                        }
                    },
                ]
        
      }
    },
    components:{
        MembersDetailsCard2021,
        // MembersDetailsCard,
        InitiatorCards,
    },
    mounted(){
      
       API.getAllUsers()
        .then(details=>{
            this.items[2]['members'] = details.data;
        })
        .catch(err=>{
            
        }) ;
      API.getAllMembers()
          .then((details)=>{
              this.items[1]['members'] = details.data;
          })
          .catch((err)=>{
              
          }); 
      },
     
}
</script>

<style>
.tabs{
  /* background: rgb(73, 243, 144); */
  display:flex; 
  flex-wrap:wrap;
  flex-direction:row;
  justify-content: space-between;
  padding:10px;
}
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: .5;
  position: absolute;
  width: 100%;
}
@import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif&display=swap');
    .members-page{
        width: 90%;
        margin-left: 5%;
    }
   
    .members-head{
        text-align:center;
        flex-grow: 1;
        font-size: 3.5em;
    }
   

    .heading{
        display: flex;
        flex-direction: row;
    }
    
    @media only screen and (max-width: 960px)
    {   
        .heading{
            flex-direction: column;
            align-items: center;
        }
        
    }

.coming-soon{
  height: 250px;
}
h3 {
  margin: 0;
  padding: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  font-family: Times New Roman, serif;
  /* background: -webkit-linear-gradient(deeppink, yellow, deeppink, purple);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; */
  font-size: 6.5vw;
  /* text-transform: uppercase; */
}
h3:before {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  transform-origin: bottom;
  transform: rotateX(180deg);
  line-height: 1.14em;
 background: linear-gradient(0deg, #000000 0, transparent 70%);
 background-clip: text;
 -webkit-text-color: transparent;
  opacity: 0.3;
}
</style>