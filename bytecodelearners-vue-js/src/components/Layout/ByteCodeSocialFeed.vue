<template>
  <div class="bcl-feed" id="feeds">
    <v-card class="feed-head  mx-auto mb-4" flat outlined> SOCIAL FEED </v-card>
    <div class="container">
    <div class="row">
      <v-card
        class="col-sm-12  col-md-3 mt-3  bcl-small-container-1"
        data-aos="zoom-in-up"
        data-aos-duration="1500"
        color="rgba(0,0,0,0)">
        <center>
          <h1>FACEBOOK FEEDS</h1>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBytecodeLearners-103644071079006%2F
            &tabs=timeline%20&width=320&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId"
            width="320"
            height="500"
            style="overflow:hidden;"
            scrolling="no"
            frameborder="0"
            allowfullscreen="true"
            allow="autoplay;
           clipboard-write; encrypted-media; picture-in-picture; web-share"
          ></iframe>
        </center>
      </v-card>
      <v-spacer></v-spacer>
      <v-card
        class="col-sm-12  col-md-3 mt-3  bcl-small-container-1"
        data-aos="zoom-in-up"
        data-aos-duration="1500"
        color="rgba(0,0,0,0)">
        <center>
          <h1>INSTAGRAM FEEDS</h1>
          <div
            class="elfsight-app-38aeead9-6afd-4d88-b47b-cdb578618059"
            style="overflow-y:scroll !important;overflow-x: hidden !important; width:auto !important;height:500px !important;width:320px !important;">
          </div>
        </center>
      </v-card>
      <v-spacer></v-spacer>
      <v-card
        class="col-sm-12  col-md-3 mt-3 bcl-small-container-1"
        data-aos="zoom-in-up"
        data-aos-duration="1500"
        color="rgba(0,0,0,0)">
        <center>
          <h1>TWITTER FEEDS</h1>
          <a class="twitter-timeline"
            data-width="320"
            data-height="500"
            style="overflow-y:hidden;"
            href="https://twitter.com/ByteCodeLearner?ref_src=twsrc%5Etfw">Tweets by ByteCodeLearner
          </a>
        </center>
      </v-card>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  created() {
    let ckeditor = document.createElement("script");
    ckeditor.setAttribute("src", "https://platform.twitter.com/widgets.js");
    document.head.appendChild(ckeditor);
    let instagrameditor = document.createElement("script");
    instagrameditor.setAttribute("src","https://apps.elfsight.com/p/platform.js");
    document.head.appendChild(instagrameditor);  
  },
};
</script>

<style scoped>
.feed-head{
  text-align: center;
  font-size: 4em;
  font-weight: 700;
  margin-top: 3vh;
}
.bcl-feed {
  min-height: 50vh;
}
.row {
  display: flex;
  flex-direction: row;
   flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 3vh;
}
@media only screen and (max-width: 500px) {
  .feed-head {
    font-size: 2em !important;
  }
}
</style>
