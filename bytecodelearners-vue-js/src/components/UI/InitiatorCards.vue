<template>
  <v-card :title="Details.fullName" class="v-card" outlined>
      <div class="bcl-members-details-container">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front" :title="Details.fullName">
           <img :src="Details.imageUrl" style="height=100%"/>
          </div>
          <div class="flip-card-back">
           <h2>{{ Details.fullName }}</h2>
              <div class="bcl-members-social-icon">
                <div class="bcl-social-links">
                    <a class="github"  :href="Details.socialLinks.github" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-github</v-icon></a>            
                    <a class="youtube"  :href="'mailto:' + Details.socialLinks.email" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-email-edit-outline</v-icon></a>
                    <a class="linkedin"  :href="Details.socialLinks.linkedin" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-linkedin</v-icon></a>
                </div>    
            </div>
          </div>
        </div>
   </div>
  <div id="name">{{ Details.fullName }}</div>
  </div>
 </v-card>
</template>

<script>
export default {
  name: "InitiatorDetailsCard",
  props: {
    Details: Object,
  },
};
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
.v-card{
  margin: 20px 0;
}
.bcl-members-details-container{
    display: flex;
    flex-direction: column;
    z-index: -5;
    width: 300px;
    /* margin: 20px 0; */
}
img{
  display: block;
  width: inherit;
  height: 100%;
}


.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}


.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}


.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}


.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}


.flip-card-front {
  background-color: #bbb;
  color: black;
}

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
  border-radius:100%;
  background-color:#33353d
}
</style>
