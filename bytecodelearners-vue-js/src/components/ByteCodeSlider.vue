<template>
  <div class="bcl-slider">
      <div class="bcl-slider-title">
          <slot></slot>
      </div>
      <div class="bcl-slider-container" @mouseenter="slideContainerMouseEnter" @mouseleave="slideContainerMouseLeave">
          <div class="bcl-group-slider  slide">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard :details="i"/>
          </div>
      </div>
  </div>
  </div>
</template>

<script>
import API from "@/config/api"
import MembersDetailsCard from "@/components/ByteCodeMemberDetailsCard"
export default {
    data:()=>({
        sliderContent:[],
        show:true,
        timer:0,
        hovered:false,
        fps:10,
    }),
    components:{
        MembersDetailsCard,
    },
    props:{
        sliderTitle:String
    },
    computed:{
        getFPS(){
            return this.fps;
        }
    },
    mounted()
    {
        API.getAllMembers()
        .then(data=>{
            this.sliderContent=data.data;
        })
        .catch(err=>{
            
        })
        let x=3;
        
        setInterval(()=>{
            if($(".slide")[0].clientWidth>window.outerWidth)
            {
                this.timer=0;
                if(!this.hovered)
                {
                    this.timer=this.getFPS;
                }
            }
            x-=this.timer;
            if(Math.abs(x)>=$(".slide")[0].scrollWidth)
            {
                x=3;
                this.backwardAnimation();
            }
            this.forwardAnimation(x);
        },100);

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