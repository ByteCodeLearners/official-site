<template>
  <div class="bcl-slider-container">
      <div class="bcl-slider-prev-btn bcl-slider-btn align-content-center">
            <button class="material-icons">
                navigate_before
            </button>
          </div>
      <div class="bcl-group-slider">
          <!-- CONTENT for sliding-->
          <div class="bcl-group-slider-content" v-for="(i ,key) in sliderContent" :key="key">
              <div>{{i}}</div>
          </div>
      </div>
      <div class="bcl-slider-next-btn bcl-slider-btn align-content-center">
            <button class="material-icons">
                navigate_next
            </button>
      </div>
  </div>
</template>

<script>
export default {
    data:()=>({
        sliderContent:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],

    }),
    methods:{

      slideContent()
      {
      }  
    },
    mounted()
    {
    }
}
</script>
<style scoped>
.bcl-slider-container
{
    width: 100%;
    height: 350px;
    display: flex;
    flex-direction: row;
}
.bcl-slider-container:hover .bcl-slider-btn
{
    display: flex;
}



.bcl-group-slider{
    border: 2px solid red;
    height: 100%;
    display: flex;
    flex-direction: row;
    transition: translate -100% 10s;
    animation: slide 20s ease infinite;
    position: relative;
}


.bcl-group-slider:hover{
    animation-play-state: paused;
}

.bcl-group-slider-content{
    border: 2px solid green;
    width: 200px;
    height: 100%;
}
.bcl-slider-prev-btn
{
    position: absolute;
    left: 0;
    z-index: 1;
}
.align-content-center{

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;

}

.bcl-slider-next-btn
{
    position: absolute;
    right: 0;

}
.bcl-slider-btn{
    
    background: rgba(0, 0, 0, 0.2);
    box-shadow: 10px 10px 100px grey, -10px 10px 35px grey;
    width: 70px;
    height: 350px;
    cursor: pointer;
    /* display: none; */
    /* margin: 0.3%; */

}
@keyframes slide {
    to{
        transform: translateX(-60%);
    }
    
}
</style>