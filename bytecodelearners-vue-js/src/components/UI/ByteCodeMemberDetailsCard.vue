<template>
 <v-card>
      <div class="bcl-members-details-container">
        <div class="bcl-members-image" :title="getFullName">
                  <img :src="details.image |prependImageUrl" :alt="getFullName">
              </div>
              <div class="bcl-members-details">
                  <p>{{getFullName}}</p>
              </div>
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
  </div>
 </v-card>
</template>

<script>
export default {
    name:"ByteCodeMemberDetailsCard",
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
                return process.env.VUE_APP_IMAGE_URL+e;
            }
        },
}
</script>

<style scoped>

.bcl-members-details-container{
    display: flex;
    flex-direction: column;
    border:0.5px solid grey;
    z-index: -5;
    width: 300px;

}

.bcl-members-image
{
    height: 350px;

}

.bcl-members-image>img{
    min-height: 50px;
    height: 350px;
    width: 100%;
}
.bcl-members-details{
    text-align: center;
    font-weight: 600;

}
.bcl-social-links{
  min-height: 50px;
}
@media only screen and (max-width:500px)
{
    .bcl-members-image>img{
        width: 200px;
        
    }
    .bcl-members-image
    {
        height: 350px;
        width: 200px;
    }
    .bcl-members-details-container{
        width: 200px;
    }
}









.bcl-social-links
{
  padding-left:0;
  margin-bottom:4px;
  list-style:none;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  flex-direction: row;
  justify-content: center;

}
/* .bcl-social-links li
{
  display:inline-block;
  margin-bottom:4px
} */
/* .bcl-social-links li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
} */
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