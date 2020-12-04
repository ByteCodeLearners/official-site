<template>
 <div>
    <!-- <v-app-bar
      app
      collapse
      class="bcl-menu-bar"
    >
    <button @click="menu=!menu">
      <span class="material-icons menu-icon">{{(!menu)?"menu":"close"}}</span>
    </button>
    </v-app-bar> -->
    <NavigationDrawer :menu="menu" @closeNavigationDrawer="menu=false"/>

  <div class="bcl-menu-drawer-pull-container" @click="menu=true">
    <div class="bcl-menu-drawer-pull-btn ">
      <div class="material-icons bcl-menu-drawer-pull-btn-icon" title="press m to toggle menu">
        keyboard_arrow_left
      </div>
    </div>
  </div>

 </div>
</template>

<script>
import NavigationDrawer from "@/components/ByteCodeNavigationDrawer"
export default {
  name:"HeaderTop",
  data:()=>({
    menu:false,
  }),
  components:{
    NavigationDrawer,
  },
  mounted(){
    window.addEventListener("keydown",(e)=>{
      if(e.keyCode==27 && this.menu)
      {
        this.menu=false;
      }
    })
  }

}
</script>

<style scoped>
.bcl-menu-drawer-pull-container{
  height: 100vh;
  position: fixed;
  z-index: 1;
  width: 30px;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background: transparent ;
}
.bcl-menu-drawer-pull-btn{
  height: 100px;
  border: 1px solid black;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(73, 243, 144);
  cursor: pointer;
}
.bcl-menu-drawer-pull-btn-icon{
  font-size: 2.5em;
}
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
  height: 70px;
}

.bcl-small-text{
  font-size: 1em;
  
}
.bcl-medium-text{
  font-size: 1.3em;
}

.bcl-large-text{
  font-size: 1.3em;
}

.bcl-menu-item-icon{
  height: 100%;
  width: 30%;
  font-size: 2.6em;
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
  .bcl-menu-drawer-pull-container{
  position: fixed;
  z-index: 1;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;

}

.bcl-menu-drawer-pull-btn-icon{
  font-size: 2em;
}
.bcl-menu-bar{
  outline: 0 !important;
}

.bcl-menu-item-icon{
  width: 30%;
  font-size: 2.5em;
}
.bcl-small-text{
  font-size: 1em;
  
}
.bcl-medium-text{
  font-size: 1.2em;
}

.bcl-large-text{
  font-size: 1.2em;
}
.bcl-menu-item{
  height: 70px;
}


}


@media only screen and (max-width: 400px) {
.bcl-menu-item-icon{
  width: 20%;
  font-size: 2em;
}
.bcl-small-text{
  font-size: 0.8em;
  
}
.bcl-medium-text{
  font-size: 1em;
}

.bcl-large-text{
  font-size: 1em;
}
.bcl-menu-item{
  height: 50px;
}


}
</style>