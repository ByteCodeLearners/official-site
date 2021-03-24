<template>
    <div class="bcl-about-us">
        
        <v-card class="about-us-heading  mx-auto mb-4" flat outlined> ABOUT US </v-card>
        <vue-typer class="typer" :text="['We make this happen!!!','Come, Learn, Guide, Make Your Network!!!']" :shuffle='true'></vue-typer>
       
       <div class="container ">
        
        <div class="row ">
         
         <v-card class="col-sm-12  col-md-6 bcl-small-container-1" data-aos="fade-right" data-aos-duration="1600" color="rgba(0,0,0,0)">
              
              <div class="about-us-content">
              <vue-typer class="typer" text="ByteCodeLearner is a group of students working together with patience and enthusiasm to create something Ctrl + N.
Anyone who is passionate about exploring the technologies or want to learn something new can join the club.
We believe that learning together is fun.
Along with academic knowledge, various skills are there , a student should have.
We are here for you to introduce all those things and build your personality full with required skills." :repeat=0></vue-typer>
              </div>
         </v-card>

        <v-card class="col-sm-12   col-md-6 bcl-small-container-2" data-aos="fade-left" data-aos-delay="1600" data-aos-duration="1600" color="rgba(0,0,0,0)">
           <div class="bcl-about-us-img">
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
    logo:process.env.VUE_APP_SERVER_STATIC_FILES+"/bytecode.png"
  }),
}
</script>
<style scoped>
.about-us-heading
{
  text-align: center;
  font-size: 4em;
  font-weight: 700;
}
.bcl-about-us{
  /* border:1px solid black; */
  min-height: 50vh;
}
.bcl-about-us .about-us-heading{
      text-align: center;
      /* border: 1px solid black; */
      font-size: 4em;
      font-weight: 700;
      margin: 0;
      /* width: 78%; */
}
.bcl-about-us  .typer{
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
.about-us-content{
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
/* .bcl-small-container-2{
    border: 1px solid red;
    margin: 1%;
} */

.bcl-about-us-img .line1{
    text-align: center;
    display: flex;
    margin: 2%;
    justify-content: center;
}
.bcl-about-us-img .line1 img{
    height: 12em;
    margin: 2%;
}
.bcl-about-us-img .line2{
    text-align: center;
    display: flex;
    margin: 2%;
    justify-content: center;
}
.bcl-about-us-img .line2 img{
    height: 12em;
    margin: 2%;
}


@media only screen and (max-width:500px)
{
  .about-us-heading{
    font-size: 2em !important;
  }
  .bcl-about-us-img img{
      width: 10em;
  }


}

</style>
