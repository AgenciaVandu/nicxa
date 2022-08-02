<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion muchos a muchos con coupon
    public function coupons()
    {
        return $this->belongsToMany(Coupon::class);
    }
}
