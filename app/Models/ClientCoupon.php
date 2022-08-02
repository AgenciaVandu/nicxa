<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClientCoupon extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'client_coupon';

    //Relacion muchos a muchos  inversa con la tabla client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    //Relacion muchos a muchos  inversa con la tabla coupon
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    //Funcion para obtener el cupon mas repetido
    public static function getMostRepeatedCoupon()
    {
        $coupon_mas_repetido = ClientCoupon::select('coupon_id', DB::raw('count(*) as total'))
            ->groupBy('coupon_id')
            ->orderBy('total', 'desc')
            ->first();
        return $coupon_mas_repetido;
    }


}
