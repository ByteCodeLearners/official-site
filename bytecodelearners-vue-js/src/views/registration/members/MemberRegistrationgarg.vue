<template>
  <div class="form">
      <div class="bytecodeLogo"><img src="../../../assets/bytecode.png" alt=""></div>
      <div class="container">
        <fieldset>
          <legend>~: Registration :~</legend>
            <FormContainer @submit="addNewMember" :formData="forms" >
               <div class="main">
                  <div id="side" class="name">
                    <div class="box" id="space1">
                        <span class="material-icons">person</span>
                          <input
                            type="text"
                            required
                            placeholder="First Name"
                            class="f_name" 
                            v-model="forms.first_name"
                          />
                    </div>
                    <div class="box">
                       <!-- <span id="space"></span> -->
                         <input type="text" 
                            placeholder="Last Name" 
                            class="l_name" 
                            v-model="forms.last_name" 
                         />
                    </div>
                  </div>

            <div id="side" class="name">
              <div class="box" id="camera">
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
              <div class="box" id="camera">
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
            </div>
            <div class="box">
              <span class="material-icons">event_note</span>
              <input
                type="date"
                required
                placeholder="select date of joining college "
                class="for_"
                v-model="forms.selected_date"
              />
            </div>

            <div class="box">
              <span class="material-icons">school</span>
              <input type="number" placeholder="Batch" class="for_" v-model="getBatchYear" />
            </div>

            <div class="box">
              <span class="material-icons">person_pin_circle</span>
              <input
                type="text"
                required
                placeholder="Address"
                class="for_"
              />
            </div>

            <div class="box">
              <span class="material-icons">mail_outline</span>
              <input type="email" required placeholder="Email" class="for_" 
              v-model="forms.email"/>
            </div>

            <div class="box">
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

            <div class="box">
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
          </div>
          <!-- <div class="for_button">
          <button class="submit">Submit</button>
        </div> -->
        </FormContainer>
        <p>{{result}}</p>

        </fieldset>

        
        
      </div>
      
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

}
</script>

