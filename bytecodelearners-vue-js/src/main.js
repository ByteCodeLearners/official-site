import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import vuetify from './plugins/vuetify';
import VueTyperPlugin from 'vue-typer'
import AOS from 'aos'
import 'aos/dist/aos.css'





Vue.use(VueTyperPlugin);
Vue.config.productionTip = false;

new Vue({
  created() {
    AOS.init()
  },

  router,
  store,
  vuetify,
  render: function (h) { return h(App) }
}).$mount('#app')
