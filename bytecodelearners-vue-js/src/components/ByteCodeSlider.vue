<template>
  <div class="bcl-slider-container">
      
          <div class="bcl-group-slider  slide">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
            <MembersDetailsCard/>
          </div>
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
    }
}
</script>
<style scoped>
.bcl-slider-container
{
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
.slide{
    animation: slide 80s ease infinite;
}

.slide:hover{
    animation-play-state: paused;
}
.align-content-center{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
}
.bcl-group-slider-content{
    margin:10px;
}
@keyframes slide {
    to{
        transform: translateX(-100%);
    }
    
}
</style>