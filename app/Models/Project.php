<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category(){
    	return $this->belongsTo(Category::class,'category_id','id');
    }
    public function brand(){
    	return $this->belongsTo(Status::class,'status_id','id');
    }
    public function multiImg()
    {
        return $this->hasMany(MultiImg::class,'project_id','id');
    }
    public function multiImgfloor()
    {
        return $this->hasMany(MultiImgfloor::class,'project_id','id');
    }
}

