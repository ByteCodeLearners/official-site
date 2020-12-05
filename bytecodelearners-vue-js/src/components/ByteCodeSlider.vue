<template>
  <div class="bcl-slider">
      <div class="bcl-slider-title">
          <slot></slot>
      </div>
      <div class="bcl-slider-container" @mouseenter="timer=0" @mouseleave="timer=6">
          <div class="bcl-group-slider  slide">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard :details="i" />
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
        timer:6,

    }),
    components:{
        MembersDetailsCard,
    },
    props:{
        sliderTitle:String
    }
    ,
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
            x-=this.timer;
            if(Math.abs(x)>=window.innerWidth)
            {
                x=3;
                this.backwardAnimation();
            }
            this.forwardAnimation(x);
        },9);

    },
    methods:{
        forwardAnimation(x){
            $(".bcl-group-slider").animate({
                marginLeft:x
            },10);

        },
        backwardAnimation(){
            $(".bcl-group-slider").animate({
                marginLeft:0
            },1000);
        }
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