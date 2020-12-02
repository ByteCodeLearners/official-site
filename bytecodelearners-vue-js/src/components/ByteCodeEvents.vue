<template>
    <div class="bcl-events">
        
        <v-card class="events-heading  mx-auto mb-4"> <h1>EVENTS</h1>
        <vue-typer text='Come learn, share and connect with us in person'></vue-typer>
        </v-card>
       <div class="container ">
        <div class="row ">
          <div class="col-sm-13  col-md-6 bcl-small-container-1">
              <v-hover open-delay="211"><center><h1>Current Event</h1></center></v-hover>
              <div class="bcl-current-event-img">
                  <center><img :src="logo"></center>
              </div>
              <div class="bcl-current-event">
               <v-hover close-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</v-hover>
              </div>
          </div>

          <div class="col-sm-13  col-md-6 bcl-small-container-2">
        <v-hover transition="slide-x-transition"><center><h1>Previous Events</h1></center></v-hover>
            <!-- <div class="bcl-previous-event">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolorem?</p>
              </div> -->
    <v-tabs>
    <v-tab v-model="tabone">Item One </v-tab>
    <v-tab>Item Two</v-tab>
    <v-tab>Item Three</v-tab>
    <v-tab>Item Four</v-tab>
    <v-tab>Item Five</v-tab>
    <v-tab>Item Six</v-tab>
    <v-tab>Item Seven</v-tab>
    <v-tab>Item Eight</v-tab>
    <v-tab>Item Nine</v-tab>
    <v-tab>Item Ten</v-tab>
    <v-tab>Item Eleven</v-tab>
    <v-tab-item v-model="tabone">
        hi everyone
    </v-tab-item>
  </v-tabs>


          </div>


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

.bcl-events{
    /* width: 78%; */

}
.events-heading{
      text-align: center;
      font-size: 2em;
      font-weight: 700;
      width: 78%;
}
.bcl-small-container-1{
    border: 1px solid red;
    /* margin: 1%; */
}
.bcl-current-event{
    text-align: center;
}
.bcl-small-container-2{
    border: 1px solid red;
    /* margin: 1%; */
}
.bcl-previous-event{
    text-align: center;
}
.events-heading
{
  text-align: center;
  font-size: 4em;
  font-weight: 700;

}
*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit; 
}
.bcl-events{
  border:1px solid black;
  min-height: 50vh;
}
@media only screen and (max-width:500px)
{
  .events-heading{
    font-size: 2em;
  }
}

</style>