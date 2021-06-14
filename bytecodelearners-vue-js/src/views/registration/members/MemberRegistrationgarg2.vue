
<template>
  <div class="mainContainer">
      <div class="bytecodeLogo"><img :src="`/bytecode.png`|staticFile" alt=""></div>
      <div class="container">
          <h1 class="heading">~: Registration :~</h1>
            <FormContainer @submit="addNewMember" :formData="forms" >
               <div class="main">
                  <div  class="row">
                        <span class="material-icons">person</span>
                          <div class="inputname">
                          <input
                            type="text"
                            required
                            placeholder="First Name"
                            class="f_name" 
                            v-model="forms.first_name"
                          />
                         <input type="text" 
                            placeholder="Last Name" 
                            class="l_name" 
                            v-model="forms.last_name" 
                         />
                         </div>
                    
                  </div>

            
              <div class="row">
                <span class="material-icons">call</span>
                <input
                  type="tel"
                  placeholder="Mobile No."
                  value="+91"
                  maxlength="13"
                  class="for_mobile"
                  v-model="forms.mobile_number"
                />
              </div>
              <div class="row">
                <span class="material-icons">photo_camera</span>
                <input
                  type="file"
                  required
                  placeholder="Image"
                  class="for_image"  
                  @click:clear.prevent="fileFieldCleared" 
                  @change="filePicked($event)" 
                  accept="image/*"
                />
              </div>
           
            <div class="row">
              <span class="material-icons">event_note</span>
              <input
                type="date"
                required
                placeholder="select date of joining college "
                class="for_"
                v-model="forms.selected_date"
              />
            </div>

            <div class="row">
              <span class="material-icons">school</span>
              <input type="number" placeholder="Batch" class="for_" v-model="getBatchYear" />
            </div>

            <div class="row">
              <span class="material-icons">person_pin_circle</span>
              <input
                type="text"
                required
                placeholder="Address"
                class="for_"
              />
            </div>

            <div class="row">
              <span class="material-icons">mail_outline</span>
              <input type="email" required placeholder="Email" class="for_" 
              v-model="forms.email"/>
            </div>

            <div class="row">
              <span class="material-icons">security</span>
              <input
                type="password"
                required
                placeholder="Password"
                class="for_"
                id="first_ps"
                v-model="forms.password" 
              />
              <span class="material-icons" @click="show()" id="open"
                >visibility_off</span
              >
            </div>

            <div class="row">
              <span class="material-icons">security</span>
              <input
                type="password"
                required
                placeholder="Confirm Password"
                class="for_"
                id="second_ps"
                v-model="forms.rePassword"
              />

              <span class="material-icons" @click="show1()" id="open1"
                >visibility_off</span
              >
            </div>
            <!-- <div class="for_button">
              <button class="submit" type="submit">Submit</button>
          </div> -->
          </div>
        </FormContainer>
        
      </div>
      <p>{{result}}</p> 
      
<!-- for animation -->
      <div class="one" id="logo"></div>
      <div class="one" id="logo1"></div>
      <div class="two" id="logo2"></div>
      <div class="two" id="logo3"></div>
    </div>
</template>

