<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
   
    use HasFactory,HasRoles,SoftDeletes,Authenticatable;
    protected $guarded=[];
    protected $hidden=['password'];

    protected $fillable=[
        "name",
        "username",
        "password",
        "role_id",
    ];
 

}


