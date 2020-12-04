const axios=require("axios");
const configuration={
    baseURL:"https://www.bytecodelearners.club/bytecodelearners-server-laravel/api"
}
const instance=axios.create(configuration);
export default {
       getAllMembers(){
           return instance.get("/members/all");
       },
       addNewMember(memberDetails){
            return instance.post("/members/new",memberDetails);
       }
}