<template>
    <div class="founders-page mt-7">
        <div class="heading">
            <div class="logo">
               <router-link :to="{ path: '/' }"> <img src="http://bytecodelearners.tech/statics/byte-code-learners.svg"></router-link>
            </div>
            <v-card elevation="0" class="initiators-head">FOUNDERS OF THE CLUB</v-card>
        </div>
            <v-card >
                <v-card-text elevation="0">
                    <div class="description">
                        <div class="image flex-shrink-1">
                            <img src="http://bytecodelearners.tech/statics/init_img.jpg"/>
                        </div>
                        <div class="texts">
                            <span>ByteCodeLearners Club</span> was founded in 2019  by 4 CSE students when they were in their 2nd year of college.<br>
                            The main motive to start such a community was that being from a Computer Science background they were very much interested in coding and development.<br>
                            In the beginning, when they started their development and coding they found themselves confused at so many places and there was no such community in their college to help them.<br>
                            They all decided to start a coding community for the coming freshers. So that they should not have to face all those difficulties and problems again that their seniors faced.<br>
                            They came up with a solution for their juniors known as BYTECODELEARNERS.<br>
                            The club was just started with 4 members from a classroom of the CENTRAL UNIVERSITY OF HARYANA.
                        </div>
                    </div>
                </v-card-text>
            </v-card>
        <div class="initiators">
            <InitiatorDetailsCard class="flex-shrink-1 flex-grow-1 mx-2 my-2"  v-for="(initiator,key) in initiators" :key="key" :details="initiator"/>
        </div>
    </div>
</template>

<script>
    import InitiatorDetailsCard from "../../components/UI/InitiatorDetailsCard";

    export default{

        data(){
            return{
                initiators:[
                    {
                        fullName:"Dipu Kumar Sah",
                        imageUrl:"http://bytecodelearners.tech/initiators-image/dipu-kumar-sah.jpg",
                        socialLinks:{
                            github:"https://github.com/dipu-kr-sah",
                            email:"dipuxah7@gmail.com",
                            linkedin: "https://www.linkedin.com/in/dipu-kumar-sah-07b308181/",
                        }
                    },
                    {
                        fullName:"Yash Raj",
                        imageUrl:"http://bytecodelearners.tech/initiators-image/yash-raj.jpg",
                        socialLinks:{
                            github:"https://github.com/180905",
                            email:"yash180905@gmail.com",
                            linkedin: "https://www.linkedin.com/in/yash-raj-3719111b2/",
                        }

                    },
                    {
                        fullName:"Raj Patel",
                        imageUrl:"http://bytecodelearners.tech/initiators-image/raj-patel.jpg",
                        socialLinks:{
                            github:"https://github.com/rajpatel2619",
                            email:"kakhilesh79@gmail.com",
                            linkedin :"https://www.linkedin.com/in/rajpatel2619/",

                        }
                    },
                    {
                        fullName:"Shantanu Pratap",
                        imageUrl:"http://bytecodelearners.tech/initiators-image/shantanu-pratap.jpg",
                        socialLinks:{
                            linkedin: "https://www.linkedin.com/in/shantanu-p-291b991b4",
                            github:"https://github.com/180896-cse",
                            email:"shantanupratap180896@gmail.com",
                            
                        }
                    },
                ]
            }
        },
        components:{
            InitiatorDetailsCard,
        },
    }
</script>
<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif&display=swap');
    .founders-page{
        width: 90%;
        margin-left: 5%;
    }
    .logo{
        height: 7em;
    }
    .logo img{
        height: 100%;
    }
    .initiators-head{
        text-align:center;
        flex-grow: 1;
        font-size: 3.5em;
    }
    span{
        color: #53b38b;
        font-family: monospace;
        font-weight: 700;
    }
    .texts{
        font-family: 'PT Serif', sans-serif;
        width: 80%;
        font-size: 1.3em;
        text-align: justify;
        box-sizing: border-box;
        height: fit-content;
        color: black;
        padding: 1em;
        line-height: 1.4em;
        font-weight: bold;
    }
    .image{
        width: 15em;
        height: 15em;

    }
    .image>img{
        height: 100%;
        width: 100%;
        border-radius: 1em;
        margin-left:5%;
    }
    .v-card__text{
        justify-content: center !important;
        align-content: center!important;
        box-sizing: border-box !important;
        padding: 2em 0 2em 0 !important;
        min-height: 20em !important;
    }
    .heading{
        display: flex;
        flex-direction: row;
    }
    .description{
        display: flex;
        flex-direction: row;
    }
    .initiators{
        display: flex;
        flex-direction: row;
    }
    @media only screen and (max-width: 960px)
    {   
        .heading{
            flex-direction: column;
            align-items: center;
        }
        .description{
        flex-direction: column;
        align-items: center;    
    }
        .texts{
            width: 95%;
        }
        .initiators{
        flex-direction: column;
    }
    }
</style>
 