<script>
import API from "../../../config/api.js"
import FormContainer from "../../../components/UI/ByteCodeFormContainer"
export default {
    data(){
        return{
            result:'',
            showPassword:false,
            url:"",
            
            forms:{
                "first_name":'',
                "middle_name":'',
                "last_name":'',
                "email":'',
                "password":'',
                "image":'',
                "batch":'',
                "selected_date":'',
                

            },
        }
    },
    components:{
        FormContainer,
    },
    computed:{
        getBatchYear:
        {   
            get(){
                var year=this.forms.selected_date.split("-")[0];
                this.forms.batch=year;
                return year;
            },
            set(e){
                
                var date=this.forms.selected_date.split("-");
                this.forms.selected_date=e+"-"+date[1]+"-"+date[2]
            }
        }
    },
    methods:{
        addNewMember(e){
            if(this.rePassword!=this.password)
            {
                return;
            }
            API.addNewMember(e)
            .then(data=>{
                for(var key in this.forms){
                    this.forms[key]='';
                }
                this.result = "Welcome To ByteCodeLearners Community , you has been registered Successfully"
                URL.revokeObjectURL(this.url);
                this.url=''

            })
            .catch(err=>{
                this.result = "Registration Failed . Please Re-submit or try again later ."
            })
        },
        fileFieldCleared(e){
            URL.revokeObjectURL(this.url);
            this.url=''
        },
        filePicked(e)
        {
            if(!e)
            {
                return;
            }
            this.forms.image=e;
            this.url=URL.createObjectURL(e);
        },
        show() {
          var x = document.getElementById("first_ps");
          if (x.type === "password") {
            x.type = "text";
            document.getElementById("open").innerHTML = "visibility";
          } else {
            x.type = "password";
            document.getElementById("open").innerHTML = "visibility_off";
          }
        },
        show1() {
          var x = document.getElementById("second_ps");
          if (x.type === "password") {
            x.type = "text";
            document.getElementById("open1").innerHTML = "visibility";
          } else {
            x.type = "password";
            document.getElementById("open1").innerHTML = "visibility_off";
          }
        },
        hide(){
        var a= document.getElementById("logo2").style.display = "none";
        setInterval(hide(),2000);
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

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.mainContainer{
    font-family: 'Playfair Display', serif;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
    place-items: center ;
   
    background-image: url( "https://www.bytecodelearners.club/statics/9.jpg") ;
    background-size: 100% 115% ;
    z-index: index -10; 
}
.bytecodeLogo{
    height:10vh ;
    width: 10vh;
    animation: logo_animation 5s infinite;
    margin-bottom: 10px;
    margin-top:4vh;
    position:absolute;
    top:1.5vh;
    
    
}

@keyframes logo_animation{
    from{
        transform: rotateZ(0deg);
    }
    to{
        transform: rotateZ(360deg);
    }
}

.container{
    width: 44vw;
    height:50vh;
    /* background-image: url( "https://www.bytecodelearners.club/statics/mob_back.jpg") ; */
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left:-5.8vh;
    margin-top:-17.5vh;
    background-size:100% 100%;
    
   
}
.heading{
    color:#fff;
    font-weight: 800;
    font-size: 1.8rem;
    margin-bottom:1vh;
    margin-top:-0vh;
    text-align: center;
}
.main{
    width: 100%;
    height: 100%;
    padding-bottom: 0;
    margin-left: 3.5vw;
}
.row{
    width: 90%;
    display: flex;
    height:3.25vh;
   
    /* flex-direction: column; */
    margin-top: 1vh;
    /* border: 1px solid red; */
   
}
.inputname{
    width: 80%;
    display: flex;
    justify-content: space-between;
    /* border: 1px solid black; */
}
.f_name{
    width: 40%;
}
.l_name{
    width: 37%;
    margin-left: 20px;
}
.for_image{
height:3.2vh;
font-size:1rem;
}
input{
    padding-left: 5px;
    color: rgb(224, 19, 146);
    background-color: white;
    font-size: 1.2rem;
    box-shadow: 2px 2px 4px rgb(110, 110, 116);
    border-radius: 8px;
    width: 80%;
    height:3.25vh;
    font-family: 'Playfair Display', serif;
    
}
::placeholder{
    color:rgb(224, 19, 146);
    
    font-family: 'Playfair Display', serif;
}

.for_button{
    text-align: center;
} 
.submit{
    width: 10vw;
    height: 4.5vh;
    box-shadow: 2px 2px 2px rgb(100, 100, 100);
    border: transparent;
    font-size: 1rem;
    color: white;
    background: rgb(224, 19, 146);
    text-shadow: 1px 1px 1px black;
    border-radius: 13px;
    font-weight: 600;
} 
.submit:hover{
    background-color: blue;
}
.material-icons{
    color:white;
    text-shadow: 1px 1px 1px black;
    margin: 0.5vw 0.5vw;
    font-size: 1.5rem;
    line-height: 1.2rem;
    }
.material-icons:hover{
    color: rgb(161, 68, 248);
    text-shadow: 1px 1px 1px rgb(15, 15, 19);
}

@media only screen and (min-width: 1200px){

.container{
    margin-left:-6.8vh;
}

.for_image{

padding-bottom:24px;
}
}
@media only screen and (max-width: 1199.9px)and (min-width: 810px){

.container{
    margin-left:-3.3vw;
     width: 44.5vw;
}

.for_image{

padding-bottom:24px;
}
}

@media only screen and (max-width: 809.9px)and (min-width: 600px){

  ::placeholder{
    color: lightseagreen;
  }
.mainContainer{
   background-image: url( "https://www.bytecodelearners.club/statics/mob_back1.jpg") ;
}

.one,.two{
      display: none;
  }
.container{
    width: 65vw;
    height:65vh;
    /* background-image: url( "https://www.bytecodelearners.club/statics/mob_back.jpg") ; */
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    
    margin-top:5vh;
    background-size:100% 100%;
    
   
}
.heading{
    color:#fff;
    font-weight: 800;
    font-size: 1.8rem;
    margin-bottom:3vh;
    margin-top:-0vh;
    text-align: center;
}
.main{
    width: 100%;
    height: 100%;
    
    margin-left: 4.5vw;
}
.row{
    width: 90%;
    display: flex;
    height:4.25vh;
   
    /* flex-direction: column; */
    margin-top: 1vh;
    /* border: 1px solid red; */
   
}

.for_image{
height:4vh;
padding-bottom:24px;
}

input{
    padding-left: 5px;
    color: lightseagreen;
    background-color: white;
    font-size: 1.2rem;
    box-shadow: 2px 2px 4px rgb(110, 110, 116);
    border-radius: 8px;
    width: 80%;
    height:4.15vh;
    
}
}

@media only screen and (max-width: 599.9px)and (min-width: 423px){
  ::placeholder{
    color: lightseagreen;
  }
.mainContainer{
   background-image: url( "https://www.bytecodelearners.club/statics/mob_back1.jpg") ;
}
.one,.two{
      display: none;
  }
.container{
    width: 75vw;
    height:75vh;
    
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-left:2vw;
    margin-top:5vh;
    background-size:100% 100%;
    
   
}
.for_image{
height:4vh;
padding-bottom:24px;
}
.heading{
    color:#fff;
    font-weight: 800;
    font-size: 1.8rem;
    margin-bottom:3vh;
    margin-top:-0vh;
    text-align: center;
}
.main{
    width: 100%;
    height: 100%;
    
    margin-left: 4.5vw;
}
.row{
    width: 90%;
    display: flex;
    height:4.25vh;
   
    /* flex-direction: column; */
    margin-top: 1vh;
    /* border: 1px solid red; */
   
}

input{
    padding-left: 5px;
    color: lightseagreen;
    background-color: white;
    font-size: 1.2rem;
    box-shadow: 2px 2px 4px rgb(110, 110, 116);
    border-radius: 8px;
    width: 80%;
    height:4.15vh;
    
}
}

@media only screen and (max-width: 400px) {
  /* For mobile phones: */
  
  
  .heading{
      font-size: 1.9rem;
  }
  input{
      font-size: 1rem;
  }
}
@media only screen and (max-width: 423px){
    .mainContainer{
      background-image: url("https://www.bytecodelearners.club/statics/mob_back1.jpg");
  }
  .one,.two{
      display: none;
  }
  .heading{
  color:#fff;
  }
  .bytecodeLogo{
  margin-top:7vh;
  }
    .container{
        width: 87vw;
        padding-left: 0px;
        padding-right: 0px;
        background: none;
        margin-left:1vw;
        margin-top:14vh;
        height:78vh;
    }
    input{
        color: lightseagreen;
        height:4.2vh;
        margin-top:1vh;
    }
    ::placeholder{
        color: lightseagreen;
    }

    .row{
        width: 100%;
        height:4vh;
        
    }
    .inputname{
        flex-direction: row;
    }
    .f_name{
        width: 100%;
    }
    .l_name{
        width: 100%;
        margin-left: 0;
        margin-top: 5px;
    }
    .for_image{
    height:3vh;
    padding-bottom:24px;
    }
    .mainContainer{
    height:90vh;
    }
    .material-icons{
    margin-top:1.8vh ;
    }
}
 

/* background animation */

#logo{ 
    background-image: url("https://www.bytecodelearners.club/statics/26.png");
    width: 8vw;
    height: 17vh;
    position: absolute;
    top: -25vh;
    animation-name: logo;
    animation-timing-function: unset;
}
#logo1{ 
    background-image: url("https://www.bytecodelearners.club/statics/27.png");
    width: 10vw;
    height: 25vh;
    position: absolute;
    top: 5vh;
    left: -20vw;
    animation-name:logo1 ;
    animation-timing-function:linear;
    
}
img{
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
}
#logo2{ 
    background-image: url("https://www.bytecodelearners.club/statics/28.png");
    width: 10vw;
    height: 22vh;
    position: absolute;
    top: -15vh;
    left: 90vw;
    animation-name:logo3 ;
    overflow: hidden;
    
}

