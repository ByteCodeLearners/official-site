<template>
 <v-card>
      <div class="bcl-members-details-container">
        <div class="bcl-members-image">
                  <img :src="image" alt="image">
              </div>
              <div class="bcl-members-details">
                  <p>ByteCoder</p>
              </div>
  </div>
 </v-card>
</template>

<script>
export default {
    name:"ByteCodeMemberDetailsCard",
    data:()=>({
            image:require("@/assets/bytecode-original.png"),
        }),
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