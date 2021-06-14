<template>
 <v-card>
      <div class="bcl-members-details-container">
        <!-- <div class="bcl-members-image" :title="getFullName">
                  <img :src="details.user_details.image |prependImageUrl" :alt="getFullName">
              </div>
              <div class="bcl-members-details">
                  <p>{{getFullName}}</p>
              </div>
              <div class="bcl-members-social-icon">
                  
                
                <div class="bcl-social-links">
                    <a class="instagram" v-if="details.user_details.social_media_links.instagram" :href="details.user_details.social_media_links.instagram" target="_blank"><v-icon class="bcl-social-media-icons"  dark>mdi-instagram</v-icon></a>
                    <a class="twitter" v-if="details.user_details.social_media_links.twitter" :href="details.user_details.social_media_links.twitter"  target="_blank"><v-icon class="bcl-social-media-icons" href="" dark>mdi-twitter</v-icon></a>
                    <a class="facebook" v-if="details.user_details.social_media_links.facebook" :href="details.user_details.social_media_links.facebook" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-facebook</v-icon></a>
                    <a class="github" v-if="details.user_details.social_media_links.github" :href="details.user_details.social_media_links.github" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-github</v-icon></a>            
                    <a class="youtube" v-if="details.user_details.social_media_links.youtube" :href="details.user_details.social_media_links.youtube" target="_blank"><v-icon class="bcl-social-media-icons" href="" dark>mdi-youtube</v-icon></a>
                    <a class="linkedin" v-if="details.user_details.social_media_links.linkedin" :href="details.user_details.social_media_links.linkedin" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-linkedin</v-icon></a>
                </div>
                
              </div>
  </div> -->
  <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front" :title="getFullName">
           <img :src="details.user_details.image |prependImageUrl" :alt="getFullName">
          </div>
          <div class="flip-card-back">
           <p>{{getFullName}}</p>
            <p>Junior</p>
            <p>2021</p>
          </div>
        </div>
   </div>
  <div id="name">{{getFullName}}</div>
  </div>
 </v-card>
 
</template>

<script>
export default {
    name:"ByteCodeMemberDetailsCard2021",
    data:()=>({
            
        }),
        props:{
            details:{
                type:Object,
                default:()=>({
                    first_name:"first_name",
                    middle_name:"middle_name",
                    last_name:"last_name",
                    image:"image",
                })
            },
        },
        computed:{
          getFullName(){
            if(this.details.middle_name)
            {
            return (this.details.user_details.first_name.trim()+" "+this.details.user_details.middle_name.trim()+" "+this.details.user_details.last_name.trim()).toUpperCase()
            }
            return (this.details.user_details.first_name.trim()+" "+this.details.user_details.last_name.trim()).toUpperCase();

          }

        },
        filters:{
            prependImageUrl(e)
            {
                return process.env.VUE_APP_IMAGE_URL+e
                ;
            }
        },
}
</script>

<style scoped>
#name{
  font-size: 1.3em;
  text-align: center;
  padding: 0.3em 0;
  background: black;
  width: inherit;
  color: #fff;
}
.bcl-members-details-container{
    display: flex;
    flex-direction: column;
    /* border:0.5px solid grey; */
    z-index: -5;
    width: 300px;
    margin: 20px 0;
}
img{
  display: block;
  width: inherit;
  height: inherit;
}




   
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: rgba(0, 180, 0, 0.4);
  color: white;
  transform: rotateY(180deg);
}
</style>