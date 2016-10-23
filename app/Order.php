<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'address',
        'products_list',
        'is_express'
    ];

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }
}
