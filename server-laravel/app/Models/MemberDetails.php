<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetails extends Model
{
    use HasFactory;
    protected $table="member_details";
    protected $fillable=["first_name","middle_name","last_name","mobile_number","email","image"];
    public $timestamps=false;
    protected $casts = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'mobile_number' => 'int',
        'email' => 'string',
        'image' => 'string',
        'batch' => 'string',
    ];
}
