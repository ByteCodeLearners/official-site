<template>
  <div class="bcl-slider-container">
      
          <div class="bcl-group-slider  slide">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard/>
          </div >
          <div class="bcl-group-slider-content"></div>
      </div>
  </div>
</template>

<script>
import MembersDetailsCard from "@/components/ByteCodeMemberDetailsCard"
export default {
    data:()=>({
        sliderContent:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
        show:true

    }),
    components:{
        MembersDetailsCard,
    },
    mounted()
    {
        var animation="translateX:-100px";
        var childrenCount=$(".bcl-group-slider")[0].childElementCount;
        var slideElemntWidth=$(".bcl-group-slider-content").outerWidth();
        var toSlide=window.outerWidth-$(".bcl-group-slider").width();
        window.addEventListener("resize",()=>
        {
            slideElemntWidth=$(".bcl-group-slider-content").outerWidth();
            toSlide=window.outerWidth-$(".bcl-group-slider").width();
        })
        function animate(to)
        {
            $(".bcl-group-slider").animate({
                marginLeft:to
            },{
                duration:childrenCount*1200,
                easing:"linear"
            })
            .animate({
                marginLeft:0
            },"fast",()=>{
                animate(to)
            })
        }
        animate(toSlide);
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
</style>