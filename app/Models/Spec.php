<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'name',
        'brand_id',
        'price',
        'launch',
        'image',


    ];
    function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
