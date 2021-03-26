<template>
  <div class="bcl-container" id="events-gallery">
    <v-card class="gallery_heading mx-auto mb-4">EVENTS GALLERY</v-card>
            <div class="gallery" data-aos="zoom-in-up" data-aos-duration="1500">
                <figure class="gallery__item gallery__item--1">
                    <img :src="'/g1.jpg' | staticFile" alt="Gallery image 1" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img :src="'/g2.jpg' | staticFile" alt="Gallery image 2" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img :src="'/g8.jpg' | staticFile" alt="Gallery image 3" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img :src="'/g4.jpg' | staticFile" alt="Gallery image 4" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img :src="'/g3.jpg' | staticFile" alt="Gallery image 5" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img :src="'/g6.jpg' | staticFile" alt="Gallery image 6" class="gallery__img">
                </figure>
                
                    <v-icon class="gallery__item gallery__item--7 plus" x-large disabled>mdi-plus</v-icon>
                
            </div>
        </div>
</template>

<script>
export default {
  name:"PhotoGallery",
  filters:{
      staticFile(e)
      {
        return process.env.VUE_APP_SERVER_STATIC_FILES+e;
      }
    },
}
</script>

<style>

.plus:hover{
  background: grey;
}

.gallery_heading{
  text-align: center;
  font-size: 4em;
  font-weight: 700;
}

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit; 
}

.gallery {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-template-rows: repeat(8, 5vw);
  grid-gap: 1.5rem; 
  z-index: 0;
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery__item--1 {
  grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--2 {
  grid-column-start: 3;
  grid-column-end: 5;
  grid-row-start: 1;
  grid-row-end: 3;

  /** Alternative Syntax **/
  /* grid-column: 3 / span 2;  */
  /* grid-row: 1 / span 2; */
}

.gallery__item--3 {
  grid-column-start: 5;
  grid-column-end: 9;
  grid-row-start: 1;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4;
  grid-row: 1 / span 5; */
}

.gallery__item--4 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 3;
  grid-row-end: 6;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4;  */
  /* grid-row: 3 / span 3; */
}

.gallery__item--5 {
  grid-column-start: 1;
  grid-column-end: 5;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 1 / span 4; */
  /* grid-row: 6 / span 3; */
}

.gallery__item--6 {
  grid-column-start: 5;
  grid-column-end: 7;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4; */
  /* grid-row: 6 / span 3; */
}

.gallery__item--7 {
  grid-column-start: 7;
  grid-column-end: 9;
  grid-row-start: 6;
  grid-row-end: 9;

  /** Alternative Syntax **/
  /* grid-column: 5 / span 4; */
  /* grid-row: 6 / span 3; */
}

@media only screen and (max-width:500px)
{
  .gallery_heading{
    font-size: 2em;
  }
}

</style>