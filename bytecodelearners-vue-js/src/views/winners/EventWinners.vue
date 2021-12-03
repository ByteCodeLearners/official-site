<template>
    <div class="winners">
        <center>
            <span id="heading">Winners</span>
        </center>


<div id="button">
<v-row justify="space-around">
    <v-col cols="auto">
      <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
      >
        <template v-slot:activator="{ on, attrs }">
          <v-btn
           color="primary"
            id="btns"
            
            v-bind="attrs"
            v-on="on"
            x-large
          >Tap Here</v-btn>
        </template>
        <template v-slot:default="dialog">
          <v-card>
            <v-toolbar
              color="success"
              dark
              class="font-weight-bold text-subtitle-1"
            >Girls Team (2020-24)</v-toolbar>
            <v-card-text>
                <p class="text-h4 font-weight-bold">Members</p> 
                <p class="text-h5">{{winners[0].members}}</p>

                <p class="text-h5 font-weight-bold">About Project</p> 
                <p class="text-h6">{{winners[0].about}}</p>

                <p class="text-h5 font-weight-bold">Project</p> 
                <p class="text-h6"><a :href="winners[0].project" target="_blank">{{winners[0].project}}</a></p>
            </v-card-text>
            <v-card-actions class="justify-end">
              <v-btn
                
                color="success"
                @click="dialog.value = false"
              >Close</v-btn>
            </v-card-actions>
          </v-card>
        </template>
      </v-dialog>
    </v-col>
  </v-row>

  </div>




    </div>
</template>

<script>
export default {
  data:()=>({
    winners:[
        {team:'Girls Team',about:'Our girls team together with passion and perseverance build a beautiful handcrafted website specially designed for students. In this, we have tried to bring together all the things which are related to the life of a students. It is a small initiative for Revolutionizing Education system. ADHYAYAN is designed to give your career the perfect boost to achieve your full potential and e mpowring the student with access to better future. Find every college, exam, scholarship and loan at one place whether it is a private or a government scheme. Apply for loans, bridge the gap in education finance.Apply for scholarship , find the best scholarship as per your eligibility. We are confident that after visiting our website you will not need to go anywhere else. We have taken care of all the needs of a student.If any student feels any kind of problem, then they can also talk to our experts by connecting on social media.We will all try with the help of this website that our students can get the right guidance.We have created this website so that all the students who come here keep getting fresh updates and they should not miss a single information. Our main moto is to spread awarness.',
        members:'Archana Kumari, Susmita Sagar, Umesh Kumari',
        project: 'https://bytecodelearners.tech/winners/event1/html/'}
    ]
  }),
}
</script>

<style scoped>
.winners{
    background: url(../../assets/winner1.jpg);
    background-size: cover;
    height: 100vh;
}

#heading{
    font-size: 70px;
    font-weight: 500;
    background: -webkit-linear-gradient(80deg,blue, red,yellow);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

#button{
    height: 75vh;
    display: flex;
    align-items: center;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-name: bounce-1;
    animation-timing-function: linear;
}
    @keyframes bounce-1 {
        0%   { transform: translateY(0); }
        50%  { transform: translateY(-20px); }
        100% { transform: translateY(0); }
    }

@media only screen and (max-width: 1300px) {
  .winners{
    background: url(../../assets/winner4.jpg);
    background-size: cover;
  }

  #btns{
      background-color: rgb(224, 153, 21) !important;
  }
}
</style>