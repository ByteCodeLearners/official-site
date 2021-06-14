const axios=require("axios");
const configuration={
    baseURL:process.env.VUE_APP_SERVER_URL
}
const instance=axios.create(configuration);
export default {
       getAllMembers(){
           return instance.get("/members/all");
       },
       getAllUsers(){
        return instance.get("/users/all");
       },
       addNewMember(memberDetails){
            return instance.post("/members/new",memberDetails);
       },

       addevent(data){
        return instance.post("/addevents",data);
    }

}