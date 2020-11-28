!<template>
  <div class="intro">
      <div class="content">
        <div class="bcl-intro-text"></div>
        <div class="bcl-side-image">
        <img :src="logo">
        </div>
      </div>
      <div class="slide-btn align-content-center" @click="scrollDown">
        <span class="material-icons " style="font-size:4em;color:white">
keyboard_arrow_down
</span>
      </div>
    </div>
   
</template>

<script>
export default {
  data:()=>({
    logo:require("@/assets/bytecode.png")

  }),
  methods:{
    scrollDown()
    {
      const scrollHeight=document.getElementsByClassName("intro")[0];
      window.scrollBy(0,scrollHeight.scrollHeight*1.2)
    }
  }
}
</script>

<style>
.intro, .content
{
  height: 100%;
  scroll-behavior: smooth;
  position: relative;
}
.content
{
display: flex;
flex-direction: row;
background: black;
}
.bcl-intro-text{
  width: 60%;
}
.slide-btn
{
  width: 100%;
  height: 50px;
  background: rgba(0, 150, 0, 0.4);
  position: absolute;
  bottom: 0;
  cursor: pointer;
}

.align-content-center{

    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
}
</style>