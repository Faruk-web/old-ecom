<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supplier(){
    	// return $this->belongsTo(Supplier::class);
    	return $this->belongsTo(Supplier::class,'supplier_id','id');
    }

    public function productName(){
    	// return $this->belongsTo(Supplier::class);
    	return $this->belongsTo(Product::class,'product_id','id');
    }
}
