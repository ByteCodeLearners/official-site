<template>
    <div class="bcl-events">
        <v-card class="events-heading mx-auto mb-4">EVENTS</v-card>

    </div>
</template>

<script>
export default {
    
}
</script>
<style scoped>
.events-heading
{
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
.bcl-events{
  border:1px solid black;
  min-height: 50vh;
}
@media only screen and (max-width:500px)
{
  .events-heading{
    font-size: 2em;
  }
}

</style>