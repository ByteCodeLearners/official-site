<template>
    <footer>
        <div class="bcl-footer left">
         


        </div>
        <div class="bcl-line"></div>
        <div class="bcl-footer middle">
            <div class="bcl-follow-us-on">
            <!-- <span>follow us</span> -->
                <div class="bcl-social-links">
                    <a href="https://www.instagram.com/bytecode_learners/" target="_blank"><v-icon class="bcl-social-media-icons"  dark>mdi-instagram</v-icon></a>
                    <a href="https://www.instagram.com/bytecode_learners/" target="_blank"><v-icon class="bcl-social-media-icons" href="" dark>mdi-twitter</v-icon></a>
                    <a href="https://www.facebook.com/Bytecode-Learners-103644071079006" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-facebook</v-icon></a>
                    <a href="https://github.com/ByteCodeLearners/" target="_blank"><v-icon class="bcl-social-media-icons" dark>mdi-github</v-icon></a>            
                </div>
            </div>
        </div>
        <div class="bcl-line"></div>
        <div class="bcl-footer right"></div>
    </footer>
</template>

<script>
export default {
    name:"ByteCodeFooter",

}
</script>

<style scoped>
footer{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    padding: 1%;
    background: #C4C4C4;
}
.bcl-footer{
    height: 250px;
    width: 30%;
    margin: 0;
    padding: 0;
}
.bcl-line
{
    border: 1px solid rgb(97, 94, 94);
    height: 100%;
    display: flex;
    flex-direction: column;
}
.bcl-social-links{
    display: flex;
    flex-direction: row;
}
.bcl-social-links>a{
    margin: 2%;
}
</style>