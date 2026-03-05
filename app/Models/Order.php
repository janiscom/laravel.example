<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
