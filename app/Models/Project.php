<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function multiImg()
    {
        return $this->hasMany(MultiImg::class,'project_id','id');
    }
}
