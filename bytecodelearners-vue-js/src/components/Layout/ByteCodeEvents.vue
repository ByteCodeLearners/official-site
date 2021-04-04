<template>
    <div class="bcl-events" id="events">
        
        <v-card class="events-heading  mx-auto mb-4" flat outlined> EVENTS
        </v-card>
        <vue-typer class="typer" text='Come, Learn, Share and Connect with us in person'></vue-typer>
       <div class="container ">
        <div class="row ">
         <v-card class="col-sm-12  col-md-6 bcl-small-container-1" data-aos="zoom-in-up" data-aos-duration="1500" color="rgba(0,0,0,0)">
              <center><h1>UPCOMING EVENTS</h1></center>
              <div class="bcl-current-event-img">
                  <center><img :src='results.image |storageFile' width="100%"></center>
                  <!-- upcomingEvent | staticFile -->
                  <br><br>    
              </div>
              
           
            <div class="eventdetails">
              <center><h1>DETAILS OF UPCOMING EVENT</h1></center>
              <!-- Interaction With Juniors ,Batch 2k20!! -->
              <br>
               <div class="bcl-current-event">
                 
               <v-hover close-delay="200"><span><p> Topic: </p><h4> {{results.topic}}</h4></span></v-hover>

             </div> 
            
              <div class="bcl-current-event">
               <v-hover close-delay="200"><span><p> Link: </p><h4><a :href="results.link_details" target="_blank">{{results.link_details}}</a></h4></span></v-hover>
              </div>
              <div class="bcl-current-event">
               <v-hover close-delay="200"><span><p>Details:</p><h4> {{results.note}}</h4></span></v-hover>
              </div>
            </div>  
      
         </v-card>
        <v-card class="col-sm-12  center col-md-6 bcl-small-container-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="1500" data-aos-duration="2000" color="rgba(0,0,0,0)">
         
           <center><h1>PREVIOUS EVENTS</h1></center>
           <div class="bcl-previous-events">
               <div class="bcl-previous-event-content" v-for="(i,key) in prevEvent" :key="key">
                <img :src="i |staticFile">
               </div>
                <!-- <div class="bcl-previous-event-content">
                <img :src="prevEvent[1]">
               </div>
                <div class="bcl-previous-event-content">
                <img :src="prevEvent[2]">
               </div>
                <div class="bcl-previous-event-content">
                <img :src="prevEvent[3]">
               </div>
               <div class="bcl-previous-event-content">
                <img :src="prevEvent[4]">
               </div> -->

           </div>
       
        </v-card>


          </div>


        </div>
        
      </div>


</template>

<script>
import axios from 'axios'
export default {
          data:()=>({
            
            
        ///storage/sdf.jpg /ByteCodeLearners_UpcomingEvent1.jpg
   
    results:'',
    prevEvent:[
                "/prevEvent1.jpg",
                "/prevEvent2.jpg",
                "/prevEvent3.jpg",
                "/prevEvent4.jpg",
                "/prevEvent5.jpg",
              ],
    // logo:"/logo.png",
  }),
  filters:{
    storageFile(e)
    {
      return process.env.VUE_APP_SERVER_STORAGE_FILES+e;
    },
    staticFile(e)
    {
      return process.env.VUE_APP_SERVER_STATIC_FILES+e;
    }
  },
  created() {
          axios.get(process.env.VUE_APP_SERVER_URL+'/getevents').then(response => {
            this.results = response.data;
          })
        },
  
}
</script>
<style scoped>
.events-heading
{
  text-align: center;
  font-size: 4em;
  font-weight: 700;
}
.bcl-events{
  min-height: 50vh;
}
.bcl-events .events-heading{
      text-align: center;
      font-size: 4em;
      font-weight: 700;
      margin: 0;
}
.bcl-events  .typer{
    font-size: 1em;
    margin: 0;
    text-align: center;
    align-content: center;
    display: flex;
    justify-content: center;
}
.bcl-current-event{
    text-align: left;
     margin-left: 10%;
  

}
p{
  font-weight: 600;
  display: inline;
}
h4{
  font-weight: 400;
  display: inline;
}
.bcl-current-event a{
    text-align: center;
   color: white;
    font-size: 18px;
    text-decoration: none;
}
.eventdetails{
  color: white;
  border: rgba(5, 5, 5, 0.966) solid;
  background-color: rgba(0, 0, 0, 0.7);
  padding:20px ;
  height: 30%;
  bottom: 0;
}
.eventdetails h1{
  font-size: 2rem;
}

.bcl-previous-events{

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-content: center;
}
.bcl-previous-event-content{
    width: fit-content;
    margin: 5px;
}

.bcl-previous-events img{
    height: 12em;
    margin: 2%;
}
/* .eventdetails{
  height: 20em;
} */


@media only screen and (max-width:500px)
{
  .events-heading{
    font-size: 2em !important;
  }
  .bcl-current-event-img img{
      width:12em;
  }
  .eventdetails {
    height: 25em;
    width: 16em;
    margin-left: auto;
    margin-right: auto;
    font-size: 12px;
  }
  .eventdetails h1 {
    font-size: 1.5rem;
  }
  .bcl-current-event a {
    font-size: 12px;
  }
  
.bcl-previous-event-content{
    width: fit-content;
    margin: 5px;
}

  .bcl-previous-events img{
      width:150px;
      height: auto;
  }

}

</style>
