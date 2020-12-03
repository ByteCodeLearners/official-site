<template>
    <div class="bcl-events">
        
        <v-card class="events-heading  mx-auto mb-4" flat outlined> EVENTS
        </v-card>
        <vue-typer class="typer" text='Come learn, share and connect with us in person'></vue-typer>
       <div class="container ">
        <div class="row ">
         <v-card class="col-sm-12  col-md-6 bcl-small-container-1" outlined   color="rgba(0,0,0,0.1)">
              <center><h1>Upcoming Event</h1></center>
              <div class="bcl-current-event-img">
                  <center><img :src="logo"></center>
              </div>
              <div class="bcl-current-event">
               <v-hover close-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</v-hover>
              </div>
      
         </v-card>
        <v-card class="col-sm-12  center col-md-6 bcl-small-container-2"  outlined color="rgba(0,0,0,0.1)">
         
           <center><h1>Previous Events</h1></center>
           <div class="bcl-previous-events">
               <div class="line1">
               <img :src="logo">
               <img :src="logo">
               </div>
               <div class="line2">
               <img :src="logo">
               <img :src="logo">
               </div>

           </div>
       
        </v-card>


          </div>


        </div>
        
      </div>


</template>

<script>
export default {
          data:()=>({
    logo:require("@/assets/bytecode.png")
  }),
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
  /* border:1px solid black; */
  min-height: 50vh;
}
.bcl-events .events-heading{
      text-align: center;
      /* border: 1px solid black; */
      font-size: 4em;
      font-weight: 700;
      margin: 0;
      /* width: 78%; */
}
.bcl-events  .typer{
    font-size: 1em;
    margin: 0;
    /* border: 1px solid black; */
    text-align: center;
    align-content: center;
    display: flex;
    justify-content: center;
}
/* .bcl-small-container-1{
    border: 1px solid red; 
     margin: 1%; 
}  */
.bcl-current-event{
    text-align: center;
}
/* .bcl-small-container-2{
    border: 1px solid red;
    margin: 1%;
} */

.bcl-previous-events .line1{
    text-align: center;
    display: flex;
    margin: 2%;
    justify-content: center;
}
.bcl-previous-events .line1 img{
    height: 12em;
    margin: 2%;
}
.bcl-previous-events .line2{
    text-align: center;
    display: flex;
    margin: 2%;
    justify-content: center;
}
.bcl-previous-events .line2 img{
    height: 12em;
    margin: 2%;
}


@media only screen and (max-width:500px)
{
  .events-heading{
    font-size: 2em;
  }
  .bcl-current-event-img img{
      width:12em;
  }
  .bcl-previous-events .line1{
      flex-direction: column;
  }
  .bcl-previous-events .line1 img{
      width:12em;
  }
  .bcl-previous-events .line2{
      flex-direction: column;
  }
  .bcl-previous-events .line2 img{
      width:12em;
  }

}

</style>