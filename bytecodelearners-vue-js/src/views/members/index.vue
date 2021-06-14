<template>
<div class="members-page">
  
  <div class="heading">
    <v-card elevation="0" class="members-head">Members</v-card>
  </div>

  <v-card>
    <v-tabs
      v-model="tab"
      background-color="primary"
      dark
      centered
    >
      <v-tab
        v-for="item in items"
        :key="item.year"
      >
        {{ item.year }}
      </v-tab>
    </v-tabs>

    <v-tabs-items v-model="tab">
      <v-tab-item
        v-for="item, key in items"
        :key="key"
        style="display:flex; flex-direction:row"
      >
      <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard2021 :details="i"/>
      </div>
      </v-tab-item>
      <v-tab-item
        v-for="item in items"
        :key="item.year"
        style="display:flex; flex-direction:row"
      >
      <!-- card item -->
      <!-- <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="http://bytecodelearners.club/statics/byte-code-learners.svg" alt="Avatar" style="width:300px;height:300px;">
          </div>
          <div class="flip-card-back">
            <h1>John Doe</h1>
            <p>Architect & Engineer</p>
            <p>We love that guy</p>
          </div>
        </div>
      </div> -->
      <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard :details="i"/>
      </div>
      <!-- card item -->
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
        sliderContent:[],
        tab: null,
        items: [
          { year: '2019', content: 'Tab 1 Content' },
          { year: '2020', content: 'Tab 2 Content' },
          { year: '2021', content: 'Tab 3 Content' },
        ],
      }
    },
    components:{
        MembersDetailsCard2021,
        MembersDetailsCard,
    },
    mounted(){
      API.getAllMembers()
          .then((data)=>{
              this.sliderContent=data.data;
          })
          .catch((err)=>{
              
          })
      },
      API.getAllUsers()
        .then(data=>{
            this.sliderContent=data.data;
        })
        .catch(err=>{
            
        })  
}
</script>

<style>
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

   
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}

</style>