<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion muchos a muchos con la tabla client
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
    

}
