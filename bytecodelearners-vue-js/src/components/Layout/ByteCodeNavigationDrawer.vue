<template>
  <v-navigation-drawer
    class="bcl-menu"
    app
    temporary
    v-model="menu"
    stateless
    right
    title="press m to toggle menu"
  >
    <!-- Navigation items -->
    <v-container>
      <div
        class="bcl-menu-item"
        @click="scrollToEvents"
        v-if="getCurrentRoute == '/'"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-calendar-star</v-icon
        >
        <div class="bcl-menu-item-title bcl-large-text">Events</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="scrollToMembers"
        v-if="getCurrentRoute == '/'"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-account-group-outline</v-icon
        >
        <div class="bcl-menu-item-title bcl-large-text">Members</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="scrollToEventsGallery"
        v-if="getCurrentRoute == '/'"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-projector-screen</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">Events Gallery</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="routerView('/')"
        v-if="getCurrentRoute != '/'"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-home-assistant</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">Home</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="routerView('/batches')"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-database-search</v-icon
        >
        <div class="bcl-menu-item-title bcl-large-text">Batches</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="routerView('/freshers_register')"
        v-if="getCurrentRoute != '/freshers_register'"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-file-document-edit-outline</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">
          Fresher's Registration
        </div>
      </div>
      <div
        class="bcl-menu-item"
        @click="routerView('/initiator')"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-wall</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">Initiator</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="routerView('/events_winner')"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-party-popper</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">Events Winner</div>
      </div>
      <div
        class="bcl-menu-item"
        @click="scrollToContactUs"
      >
        <v-icon class="bcl-menu-item-icon" color="green darken-2" x-large
          >mdi-human-greeting-proximity</v-icon
        >
        <div class="bcl-menu-item-title bcl-medium-text">Contact Us</div>
      </div>
    </v-container>
  </v-navigation-drawer>
</template>

<script>
export default {
  computed: {
    getCurrentRoute() {
      var current = this.$route.path;
      return current;
    },
  },
  methods: {
    scrollToEvents() {
      this.scrollTo("events");
    },
    scrollToMembers() {
      this.scrollTo("members");
    },
    scrollToEventsGallery() {
      this.scrollTo("events-gallery");
    },
    scrollToContactUs() {
      this.scrollTo("contact-us");
    },

    scrollTo(e) {
      $("html, body").animate(
        {
          scrollTop: $("#" + e).offset().top,
        },
        700,
        () => {
          this.$emit("closeNavigationDrawer");
        }
      );
    },

    routerView(route) {
      this.$router.push(route);
      this.$emit("closeNavigationDrawer");
    },

    closeNavBar(e) {
      if (e.target.className == "v-overlay__scrim") {
        this.$emit("closeNavigationDrawer");
      }
    },
  },
  props: {
    menu: Boolean,
  },
  mounted() {
    window.addEventListener("click", this.closeNavBar);
  },
};
</script>

<style scoped>
.bcl-menu {
  display: flex;
  flex-direction: column;
}
.bcl-menu-item {
  display: flex;
  flex-direction: row;
  cursor: pointer;
  border-bottom: 1px solid black;
  height: 70px;
}

.bcl-small-text {
  font-size: 1em;
}
.bcl-medium-text {
  font-size: 1.3em;
}

.bcl-large-text {
  font-size: 1.3em;
}

.bcl-menu-item-icon {
  height: 100%;
  width: 30%;
  font-size: 2.6em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
}
.bcl-menu-item-title {
  width: 70%;
  font-weight: bold;
  display: flex;
  flex-direction: column;
  align-content: center;
  justify-content: center;
}

@media only screen and (max-width: 500px) {
  .bcl-menu-item-icon {
    width: 30%;
    font-size: 2.5em;
  }
  .bcl-small-text {
    font-size: 1em;
  }
  .bcl-medium-text {
    font-size: 1.2em;
  }

  .bcl-large-text {
    font-size: 1.2em;
  }
  .bcl-menu-item {
    height: 70px;
  }
}

@media only screen and (max-width: 400px) {
  .bcl-menu-item-icon {
    width: 20%;
    font-size: 2em;
  }
  .bcl-small-text {
    font-size: 0.8em;
  }
  .bcl-medium-text {
    font-size: 1em;
  }

  .bcl-large-text {
    font-size: 1em;
  }
  .bcl-menu-item {
    height: 50px;
  }
}
</style>