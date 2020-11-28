!<template>
  <div class="intro">
      <div class="content">
        <div class="bcl-intro-text-container align-content-center-column">
          <div class="bcl-intro-text">
            <div class="heading">Coding Community</div>
            <div class="sub-text">create something ctrl + n</div>
          </div>
        </div>
        <div class="bcl-side-image align-content-center-column ">
        <img :src="logo">
        </div>
      </div>
      <div class="slide-btn align-content-center-row" @click="scrollDown">
        <span class="material-icons " style="font-size:4em;color:white">keyboard_arrow_down</span>
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
      const toScrollHeight=document.getElementsByClassName("intro")[0];
      window.scrollBy(0,toScrollHeight.clientHeight)
    }
  },
}
</script>

<style>
.heading{
  font-size: 6em;
  font-weight: 700;
  color:#fff;
}
.intro
{
  scroll-behavior: smooth;
  height: 100vh !important;
  margin: 0;
  padding: 0;
  position: relative; 
}
.content
{
  height: 100%;
  display: flex;
  flex-direction: row;
  background: black;
}
.bcl-intro-text-container{
  
  width: 60%;
  color: #fff;
}
.bcl-intro-text{
  margin: 0 0 0 10%;
  padding: 0;
}
.bcl-side-image 
{
  width: 30%;
  margin: 0;
  padding: 0;
}
.bcl-side-image  img
{
  width: 50%;
  margin: 30%;
}
.social-links{
  margin-top:7vh;
  width: 30%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
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
.align-content-center-row{

  display: flex;
  flex-direction: row;
  justify-content: center;
  align-content: center;
}
.align-content-center-column{

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
}

.sub-text
{
  text-transform: capitalize;
  font-size: 1.3em;
}

@media only screen and (max-width: 600px) {
  .content {
    flex-direction: column;
    height: auto;
  }
  
  .bcl-intro-text-container .heading{
  font-size: 3.5em;
  }
  .bcl-intro-text{
    font-size: 0.8em;
  }
   .bcl-side-image img{
    width:100%;
    height:100%;
  }
  .slide-btn {
    display: none;
  }
}
</style>