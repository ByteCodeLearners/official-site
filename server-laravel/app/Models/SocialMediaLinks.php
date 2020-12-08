<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaLinks extends Model
{
    use HasFactory;
    protected $fillable=["id","facebook","instagram","linkedin","twitter","github","youtube"];
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
    ];

    protected $hidden=["id"];

    public function setFacebookAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["facebook"]=$value;
        else
            return $this->attributes["facebook"]='';
    }
    public function setInstagramAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["instagram"]=$value;
        else
            return $this->attributes["instagram"]='';
    }
    public function setTwitterAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["twitter"]=$value;
        else
            return $this->attributes["twitter"]='';
    }
    public function setLinkedinnAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["linkedin"]=$value;
        else
            return $this->attributes["linkedin"]='';
    }
    public function setGithubAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["github"]=$value;
        else
            return $this->attributes["github"]='';
    }
    public function setYoutubeInAttribute($value)
    {
        if(!is_null($value))
            return $this->attributes["youtube"]=$value;
        else
            return $this->attributes["youtube"]='';
    }

}
