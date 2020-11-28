!<template>
  <div class="intro">
      <div class="content">
        <div class="bcl-intro-text">
          <div class="heading">Coding Community</div>
          <div class="sub-text">Coding | projets| Coding | projets |Coding | projets|Coding | projets .....</div>
          <div class="social-links">
            <a href="https://www.instagram.com/bytecode_learners/" target="_blank"><v-icon href="" dark>mdi-instagram</v-icon></a>
            <a href="https://www.instagram.com/bytecode_learners/" target="_blank"><v-icon href="" dark>mdi-twitter</v-icon></a>
            <a href="https://www.facebook.com/Bytecode-Learners-103644071079006" target="_blank"><v-icon dark>mdi-facebook</v-icon></a>
            <a href="https://github.com/ByteCodeLearners/" target="_blank"><v-icon dark>mdi-github</v-icon></a>

            
          </div>
        </div>
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
    document.getElementsByClassName("intro")[0].style.height=window.outerHeight;
    }
  }
}
</script>

<style>
.heading{
  font-size: 4em;
  font-weight: 700;
  color:#fff;
}

.intro
{
  scroll-behavior: smooth;
  position: relative;
}
.content
{
  height: 100%;
  display: flex;
  flex-direction: row;
  background: black;
}
.bcl-intro-text{
  margin: 20vh 20vh 0 5vw;
  width: 60%;
  color: #fff;
}
.social-links{
  margin-top:7vh;
  width: 30%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.social-links a{
  text-decoration: none;
}
.social-links a:hover {
  text-decoration: underline;
  text-decoration-color: #fff ;
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

@media only screen and (max-width: 600px) {
  .content {
    flex-direction: column;
    height: auto;
  } 
  
  .bcl-intro-text .heading{
  font-size: 3.5em;
  }
   .bcl-side-image img{
    width:100%;
    height:auto;
  }
  .slide-btn {
    display: none;
  }
  .social-links{
    width: 70%;
  }
}
</style>