<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable=["member_details_id"];
    protected $table="members";
    protected $primaryKey="id";
    public $timestamps = false;
}
