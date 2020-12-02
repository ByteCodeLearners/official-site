<?php

namespace App\Http\Controllers;
use App\Models\MemberDetails;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class MemberController extends Controller
{
    public function addMember(Request $request){
        $request_member_details=[
            "first_name"=>$request["first_name"],
            "middle_name"=>$request["middle_name"],
            "last_name"=>$request["last_name"],
            "email"=>$request["email"],
            "mobile_number"=>$request["mobile_number"],
            /* for profile picture upload (PS: No column in database to store url)*/
//            $url=$request->file("image")->store('/images',"public")

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
            return response()->json($ex->errorInfo[2],500);
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
