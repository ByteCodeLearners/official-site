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
      <div class="bcl-group-slider-content" v-for="(i ,key) in item.members" :key="key">
            <MembersDetailsCard2021 :details="i"/>
      </div>
      </v-tab-item>
      
    </v-tabs-items>
  </v-card>

  </div>
</template>
<script>
import API from "../../config/api"
import MembersDetailsCard2021 from "../../components/UI/ByteCodeMemberDetailsCard2021"
import MembersDetailsCard from "../../components/UI/ByteCodeMemberDetailsCard"
// import ByteCodeSlider2021 from "../../components/Layout/ByteCodeSlider2021";
export default {
    name:'BytecodeMembers',
     data () {
      return {
        tab: null,
        items: [
          { year: '2019', members: null},
          { year: '2020', members: null},
          // { year: '2021', members: null},
        ],
      }
    },
    components:{
        MembersDetailsCard2021,
        MembersDetailsCard,
    },
    mounted(){
      
       API.getAllUsers()
        .then(details=>{
            this.items[1]['members'] = details.data;
        })
        .catch(err=>{
            
        }) ;
      API.getAllMembers()
          .then((details)=>{
              this.items[0]['members'] = details.data;
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


</style>