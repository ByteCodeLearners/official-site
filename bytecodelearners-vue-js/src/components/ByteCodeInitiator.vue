<template>
    <div class="founderspage">  
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>    
        <!-- <Bs /> -->
        <div class="heading">
           <img class="logo mx-auto mb-4 v-card v-card--flat v-sheet v-sheet--outlined theme--none" src="@/assets/bytecode.png" width="100px;" height="100px;">    
           <h1 class="initiators-head mx-auto mb-4 v-card v-card--flat v-sheet v-sheet--outlined theme--light">FOUNDERS OF THE CLUB</h1>
        </div>
        <p class="text mx-auto mb-3 v-card v-card--flat v-sheet v-sheet--outlined theme--light"><span>BytecodeLearners Club</span> was founded in 2019  by 4 CSE students when they were in their 2nd year of college.<br>
          The main motivation to start such a community was that being from Computer Science background they were very much interested in coding and development.<br>
          In the beginning, when they started their development and coding they found themselves stuck at so many points. And there was no such community in their college to help them.<br>
          They all decided to start a coding community for the coming freshers So that they should not have to face all those difficulties and problems again.<br>
          They came up with a solution to their juniors known as BYTECODELEARNERS.<br>
          The club was just started with 4 members from a classroom of the CENTRAL UNIVERSITY OF HARYANA.
        </p>

         <div class="galary">
      <div id="container1" class="box">
        <div class="photo">
          <img src="@/assets/logo.png"  style="height:320px;"/>
        </div>
        <div class="name">
          Dipu Kumar Shah
        </div>
        <div class="social">
           <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-instagram"></a>
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-github"></a>
           <a href="#" class="fa fa-linkedin"></a>
           <a href="#" class="fa fa-youtube"></a>
        </div>
        
        <!--Button-->
        <!-- <div id="details">
          <button class="button" @click="showModal1 = true">DETAILS</button>
          <transition name="fade" appear>
            <div class="modal-overlay" v-if="showModal1" @click="showModal1 = false"></div>
          </transition>
          <transition name="slide" appear>
            <div class="modal" v-if="showModal1">
              <h1>Lorem Ipsum</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem provident explicabo accusamus laudantium voluptatum nobis sed nesciunt neque possimus molestiae?</p>
              <button class="button" @click="showModal1 = false">Close</button>
            </div>
           </transition>
        </div> -->
      </div>
      <!--cards -->
      <div id="container2" class="box">
        <div class="photo">
          <img src="@/assets/logo.png"  style="height:320px;"/>
        </div>
        <div class="name">
          Shantanu Pratap
        </div>
        <div class="social">
           <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-instagram"></a>
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-github"></a>
           <a href="#" class="fa fa-linkedin"></a>
           <a href="#" class="fa fa-youtube"></a>
        </div>
         <!-- <div id="details">
          <button class="button" @click="showModal2 = true">DETAILS</button>
          <transition name="fade" appear>
            <div class="modal-overlay" v-if="showModal2" @click="showModal2 = false"></div>
          </transition>
          <transition name="slide" appear>
            <div class="modal" v-if="showModal2">
              <h1>Lorem Ipsum</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem provident explicabo accusamus laudantium voluptatum nobis sed nesciunt neque possimus molestiae?</p>
              <button class="button" @click="showModal2 = false">Close</button>
            </div>
           </transition>
        </div> -->
      </div>
      <!--cards -->
      <div id="container3" class="box">
        <div class="photo">
          <img
            src="@/assets/logo.png"  style="height:320px;"/>
        </div>
        <div class="name">
          Yash Raj
        </div>
        <div class="social">
          <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-instagram"></a>
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-github"></a>
           <a href="#" class="fa fa-linkedin"></a>
           <a href="#" class="fa fa-youtube"></a>
        </div>
         <!-- <div id="details">
          <button class="button" @click="showModal3 = true">DETAILS</button>
          <transition name="fade" appear>
            <div class="modal-overlay" v-if="showModal3" @click="showModal3 = false"></div>
          </transition>
          <transition name="slide" appear>
            <div class="modal" v-if="showModal3">
              <h1>Lorem Ipsum</h1>
              <p> consectetur adipisicing elit. Voluptatem provident explicabo accusamus laudantium voluptatum nobis sed nesciunt neque possimus molestiae?</p>
              <button class="button" @click="showModal3 = false">Close</button>
            </div>
           </transition>
        </div> -->
      </div>
      <!--cards -->
      <div id="container4" class="box">
        <div class="photo">
          <img src="@/assets/logo.png" style="height:320px;"/>
        </div>
        <div class="name">
           Raj Patel
        </div>
        <div class="social">
          <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-instagram"></a>
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-github"></a>
           <a href="#" class="fa fa-linkedin"></a>
           <a href="#" class="fa fa-youtube"></a>
        </div>
         <!-- <div id="details">
          <button class="button" @click="showModal4 = true">DETAILS</button>
          <transition name="fade" appear>
            <div class="modal-overlay" v-if="showModal4" @click="showModal4 = false"></div>
          </transition>
          <transition name="slide" appear>
            <div class="modal" v-if="showModal4">
              <h1>Lorem Ipsum</h1>
              <p>Lorem dolor sit amet consectetur adipisicing elit. Voluptatem provident explicabo accusamus laudantium voluptatum nobis sed nesciunt neque possimus molestiae?</p>
              <button class="button" @click="showModal4 = false">Close</button>
            </div>
           </transition>
        </div> -->
      </div>
    </div>
    </div>
