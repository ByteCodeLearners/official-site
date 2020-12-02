<?php

namespace App\Http\Controllers;
use App\Models\MemberDetails;
use App\Models\Members;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class MemberController extends Controller
{
    private $member_image_location="/members-image";
    public function addMember(Request $request){
        $request_member_details=[
            "first_name"=>$request["first_name"],
            "middle_name"=>$request["middle_name"],
            "last_name"=>$request["last_name"],
            "email"=>$request["email"],
            "mobile_number"=>$request["mobile_number"],
            /* for profile picture upload (PS: No column in database to store url)*/
            "image"=>$url=$request->file("image")->store("/members-image","public")
//            GET URL http://localhost:8000/storage/members-image/{image_url} (Development)
//        http://bytecodelearners.club/bytecodelearners-server-laravel/storage/app/public/members-image/WkEjCTCYUmifXWLsKI49VqXHFYCqDGpWlL1axhiF.png
        ];
        $member_details=new MemberDetails($request_member_details);
        try{
            /* transaction for safety of writing in member_details table along with members table */
            DB::beginTransaction();
            if(!$member_details->save())
            {
                DB::rollBack();
            }
            $member=new Members([
                "member_details_id"=>$member_details["id"]
            ]);
            if(!($member->save()))
            {
                DB::rollBack();
            }
            DB::commit();
            return response()->json($member,202);
        }
        catch (Throwable $ex){
            if($ex instanceof QueryException) {
                return response()->json($ex->errorInfo[2], 500);
            }
            return response()->json("member not added",500);
        }
    }
    public function getAllMembers()
    {
        return Members::all();
    }
    public function getMemberDetails($id)
    {
        $member=Members::find($id);
        if(!$member)
        {
            return response()->json("no member found", 400);
        }
        $member_details=MemberDetails::find($member["member_details_id"]);
        if(!$member_details)
        {
            return response()->json("no details found", 400);
        }
        return $member_details;
    }
}
