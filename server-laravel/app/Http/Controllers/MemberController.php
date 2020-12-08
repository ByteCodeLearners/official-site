<?php

namespace App\Http\Controllers;
use App\Models\UserDetails;
use App\Models\Users;
use App\Models\SocialMediaLinks;
use App\Models\Members;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class MemberController extends Controller
{
    public function addMember(Request $request){
        $request_details=[
            "first_name"=>$request["first_name"],
            "middle_name"=>$request["middle_name"],
            "last_name"=>$request["last_name"],
            "email"=>$request["email"],
            "mobile_number"=>$request["mobile_number"],
            "image"=>$url=$request->file("image")->storeAs("/public/members-image",$request["email"].".jpg"),

            "user_name"=>$request["email"],
            "password"=>$request["password"],
            "role"=>($request["role"])?$request["role"]:'user',

            "facebook"=>$request["facebook"],
            "linkedin"=>$request["linkedin"],
            "instagram"=>$request["instagram"],
            "twitter"=>$request["twitter"],
            "github"=>$request["github"],
            "youtube"=>$request["youtube"],
            ];





        try{
            DB::beginTransaction();
            $social_media=new SocialMediaLinks($request_details);
            $social_media->save();
            $request_details["social_media_links_id"]=$social_media["id"];

            $user_details=new UserDetails($request_details);
            $user_details->save();
            $request_details["user_details_id"]=$user_details["id"];

            $user=new Users($request_details);
            $user->save();
            DB::commit();

            return response()->json($user,202);
        }
        catch (Throwable $ex){
            Storage::delete("/public/members-image/".$request_details["email"].".jpg");
            if($ex instanceof QueryException) {
                return response()->json($ex->errorInfo[2], 200);
            }
            return response()->json([$ex,"member not added"],200);
        }
    }
    public function getAllMembers()
    {

        $memberDetails=Users::with("userDetails.socialMediaLinks")
            ->where("role","member")
            ->get();
        return response()->json($memberDetails
            ,200);
    }




    public function getMemberDetails($id)
    {
        $member=Members::find($id);
        if(!$member)
        {
            return response()->json("no member found", 400);
        }
        $member_details=UserDetails::find($member["member_details_id"]);
        if(!$member_details)
        {
            return response()->json("no details found", 400);
        }
        return $member_details;
    }
}
