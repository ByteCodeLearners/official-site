<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table="users";
    public $timestamps=false;
    protected $fillable=["id","user_name","password", "user_details_id", "role"];
    protected $primaryKey="id";
    protected $hidden=["id","user_details_id","password"];
    protected $nullable=["role"];
    protected $casts=[
        "id"=>"int",
        "user_name"=>"string",
        "password"=>"string",
        "user_details_id"=>"string",
        "role"=>"string"
    ];
    public function userDetails()
    {
        return $this->belongsTo(UserDetails::class,"user_details_id","id");
    }
    public function  setPasswordAttribute($value){
        return $this->attributes['password']=Hash::make($value);
    }
}
