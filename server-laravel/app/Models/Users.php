<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    use HasFactory;
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
