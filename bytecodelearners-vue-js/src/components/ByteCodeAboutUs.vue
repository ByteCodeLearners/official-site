<template>
    <div class="bcl-events">
        
        <v-card class="events-heading  mx-auto mb-4" flat outlined> About Us </v-card>
        <vue-typer class="typer" text='We make this happen!'></vue-typer>
       
       <div class="container ">
        
        <div class="row ">
         
         <v-card class="col-sm-12   col-md-6 bcl-small-container-1" outlined   color="rgba(0,0,0,0.1)">
              
              <div class="bcl-current-event">
               <v-hover close-delay="200">ByteCodeLearners is a coding community at university,
                    where students apply their skills into developing the applications for
                     the benefit of the sociaty and enhancing their own skills in the process.</v-hover>
              </div>
         </v-card>

        <v-card class="col-sm-12   col-md-6 bcl-small-container-2"  outlined color="rgba(0,0,0,0.1)">
           <div class="bcl-previous-events">
              <center><img :src="logo" alt=""></center>

           </div>
       
        </v-card>


          </div>


        </div>
        
      </div>


</template>

<script>
export default {
    name: 'About',
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