<template>
    <div class="founders-page mt-7">
        <div class="heading d-flex flex-row ">
            <div class="logo">
                <img src="http://bytecodelearners.club/statics/byte-code-learners.svg">
            </div>
            <v-card elevation="0" class="initiators-head">FOUNDERS OF THE CLUB</v-card>
        </div>
            <v-card >
                <v-card-text elevation="0">
                    <div class="description d-flex justify-center align-center">
                        <div class="image flex-shrink-1">
                            <img src="../../assets/img.jpg"/>
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
        <div class="d-flex">
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
                        imageUrl:"http://bytecodelearners.club/initiators-image/dipu-kumar-sah.jpg",
                        socialLinks:{
                            github:"https://github.com/dipu-kr-sah",
                            email:"dipuxah7@gmail.com"
                        }
                    },
                    {
                        fullName:"Yash Raj",
                        imageUrl:"http://bytecodelearners.club/initiators-image/yash-raj.jpg",
                        socialLinks:{
                            github:"https://github.com/180905",
                            email:"yash180905@gmail.com",
                        }

                    },
                    {
                        fullName:"Raj Patel",
                        imageUrl:"http://bytecodelearners.club/initiators-image/raj-patel.jpg",
                    },
                    {
                        fullName:"Shantanu Pratap",
                        imageUrl:"http://bytecodelearners.club/initiators-image/shantanu-pratap.jpg",
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
        width: 60%;
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
    }
    .v-card__text{
        justify-content: center !important;
        align-content: center!important;
        box-sizing: border-box !important;
        padding: 2em 0 2em 0 !important;
        min-height: 20em !important;

    }
</style>
 
