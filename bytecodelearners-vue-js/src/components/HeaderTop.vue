<template>
 <div>
    <v-app-bar
      app
      collapse
      class="bcl-menu-bar"
    >
    <button @click="menu=!menu">
      <span class="material-icons menu-icon">{{(!menu)?"menu":"close"}}</span>
    </button>
    </v-app-bar>
    <v-navigation-drawer class="bcl-menu" app v-model="menu">
      <!-- Navigation items -->
        <v-container>
          <div class="bcl-menu-item" @click="scrollToEvents">
           <div class="material-icons bcl-menu-item-icon">supervisor_account</div> <div class="bcl-menu-item-title bcl-large-text">Events</div>
          </div>  
          <div class="bcl-menu-item" @click="scrollToMembers">
           <div class="material-icons bcl-menu-item-icon">groups</div> <div class="bcl-menu-item-title bcl-large-text">Members</div>
          </div>   
          <div class="bcl-menu-item" @click="scrollToEventsGallery">
           <div class="material-icons bcl-menu-item-icon">insert_photo</div> <div class="bcl-menu-item-title bcl-medium-text">Events Gallery</div>
          </div>  
        </v-container>   
    </v-navigation-drawer>
 </div>
</template>

<script>
export default {
  name:"HeaderTop",
  data:()=>({
    menu:true
  }),
  methods:{
    scrollToEvents(){
     this.scrollTo("events")
    },
    scrollToMembers(){
      this.scrollTo("members");
    },
    scrollToEventsGallery(){        
      this.scrollTo("events-gallery");
    },
    scrollTo(e){
      $( 'html, body' ).animate({
          scrollTop: $("#"+e).offset().top
        }, 700,()=>{
          this.menu=false;
        } );
    }

  },
  mounted(){
    window.addEventListener("keydown",(e)=>{
      if(e.keyCode==27)
      {
        this.menu=false;
      }
    })
  }

}
</script>

<style scoped>
.menu-icon
{
  font-size: 2.7em !important;
  color:darkgreen;
}
.bcl-menu-bar{
  height: 60px !important;
  outline: 0 !important;
  background: rgba(0,0,0,0) !important;
  box-shadow: unset !important;
}
.bcl-menu{
  display: flex;
  flex-direction: column;
}
.bcl-menu-item{
  display: flex;
  flex-direction: row;
  cursor: pointer;
  border-bottom: 1px solid black;
  height: 100px;
}

.bcl-small-text{
  font-size: 1em;
  
}
.bcl-medium-text{
  font-size: 1.5em;
}

.bcl-large-text{
  font-size: 1.8em;
}

.bcl-menu-item-icon{
  height: 100%;
  width: 30%;
  font-size: 3em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
}
.bcl-menu-item-title{
  width: 70%;
  font-weight: bold;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}

@media only screen and (max-width: 500px) {
.bcl-menu-bar{
  height: 50px !important;
  width: 70px !important;
}

.bcl-menu-item-icon{
  height: 100%;
  width: 30%;
  font-size: 2em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
}
.bcl-small-text{
  font-size: 0.5em;
  
}
.bcl-medium-text{
  font-size: 1.3em;
}

.bcl-large-text{
  font-size: 1.5em;
}
.bcl-menu-item{
  height: 70px;
}


}
</style>