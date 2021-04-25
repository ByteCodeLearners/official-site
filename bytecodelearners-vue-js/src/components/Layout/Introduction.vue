!<template>
  <div class="bcl-intro">

<!-- background animation -->
<div class="wrapper">
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
	</div>

<!-- background animation end -->


      <div class="content bcl-align-items-center">
        <div class="bcl-intro-text-container">
          <div class="bcl-intro-text">
            <div class="heading">CODING COMMUNITY</div>
            <div class="sub-text">create something ctrl + n</div>
          </div> 
         <div class="bcl-social-link-container">
            <div class="bcl-social-links">
                <a href="https://www.instagram.com/bytecode_learners/" target="_blank"><v-icon class="bcl-social-media-icons"  dark>mdi-instagram</v-icon></a>
                <a href="https://twitter.com/BytecodeL" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-twitter</v-icon></a>
                <a href="https://www.facebook.com/groups/bytecodelearners/" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-facebook</v-icon></a>
                <a href="https://github.com/ByteCodeLearners/" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-github</v-icon></a>            
            </div>
         </div>
        </div>
        <div class="bcl-side-image bcl-align-items-center ">
        <img :src="logo|staticFile">
        </div>
      </div>
      <div class="slide-btn bcl-align-items-center" @click="scrollDown">
        <span class="material-icons " style="font-size:4em;color:white">keyboard_arrow_down</span>
      </div>
    </div>
   
</template>

<script>
export default {
  name:"Introduction",
  data:()=>({
    logo:"/byte-code-learners.svg"

  }),
  name:"Introduction"
  ,
  methods:{
    scrollDown()
    {
      // smooth scrolling using JQuery
      $(".slide-btn").click(()=>{
        $( 'html, body' ).animate({
          scrollTop: $( "#bcl-index-main-content" ).offset().top
        }, 700 );
      })
    }
  },
  filters:{
    staticFile(e)
    {
      return process.env.VUE_APP_SERVER_STATIC_FILES+e;
    }
  }
}
</script>

<style scoped>
.heading{
  font-size: 6em;
  font-weight: 700;
  color:#fff;
}
.bcl-intro
{
  height: 100vh;
  margin: 0;
  padding: 0;
  position: relative; 
  color: #fff;

}
.content
{
  position: absolute;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: row;
}
.bcl-intro-text-container{
  width: 60%;
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
.bcl-social-links{
  margin: 2% 0 0 10%;
  width:30%;  
  display: flex;
  flex-direction: row;
  justify-content: space-between;

}

.bcl-social-links a{
  text-decoration: none;
  transition: transform .5s;
}
.bcl-social-links a:hover{
  text-decoration:underline;
  color:#fff;
  transform: scale(1.5);
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

.bcl-align-items-center{
  display: flex;
  justify-content: center;
  align-items: center;
}

.sub-text
{
  text-transform: capitalize;
  font-size: 1.6em;
}


/* background animation CSS */


.wrapper {
  background: #50a3a2;
  background: -webkit-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
  background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
  position: absolute;
  /* top: 10%; */
  left: 0;
  width: 100%;
  height: 100vh;
  /* margin-top: -200px; */
  overflow: hidden;
  z-index: 0;
}

.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  -webkit-animation: square 25s infinite;
  animation: square 25s infinite;
  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
  border:1px solid white
}
.bg-bubbles li:nth-child(1) {
  left: 10%;
}
.bg-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
  animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
}
.bg-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
  animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
          animation-delay: 15s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
  font-size: 1.7em;
}
.bg-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
          animation-delay: 11s;
}
@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
  }
}
@keyframes square {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
  }
}
/* background animation CSS */







@media only screen and (max-width:800px) {
  .bcl-intro-text-container .heading{
    font-size: 4.3em;
  }
  
  .bcl-intro-text-container{
    width: 70%;
  }
  .sub-text{
    font-size: 1.2em;
  }
  
  .bcl-side-image{
    height: 100%;
    width: 25%;
    margin: 0;
    padding: 0;
  }
  .bcl-side-image>img{
    width: 100%;
    margin:0;
    padding: 0;
  }
}
@media only screen and (max-width:700px) {
  .bcl-intro-text-container .heading{
    font-size: 4em;
  }
  .content{
    margin-top: 15vh;
    flex-direction: column-reverse;
    height: 50vh;
  }
  .bcl-intro-text-container{
    width: 70%;
  }
  .sub-text{
    font-size: 1.2em;
  }
  
  .bcl-social-links{
  margin: 2% 0 0 10%;
  width:50%;  
  display: flex;
  flex-direction: row;
  justify-content: space-between;

}

  .bcl-side-image{
    height: 100%;
    width: 40%;
    margin: 0;
    padding: 0;
  }
}
@media only screen and (max-width:500px) {
  .bcl-intro ,.wrapper{
    height: 95.5vh;
  }
  .bcl-intro-text-container .heading{
    font-size: 3em;
  }
  .sub-text{
    font-size: 1em;
  }
  .slide-btn
{
  width: 100%;
  height: 70px;
}
}

@media only screen and (max-width: 400px) {
  .bcl-intro-text-container .heading{
    font-size: 3.25em;
  }
  .bcl-intro-text{
    font-size: 0.8em;
  }
}
</style>
