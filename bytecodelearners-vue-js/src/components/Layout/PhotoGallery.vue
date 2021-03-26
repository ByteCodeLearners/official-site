<template>
  <div class="bcl-container" id="events-gallery">
    <v-card class="gallery_heading mx-auto mb-4">EVENTS GALLERY</v-card>
            <div class="gallery img-grid" data-aos="zoom-in-up" data-aos-duration="1500">
                <figure class="gallery__item gallery__item--1 img-box" @click="model()">
                    <img :src="'/g1.jpg' | staticFile" alt="Gallery image 1" class="gallery__img img-timg">
                </figure>
                <figure class="gallery__item gallery__item--2 img-box">
                    <img :src="'/g2.jpg' | staticFile" alt="Gallery image 2" class="gallery__img img-timg">
                </figure>
                <figure class="gallery__item gallery__item--3 img-box" >
                    <img :src="'/g8.jpg' | staticFile" alt="Gallery image 3" class="gallery__img img-timg">
                </figure>
                <figure class="gallery__item gallery__item--4 img-box" >
                    <img :src="'/g4.jpg' | staticFile" alt="Gallery image 4" class="gallery__img img-timg">
                </figure>
                <figure class="gallery__item gallery__item--5 img-box" >
                    <img :src="'/g3.jpg' | staticFile" alt="Gallery image 5" class="gallery__img img-timg">
                </figure>
                <figure class="gallery__item gallery__item--6 img-box" >
                    <img :src="'/g6.jpg' | staticFile" alt="Gallery image 6" class="gallery__img img-timg">
                </figure>
                
                    <v-icon class="gallery__item gallery__item--7 plus" x-large disabled>mdi-plus</v-icon>
                
            </div>
            <div class="modal">
      <span class="close">&times;</span>
      <span class="previous">&#8249;</span>
      <span class="next">&#8250;</span>
      <img class="modal-content" src="" alt="">
      <div class="caption"></div>
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
  mounted(){
    
      document.addEventListener('DOMContentLoaded', () => {

    const images = document.querySelectorAll('.img-timg'),
          modal = document.querySelector('.modal'),
          content = document.querySelector('.modal-content'),
          closeBtn = document.querySelector('.close'),
          prevBtn = document.querySelector('.previous'),
          nextBtn = document.querySelector('.next'),
          caption = document.querySelector('.caption');
  
    let imgIndex;
  
    const openModal = () => {
      modal.style.display = 'block';
    }
  
    const closeModal = () => {
      modal.style.display = 'none';
    }
  
    const displayImg = () => {
      if (imgIndex > images.length - 1) { imgIndex = 0 };
      if (imgIndex < 0) { imgIndex = images.length - 1 };
      content.src = images[imgIndex].src;
      content.alt = images[imgIndex].alt;
      caption.textContent = images[imgIndex].alt;
    }  
  
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener('click', () => {
        imgIndex = i;
        openModal();
        displayImg();
      });
    }
  
    closeBtn.addEventListener('click', () => closeModal());
  
    prevBtn.addEventListener('click', () => {
      imgIndex--;
      displayImg();
    });
  
    nextBtn.addEventListener('click', () => {
      imgIndex++;
      displayImg();
    });
  
    document.addEventListener('keyup', (e) => {
      if (e.key === 'Escape') {
        closeModal();
      }
    });
  
    document.addEventListener('keyup', (e) => {
      if (e.key === 'ArrowLeft') {
        imgIndex--;
        displayImg();
      }
    });
  
    document.addEventListener('keyup', (e) => {
      if (e.key === 'ArrowRight') {
        imgIndex++;
        displayImg();
      }
    });
  
  });

    
  }
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


.img-timg:hover {
    cursor: pointer;
  }
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    padding-top: 3rem;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgba(0, 0, 0, 0.9);
  }
  .close, .previous,.next{
    position: absolute;
    color:white;
    opacity: 1;
    user-select: none;
  }
  .close:hover,.previous:hover,.next:hover {
    cursor: pointer;
    opacity: 1;
    transition: 200ms ease-in;
  }
  .close {
    font-size: 3rem;
    font-weight: bold;
    top: 1rem;
    left: 95%;
  }
  .previous {
    font-size: 4rem;
    top: 37%;
    left: 2rem;
  }
  .next {
    font-size: 4rem;
    top: 37%;
    right: 2rem;
  }
  .modal-content {
    margin: auto;
    display: block;
    width: auto;
    height: 80vh;
    border: 0.1rem solid teal;
    border-radius: 0.5rem;
  }
  .caption {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 1rem;
    font-style: italic;
    text-align: center;
    color: gray;
    margin-top: 1rem;
  }
  @media (max-width: 1100px) {
    /* .modal .previous, .container .modal .next {
      display: none;
    } */
  }
  @media (max-width: 1024px) {
    /* .container {
      padding: 0;
    } */
    .container .modal .modal-content {
      width: 96%;
      height: auto;
      margin-top: 2rem;
    }
  }
</style>