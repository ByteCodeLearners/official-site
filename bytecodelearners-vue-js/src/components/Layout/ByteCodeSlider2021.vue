<template>
  <div class="bcl-slider">
      <div class="bcl-slider-title">
          <slot></slot>
      </div>
      <div class="bcl-slider-container" @mouseenter="slideContainerMouseEnter" @mouseleave="slideContainerMouseLeave">
          <div class="bcl-group-slider  slide">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard2021 :details="i"/>
          </div>
      </div>
  </div>
  </div>
</template>

<script>
import API from "../../config/api"
import MembersDetailsCard2021 from "../UI/ByteCodeMemberDetailsCard2021"
export default {
    data:()=>({
        sliderContent:[],
        show:true,
        timer:0,
        hovered:false,
        fps:10,
        animate:true,
        currentPos:0,
        repeatTimer:'',
    }),
    components:{
        MembersDetailsCard2021,
    },
    props:{
        sliderTitle:String
    },
    computed:{
        getFPS(){
            return this.fps;
        },
        getCurrentPos()
        {
            return this.currentPos;
        }
    },
    mounted()
    {
        API.getAllUsers()
        .then(data=>{
            this.sliderContent=data.data;
        })
        .catch(err=>{
            
        })
        this.currentPos=3;
        
       $(".bcl-slider-container").ready(()=>{
            this.repeatTimer=setInterval(()=>{
            if($(".slide")[0].clientWidth>window.outerWidth)
            {
                this.timer=0;
                if(!this.hovered)
                {
                    this.timer=this.getFPS;
                }
            }
            this.currentPos-=this.timer;
            if(Math.abs(this.getCurrentPos)>=$(".slide")[0].scrollWidth)
            {
                this.currentPos=3;
                this.backwardAnimation();
                return;
            }
            this.forwardAnimation(this.getCurrentPos);
        },100);
       })

    },
    destroyed(){
        clearInterval(this.repeatTimer)

    },
    methods:{
        forwardAnimation(x){
            $(".bcl-group-slider").animate({
                marginLeft:x
            },50);

        },
        backwardAnimation(){
            $(".bcl-group-slider").animate({
                marginLeft:0
            },1000);
        }, 
        slideContainerMouseEnter()
        {
            this.hovered=true
            this.timer=0;
        },
        slideContainerMouseLeave()
        {
            this.hovered=false
            this.timer=this.getFPS
        },
    }
}
</script>
<style scoped>
.bcl-slider-container
{
    overflow: hidden;
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: row;
    cursor: pointer;
}
.bcl-group-slider{
    height: 100%;
    display: flex;
    flex-direction: row;
    position: relative;
}

.align-content-center{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
}
.bcl-group-slider-content{
    margin:10px;
    min-width: 150px;
}
.bcl-slider-title{
  font-size: 4em;
  font-weight: 700;
  display: flex;
  justify-content: center;
  align-content: center;
}
@media only screen and (max-width:500px)
{
  .bcl-slider-title{
    font-size: 2em !important;
  }


}

</style>