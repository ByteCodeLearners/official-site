<template>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h2>ByteCodeLearners</h2>
          <h6>About us</h6>
          <p class="about-us-content">
            ByteCodeLearners <i>Community</i> is an initiative to promote
            Project based learning .
          </p>
          <h6>
            <v-icon color="white">mdi-chevron-right-box</v-icon
            ><router-link to="/initiator">Initiator</router-link>
          </h6>
        </div>

        <div class="col-xs-6 col-md-3">
             <center><router-link :to="{ path: '/' }"><img id="logo_img" :src="logo" /></router-link></center>
        </div>

        <div class="col-xs-6 col-md-3" id="contact-us">
          <h6>Contact Us</h6>
          <p>ByteCodeLearners</p>
          <p>
            Email-
            <a href="mailto:bytecodelearners@gmail.com">
              bytecodelearners@gmail.com</a
            >
          </p>
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">
            Copyright &copy; 2020 | Created by
            <a href="https://www.bytecodelearners.tech/">ByteCodeLearners</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="bcl-social-links">
            <a
              class="instagram"
              href="https://www.instagram.com/bytecode_learners/"
              target="_blank"
              ><v-icon class="bcl-social-media-icons" dark
                >mdi-instagram</v-icon
              ></a
            >
            <a
              class="twitter"
              href="https://twitter.com/BytecodeL"
              target="_blank"
              ><v-icon class="bcl-social-media-icons" href="" dark
                >mdi-twitter</v-icon
              ></a
            >
            <a
              class="facebook"
              href="https://www.facebook.com/Bytecode-Learners-103644071079006"
              target="_blank"
              ><v-icon class="bcl-social-media-icons" dark
                >mdi-facebook</v-icon
              ></a
            >
            <a
              class="github"
              href="https://github.com/ByteCodeLearners/"
              target="_blank"
              ><v-icon class="bcl-social-media-icons" dark
                >mdi-github</v-icon
              ></a
            >
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  data: () => ({
    logo: process.env.VUE_APP_SERVER_STATIC_FILES + "/bytecode.png",
  }),
};
</script>

<style scoped>
#logo_img {
  animation: mymove 3s infinite;
}

@keyframes mymove {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

.site-footer {
  background-color: #26272b;
  padding: 20px 0 10px;
  font-size: 15px;
  line-height: 24px;
  color: #737373;
}
.site-footer hr {
  border-top-color: #bbb;
  opacity: 0.5;
}
.site-footer hr.small {
  margin: 20px 0;
}
.site-footer h6 {
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  margin-top: 5px;
  letter-spacing: 2px;
}

.site-footer a {
  color: #737373;
}
.site-footer a:hover {
  color: #3366cc;
  text-decoration: none;
}
.footer-links {
  padding-left: 0;
  list-style: none;
}
.footer-links li {
  display: block;
}
.footer-links a {
  color: #737373;
}
.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
  color: #3366cc;
  text-decoration: none;
}
.footer-links.inline li {
  display: inline-block;
}
.site-footer .bcl-social-links {
  text-align: right;
}
.site-footer .bcl-social-links a {
  width: 40px;
  height: 40px;
  text-decoration: none;
  line-height: 40px;
  margin-left: 6px;
  margin-right: 0;
  border-radius: 100%;
  background-color: #33353d;
}
.copyright-text {
  margin: 0;
}
img {
  height: 5em;
}
@media (max-width: 991px) {
  .site-footer [class^="col-"] {
    margin-bottom: 30px;
  }
}
@media (max-width: 767px) {
  .site-footer {
    padding-bottom: 0;
  }
  .site-footer .copyright-text,
  .site-footer .bcl-social-links {
    text-align: center;
  }
}
.bcl-social-links {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.bcl-social-links li {
  display: inline-block;
  margin-bottom: 4px;
}
.bcl-social-links li.title {
  margin-right: 15px;
  text-transform: uppercase;
  color: #96a2b2;
  font-weight: 700;
  font-size: 13px;
}
.bcl-social-links a {
  background-color: #eceeef;
  color: #818a91;
  font-size: 16px;
  display: inline-block;
  line-height: 44px;
  width: 44px;
  height: 44px;
  text-align: center;
  margin-right: 8px;
  border-radius: 100%;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.bcl-social-links a:active,
.bcl-social-links a:focus,
.bcl-social-links a:hover {
  color: #fff;
  background-color: #29aafe;
}
.bcl-social-links.size-sm a {
  line-height: 34px;
  height: 34px;
  width: 34px;
  font-size: 14px;
}
.bcl-social-links a.facebook:hover {
  background-color: #3b5998;
}
.bcl-social-links a.twitter:hover {
  background-color: #00aced;
}
.bcl-social-links a.instagram:hover {
  background-color: #007bb6;
}
.bcl-social-links a.github:hover {
  background-color: #ea4c89;
}
@media (max-width: 767px) {
  .bcl-social-links li.title {
    display: block;
    margin-right: 0;
    font-weight: 600;
  }
}
</style>