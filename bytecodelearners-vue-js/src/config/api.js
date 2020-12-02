const axios=require("axios");
const configuration={
    baseURL:process.env.VUE_APP_SERVER_URL
}
const instance=axios.create(configuration);
export default {
       getAllMembers(){
           return instance.get("/members/all");
       },
       addNewMember(memberDetails){
            return instance.post("/members/add",memberDetails);
       }
}