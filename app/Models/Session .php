<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Session extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function UserInfo(){
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
