<template>
  <v-card :title="Details.fullName" class="v-card" outlined>
    <v-card-title class="v-card__title">
      <div class="photo">
        <img :src="Details.imageUrl" />
      </div>
    </v-card-title>
    <v-card-text class="v-card__text">
      <div class="name">
        {{ Details.fullName }}
      </div>
    </v-card-text>
    <v-card-subtitle v-if="Details.socialLinks" class="d-flex">
      <div v-if="Details.socialLinks.github" class="flex-shrink-1 flex-grow-1">
        <v-btn
          class="social-media-buttons"
          target="_blank"
          :href="Details.socialLinks.github"
        >
          <v-icon>mdi-github</v-icon>
        </v-btn>
        <v-btn
          target="_blank"
          :href="'mailto:' + Details.socialLinks.email"
          class="flex-shrink-1 flex-grow-1"
        >
          <v-icon> mdi-email-edit-outline</v-icon>
        </v-btn>
        <v-btn
          class="social-media-buttons"
          target="_blank"
          :href="Details.socialLinks.linkedin"
        >
          <v-icon>mdi-linkedin</v-icon>
        </v-btn>
      </div>
    </v-card-subtitle>
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
.v-card {
  cursor: pointer;
  flex: 1;
}
.v-card__title {
  justify-content: center;
  align-content: center;
}
.v-card__text {
  color: black !important;
  font-weight: normal !important;
  text-align: center !important;
  height: 2.5em;
}
.photo {
  height: 17em;
  max-height: 100%;
  max-width: 100%;
}
.photo img {
  height: 100%;
  width: 100%;
  border-radius: 0.5em;
}
.name {
  text-align: center;
  padding: 3px;
  font-weight: bold;
  font-size: 1.5em;
  font-family: monospace;
}
.social-media-buttons {
  margin: 0.5em;
}
</style>
