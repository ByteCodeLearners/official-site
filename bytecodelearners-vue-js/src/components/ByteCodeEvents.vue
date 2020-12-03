<template>
    <div class="bcl-events" id="events">
        
        <v-card class="events-heading  mx-auto mb-4" flat outlined> EVENTS
        </v-card>
        <vue-typer class="typer" text='Come learn, share and connect with us in person'></vue-typer>
       <div class="container ">
        <div class="row ">
         <v-card class="col-sm-12  col-md-6 bcl-small-container-1" outlined   color="rgba(0,0,0,0.1)">
              <center><h1>UPCOMING EVENTS</h1></center>
              <div class="bcl-current-event-img">
                  <center><img :src="logo"></center>
              </div>
              <div class="bcl-current-event">
               <v-hover close-delay="200"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</span></v-hover>
              </div>
      
         </v-card>
        <v-card class="col-sm-12  center col-md-6 bcl-small-container-2"  outlined color="rgba(0,0,0,0.1)">
         
           <center><h1>PREVIOUS EVENTS</h1></center>
           <div class="bcl-previous-events">
               <div class="bcl-previous-event-content">
                <img :src="logo">
               </div>
                <div class="bcl-previous-event-content">
                <img :src="logo">
               </div>
                <div class="bcl-previous-event-content">
                <img :src="logo">
               </div>
                <div class="bcl-previous-event-content">
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
    text-align: center;
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

@media only screen and (max-width:500px)
{
  .events-heading{
    font-size: 2em !important;
  }
  .bcl-current-event-img img{
      width:12em;
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