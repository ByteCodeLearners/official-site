<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetails extends Model
{
    use HasFactory;
    protected $table="member_details";
    protected $fillable=["first_name","middle_name","last_name","mobile_number","email"];
    public $timestamps=false;
}
