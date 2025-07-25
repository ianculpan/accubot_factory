<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $fillable = [
        'id',
        'customer_name'
    ];

    public function lines(): HasOne
    {
        return $this->hasOne(OrderLine::class);
    }
}
