<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
//$2y$10$LJyyE0RK5DwgydfwGgEe.OEkP0AjnNEpM4pdHbw2Ytn4j45iP7k9m
    use HasFactory;
    protected $table="user_details";
    protected $fillable=["id","first_name", "middle_name", "last_name", "mobile_number", "email", "image", "users_id","social_media_links_id"];
    public $timestamps=false;
    protected $primaryKey="id";
    protected $casts = [
        "first_name"=>"string",
        "middle_name"=>"string",
        "last_name"=>"string",
        "mobile_number"=>"int",
        "email"=>"string",
        "image"=>"string",
        "social_media_links_id"=>"int",
        "users_id"=>"int"

    ];
    private $nullable=["middle_name"];
    protected $hidden=["id","users_id","social_media_links_id"];
    public function userRole(){
        return $this->hasOne(Roles::class,"id","role_id");
    }
    public function socialMediaLinks(){
        return $this->hasOne(SocialMediaLinks::class,"id","social_media_links_id");
    }
    public function setMiddleNameAttribute($value)
    {
        if(!is_null($value))
        return $this->attributes["middle_name"]=$value;
        else
            return $this->attributes["middle_name"]='';
    }
}