</template>

  <//script>
// export default{

//      data(){
//        return{
//          showModal1: false,
//           showModal2: false,
//            showModal3: false,
//             showModal4: false
//        }
//      },
// }
// </script>



<style scoped>

/* header and about */
p{
  text-align: center;
  margin: 50px;
  width: 90%;
}
span{
  background: chartreuse;
  font-family: monospace;
  font-weight: 700;
}
.initiators-head{
    margin-top: 50px;
    text-align:center;
    font-size: 50px;
    width:70%;
    position: relative;
    left: 10%;
}
.logo{

    position: relative;
    left:5%;
    float: left;
}
.text{
    font-size: 25px;
    padding-top: 0;
    word-wrap: break-word;

}


/* image box */
.galary {
  display: flex;
  flex-direction: row;
  margin-top: 3%;
  flex-wrap: wrap;
  justify-content: center;
}
 #container4{
     margin-right: 60px;
} 
.box {
  display: inline-block;
  box-shadow: 2px 2px 20px black;
  border-radius: 5px;
  max-width: 300px;
  min-width: 300px;
  margin-left: 60px;
  margin-bottom: 50px;
}

.photo img {
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}

.name {
  text-align: center;
  padding: 3px;
  font-weight: bold;
  font-size: 30px;
  font-family: monospace;
}

/* Social Icons */
.social{
  margin-bottom: 20px;
  margin-top: 5px;
  text-align: center;
}
.fa {
  padding: 12px;
  width: 42px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  background: rgb(68, 66, 66);
  color: white;
  margin-left: 5px;
  font-size: 20px;
}

.fa:hover {
    opacity: 1.7;
}

.fa-facebook:hover {
  background:  #3b5998;
  color: white;
}

.fa-twitter:hover {
  background: #55ACEE;
  color: white;
}

.fa-linkedin:hover {
  background: #0077b5;
  color: white;
}

.fa-github:hover {
  background: black;
  color: white;
}

.fa-youtube:hover {
  background: #d31010;
  color: white;
}

.fa-instagram:hover {
  background: #e1306c;
  color: white;
}

/* Detail Button */
#details{
  justify-content: center;
  width: 100px;
  margin: auto;
  margin-bottom: 20px;
  margin-top: 10px;
}
.button{
  outline: none;
  border: none;
  background: none;
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px;
  background-image: linear-gradient(to right, #11998e, #38ef7d);
  border-radius: 8px;
  color: white;
  font-size: 18px;
  font-weight: 700;
  box-shadow: 3px 3px rgba(0, 0, 0, 0.4);
  transition: 0.4s ease-out;
}
  .button:hover {
    box-shadow: 6px 6px rgba(0, 0, 0, 0.6);
  }

  .modal {
 position: fixed;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 z-index: 99;
 width: 100%;
 max-width: 400px;
 background-color: #FFF;
 border-radius: 16px;
 padding: 25px;
}
.modal-overlay{
   position: absolute;
   top: 0;
   bottom: 0;
   right: 0;
   left: 0;
   z-index: 99;
   background-color: rgba(0, 0, 0, 0.3);

}

 h1 {
  color: #222;
  font-size: 32px;
  font-weight: 900;
  margin-bottom: 15px;
 }
 
 p {
  color: #666;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 15px;
 }


.fade-enter-active,
.fade-leave-active{
    transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to{
    opacity: 0;
}
.slide-enter-active,
.slide-leave-active {
 transition: transform .5s;
}

.slide-enter,
.slide-leave-to {
 transform: translateY(-50%) translateX(100vw);
}

 @media screen and (max-width: 1500px) {
  #container4{
    margin-right: 0;
  }
 
} 
@media screen and (max-width: 600px){
  .box{
    margin-left: 0;
  }
  .initiators-head{
    font-size: 30px;
  }
  .logo{
    width: 70px;
    height: 70px;
  }
  #container1{
    margin-top: 30px;
  }
}
</style>
