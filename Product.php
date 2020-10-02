<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   // protected $guarded=[];
    protected $fillable = [
        'title', 'sku', 'description'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
