<?php

namespace IntelGUA\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $incrementing = false;

    protected $fillable = [
        'short_description',
        'long_description',
        'category_id',
        'tax_id',
        'measure_id',
        'measure',
        'price',
        'photo',
        'notes'
    ];


}
