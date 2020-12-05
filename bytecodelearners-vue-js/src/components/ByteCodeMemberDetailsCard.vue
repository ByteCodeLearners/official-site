<template>
 <v-card>
      <div class="bcl-members-details-container">
        <div class="bcl-members-image">
                  <img :src="details.image |prependImageUrl" :alt="details.first_name+' '+details.middle_name+' '+details.last_name">
              </div>
              <div class="bcl-members-details">
                  <p>{{details.first_name}} {{details.middle_name}} {{details.last_name}}</p>
              </div>
              <!-- <div class="bcl-members-social-icon">
                  <div class="yt">
                      <a :href="details.youtube">yt</a>
                  </div>
              </div> -->
  </div>
 </v-card>
</template>

<script>
export default {
    name:"ByteCodeMemberDetailsCard",
    data:()=>({
            image:require("@/assets/bytecode-original.png"),
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
        filters:{
            prependImageUrl(e)
            {
                return process.env.VUE_APP_IMAGE_URL+e;
            }
        }
}
</script>

<style scoped>

.bcl-members-details-container{
    display: flex;
    flex-direction: column;
    border:0.5px solid grey;
    z-index: -5;
}

.bcl-members-image
{
    height: 90%;
}

.bcl-members-image>img{
    min-height: 50px;
    width: 300px;
}
.bcl-members-details{
    text-align: center;
    font-weight: 600;

}
@media only screen and (max-width:500px)
{
    .bcl-members-image>img{
        width:150px;
    }
}
</style>