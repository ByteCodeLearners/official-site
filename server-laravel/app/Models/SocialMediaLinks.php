<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLinks extends Model
{
    use HasFactory;
    protected $fillable=["facebook","instagram","linkedin","twitter","github","youtube","member_details_id"];
    protected $table="social_media_links";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $casts =[
        "facebook"=> "string",
        "instagram" => "string",
        "linkedin" => "string",
        "twitter" => "string",
        "github" => "string",
        "youtube" => "string",
        "member_details_id"=> "int"
    ];
}