#logo3{ 
    background-image: url("https://www.bytecodelearners.club/statics/23.png");
    width: 6vw;
    height: 10vh;
    position: absolute;
    top: -15vh;
    left: 90vw;
    animation-name:logo2 ;
    overflow: hidden;
    
}
.one{
  background-size: 100% 100%; 
  z-index: index -5;
  animation-duration: 15s;
  
  animation-delay: 1s;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

.two{
    background-size: 100% 100%; 
    z-index: index -5;
    animation-duration: 15s;
    
    animation-delay: 1s;
    animation-iteration-count:infinite;
    animation-direction: alternate;
  }
  
@keyframes logo {
    0%   { transform:rotate(0deg) ;left:2vw; top:2vh;}
    10%  { transform:rotate(60deg) ;left:10vw; top:10vh;}
    20%  { transform:rotate(120deg) ;left:8vw; top:15vh;}
    30%  { transform:rotate(180deg) ;left:11vw; top:20vh;}
    40%  { transform:rotate(240deg) ;left:9vw; top:30vh;}
    50%  { transform:rotate(300deg) ;left:11vw; top:35vh;}
    60%  { transform:rotate(420deg) ;left:8vw; top:40vh;}
    70%  { transform:rotate(480deg) ;left:7vw; top:45vh;}
    80%  { transform:rotate(540deg) ;left:9vw; top:50vh;}
    90%  { transform:rotate(600deg) ;left:7vw; top:55vh;}
    100% { transform:rotate(660deg) ;left:8vw; top:60vh;}
    
  }

  
@keyframes logo1 {
   
  100%   { transform:rotate(0deg) ;left:75vw; top:5vh;}
  90%  { transform:rotate(60deg) ;left:78vw; top:10vh;}
  80%  { transform:rotate(120deg) ;left:74vw; top:20vh;}
  70%  { transform:rotate(180deg) ;left:76vw; top:25vh;}
  60%  { transform:rotate(240deg) ;left:75vw; top:30vh;}
  50%  { transform:rotate(300deg) ;left:78vw; top:35vh;}
  40%  { transform:rotate(420deg) ;left:77vw; top:40vh;}
  30%  { transform:rotate(480deg) ;left:75vw; top:45vh;}
  20%  { transform:rotate(540deg) ;left:78vw; top:50vh;}
  10%  { transform:rotate(600deg) ;left:74vw; top:60vh;}
  0%   { transform:rotate(660deg) ;left:76vw; top:70vh;}
    
  }

  
@keyframes logo3 {
    0%   { transform:rotate(0deg) ;left:90vw; top:5vh;}
    10%  { transform:rotate(60deg) ;left:85vw; top:10vh;}
    20%  { transform:rotate(120deg) ;left:83vw; top:20vh;}
    30%  { transform:rotate(180deg) ;left:86vw; top:25vh;}
    40%  { transform:rotate(240deg) ;left:83vw; top:30vh;}
    50%  { transform:rotate(300deg) ;left:86vw; top:35vh;}
    60%  { transform:rotate(420deg) ;left:88vw; top:40vh;}
    70%  { transform:rotate(480deg) ;left:85vw; top:45vh;}
    80%  { transform:rotate(540deg) ;left:87vw; top:50vh;}
    90%  { transform:rotate(600deg) ;left:88vw; top:55vh;}
    100% { transform:rotate(660deg) ;left:85vw; top:60vh;}
  }
  
@keyframes logo2 {
    100%   { transform:rotate(0deg) ;left:2vw; top:2vh;}
    90%  { transform:rotate(60deg) ;left:18vw; top:10vh;}
    80%  { transform:rotate(120deg) ;left:15vw; top:20vh;}
    70%  { transform:rotate(180deg) ;left:18vw; top:25vh;}
    60%  { transform:rotate(240deg) ;left:17vw; top:35vh;}
    50%  { transform:rotate(300deg) ;left:16vw; top:40vh;}
    40%  { transform:rotate(420deg) ;left:15vw; top:45vh;}
    30%  { transform:rotate(480deg) ;left:17vw; top:50vh;}
    20%  { transform:rotate(540deg) ;left:18vw; top:55vh;}
    10%  { transform:rotate(600deg) ;left:18vw; top:60vh;}
    0% { transform:rotate(660deg) ;left:16vw; top:70vh;}
    
  }
  </style>
    
