<template>
 <v-card>
      <div class="bcl-members-details-container">
  <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front" :title="getFullName">
           <img :src="details.image |prependImageUrl" :alt="getFullName">
          </div>
          <div class="flip-card-back">
           <h2>{{getFullName}}</h2>
            <!-- <p>Junior</p> -->
            <!-- <p>{{details.year}}</p> -->
            <template v-if="details.social_media_links">
              <div class="bcl-members-social-icon">
                <div class="bcl-social-links">
                    <a class="instagram" v-if="details.social_media_links.instagram" :href="details.social_media_links.instagram" target="_blank"><v-icon class="bcl-social-media-icons"  dark>mdi-instagram</v-icon></a>
                    <a class="twitter" v-if="details.social_media_links.twitter" :href="details.social_media_links.twitter"  target="_blank"><v-icon class="bcl-social-media-icons" href="" dark>mdi-twitter</v-icon></a>
                    <a class="facebook" v-if="details.social_media_links.facebook" :href="details.social_media_links.facebook" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-facebook</v-icon></a>
                    <a class="github" v-if="details.social_media_links.github" :href="details.social_media_links.github" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-github</v-icon></a>            
                    <a class="youtube" v-if="details.social_media_links.youtube" :href="details.social_media_links.youtube" target="_blank"><v-icon class="bcl-social-media-icons" href="" dark>mdi-youtube</v-icon></a>
                    <a class="linkedin" v-if="details.social_media_links.linkedin" :href="details.social_media_links.linkedin" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-linkedin</v-icon></a>
                </div>    
            </div>
            </template>
            <template v-else>
              
            </template>
            

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
            return (this.details.first_name.trim()+" "+this.details.middle_name.trim()+" "+this.details.last_name.trim()).toUpperCase()
            }
            return (this.details.first_name.trim()+" "+this.details.last_name.trim()).toUpperCase();

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
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
}


.bcl-social-links
{
  padding-left:0;
  margin-bottom:4px;
  margin-top: 15px;
  list-style:none;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  flex-direction: row;
  justify-content: center;

}

.bcl-social-links a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  text-decoration: none;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.bcl-social-links a:active,.bcl-social-links a:focus,.bcl-social-links a:hover
{
  color:#fff;
  background-color:#29aafe
}
.bcl-social-links.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.bcl-social-links a.facebook:hover
{
  background-color:#3b5998
}
.bcl-social-links a.twitter:hover
{
  background-color:#00aced
}
.bcl-social-links a.instagram:hover
{
  background-color:#007bb6
}
.bcl-social-links a.github:hover
{
  background-color:#ea4c89
}
.bcl-social-links a.linkedin:hover
{
  background-color:#00aced
}
.bcl-social-links a.youtube:hover
{
  background-color: #FF0000
}

.bcl-social-links
{
  text-align:right
}
.bcl-social-links a
{
  width:40px;
  height:40px;
  text-decoration: none;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  margin-right:15px;
  margin-top: 8px;
  border-radius:100%;
  background-color:#33353d
}
</style>