<style scoped>
::placeholder{
    color:rgb(224, 19, 146);
    text-shadow: 0.5px 0.5px 1px rgb(80, 79, 79);
    font-family: 'Playfair Display', serif;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.form{
    font-family: 'Playfair Display', serif;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
    place-items:center ;
    border: 2px solid black;
    background-image: url( "../../../assets/9.jpg") ;
    background-size: 100% 100%;
    z-index: index -10; 
    background-color: rgb(88, 88, 86);    
}
.bytecodeLogo{
    height: 7rem;
    width: 8rem;
    animation: logo_animation 5s infinite;
    margin-bottom: 10px;
    margin-top: 0;
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
    padding: 1vh;
    width: 45vw;
    height: 65vh;
    /* background: linear-gradient(to bottom right, #9966ff -17%, #ff66cc 124%); */
    background: linear-gradient(to bottom right, rgba(153, 102, 255,0.4) -17%, rgba(255,102,204,0.9) 124%);
    opacity: 1;
    border-radius: 20px;
    
}

fieldset{
    width: 94%;
    height: 85%;
    border-color: white;
    border: none;
    text-align: center;
    opacity: 1;
}
legend{
    color: white;
    font-weight: 800;
    font-size: 1.9rem;
    margin-bottom:3vh;
}
.main{
    display:grid;
    width: 100%;
    height: 100%;
    align-items: center;
    margin-left: 4.5vw;
}
.box{
    width: auto;
    height:4vh;
    display: inline-flex;
    
}

#side{
    width: 70%;
    display: flex;
    justify-content: space-between;
    
}
input{
    padding-left: 5px;
    color: rgb(224, 19, 146);
    background-color: white;
    height: 1.5rem;
    line-height: 1.5rem;
    font-size: 1.2rem;
    box-shadow: 2px 2px 4px rgb(110, 110, 116);
    border:transparent;
    border-radius: 8px;
    margin-bottom:  20px ;
}
.f_name{
    width: 50%;
    margin-right: auto;
}
.l_name{
    width: 40%;
}
.for_mobile{
    width: 35%;
    margin-right: auto;
}
.for_image{
   width: 40%;
   /* color: rgb(245, 235, 238); */
   /* margin:  auto 0; */

}
#space{
    margin-left: 4vw;
}
.for_{
    width: 70%;
}
/* .for_button{
    display: grid;
    place-items: center;
    margin:2vh 0;
} */
/* .submit{
    width: 10vw;
    height: 4.5vh;
    box-shadow: 2px 2px 2px rgb(100, 100, 100);
    border: transparent;
    font-size: 1rem;
    color: white;
    background: rgb(224, 19, 146);
    text-shadow: 1px 1px 1px black;
    margin:auto 0;
    border-radius: 13px;
    font-weight: 600;
} */
/* .submit:hover{
    background-color: blue;
} */
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
#break{
    display: none;
}
 
  @media screen and (max-width:387.9px) and (min-width:200px){
    .name{
        display: flex;
        flex-direction: column;
    }
    input{
        line-height: 1rem;
        font-size: 1rem;
        margin: 5px;
    }
    .f_name,.l_name{
        /* margin-top: 1vh; */
        width: 70%;
    }
    .l_name{
        margin-top: 1.8vh;
        height: 3vh;
    }
    legend{
        font-size: 1.2rem;
    }
    
    #space{
        margin-left: 8vw;
    }
    .for_mobile,.for_image{
        width: 70%;
    }
    .one,.two{
        display: none;
    }
    .form{
        background: none;
    }
    .container{
        width: 80vw;
        height: 70vh;
        
    }
    .box{
        /* margin-top: -.5vh; */
        height: 3vh;
    }
    .submit{
        width: 20vw;
        margin-top: 2vh;
    }
    .main{
        margin-left: 5vw;
    }
    ::placeholder{
        font-size: 0.8rem;
    }
    .for_mobile{
        margin-bottom: 1vh;
        height: 3vh;
    }
    /* #camera{
        margin-top: 2vh;
    } */
    
}
  @media screen and (max-width:632px) and (min-width:388px){
      .name{
          display: flex;
          flex-direction: column;
      }
      input{
          line-height: 1rem;
          font-size: 1rem;
          margin: 5px;
      }
      .f_name,.l_name{
          width: 70%;
      }
      
      #space{
          margin-left: 6.5vw;
      }
      .for_mobile,.for_image{
          width: 70%;
      }
      .one,.two{
          display: none;
      }
      .form{
        background: none;
      }
      .container{
          width: 70vw;
          height: 70vh;
          
      }
      .box{
          margin-top: 1vh;
      }
      .submit{
          width: 20vw;
          margin-top: 2vh;
      }
      .main{
          margin-left: 5vw;
      }
      
  }


  @media screen and (max-width:729.9px)and (min-width:630px){
 
    .container{
        width: 49vw;
        height: 65vh;
        
    }
    fieldset{
        width: 90%;
        height: 85%;
    }
    legend{
        font-size: 1.1rem;
    }
    .box{
        width: auto;
        height:3vh;
        font-size: 0.8rem;
    }
    input{
        line-height: 1rem;
        font-size: 1rem;
        margin: 5px;
    }
    .f_name{
        width: 12.9vw;
    }
    .l_name{
        width: 12.9vw;
    }
    .for_mobile{
        width: 12vw;
        margin-right: 1vw;
    }
    .for_image{
        width: 12.4vw;
    }
    .for_{
        width: 70%;
        font-size: 0.8rem;
    }
    .submit{
        width: 15vw;
        height: 4vh;
      
    }

  }


  @media screen and (max-width:999.9px)and (min-width:730px){
 
    .container{
        width: 45vw;
        height: 65vh;
        box-shadow: 3px 3px 5px rgb(128, 129, 129);
    }
    fieldset{
        width: 92%;
        height: 85%;
    }
    .box{
        width: auto;
        height:4vh;
        font-size: 0.8rem;
    }
    input{
        line-height: 1rem;
        font-size: 1rem;
        margin: 5px;
    } 
    .f_name{
        width: 12vw;
    }
    .l_name{
        width: 12.1vw;
    }
    .for_mobile{
        width: 12vw;
        margin-right: 1vw;
    }
    .for_image{
        width: 11.4vw;
    }
    .for_{
        width: 70%;
        font-size: 0.8rem;
    }

  }


  @media screen and (max-width:1199.9px)and (min-width:1000px){
    input{
        line-height: 1rem;
        font-size: 1rem;
        margin: 5px;
    }
    .f_name{
        width: 12.5vw;
    }
    .l_name{
        width: 12.1vw;
    }
    .for_mobile{
        width: 12.5vw;
        margin-right: 1vw;
    }
    .for_image{
        width: 12vw;
    }
  }

  
  @media screen and (min-width:1200px){
    input{
        line-height: 1rem;
        font-size: 1rem;
        margin: 5px;
    }

    
    .f_name{
        width: 12.5vw;
    }
    .l_name{
        width: 12.5vw;
    }
    .for_mobile{
        width: 12.5vw;
        margin-right: 2vw;
    }
    .for_image{
        width: 12vw;
    }
  
}

/* background animation */

#logo{ 
    background-image: url("../../../assets/26.png");
    width: 8vw;
    height: 17vh;
    position: absolute;
    top: -25vh;
    animation-name: logo;
    animation-timing-function: unset;
}
#logo1{ 
    background-image: url("../../../assets/27.png");
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
    background-image: url("../../../assets/28.png");
    width: 10vw;
    height: 22vh;
    position: absolute;
    top: -15vh;
    left: 90vw;
    animation-name:logo3 ;
    overflow: hidden;
    
}

#logo3{ 
    background-image: url("../../../assets/23.png");
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