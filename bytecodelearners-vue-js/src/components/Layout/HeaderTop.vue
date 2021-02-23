<template>
 <div>
    <NavigationDrawer :menu="menu" @closeNavigationDrawer="menu=false"/>

  <div class="bcl-menu-drawer-pull-container" @click="menu=true">
    <div class="bcl-menu-drawer-pull-btn ">
      <v-icon class="material-icons bcl-menu-drawer-pull-btn-icon" title="press m to toggle menu">
        mdi-chevron-left
      </v-icon>
    </div>
  </div>
  
 </div>
</template>

<script>
import NavigationDrawer from "./ByteCodeNavigationDrawer"
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

@media only screen and (max-width: 500px) {
  .bcl-menu-drawer-pull-btn-icon{
    font-size: 2em;
  }
}

</style>