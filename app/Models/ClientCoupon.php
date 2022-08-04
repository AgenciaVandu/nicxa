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
        $coupon_mas_repetido = ClientCoupon::find($coupon_mas_repetido->coupon_id);
        return $coupon_mas_repetido;
    }

    //Funcion para obtener el cupon mas repetido de la franchise burger king
    public static function getMostRepeatedCouponBK()
    {
        $coupon_mas_repetido = ClientCoupon::select('coupon_id', DB::raw('count(*) as total'))
            ->whereHas('coupon', function ($query) {
                $query->where('franchise', 'Burger King');
            })
            ->groupBy('coupon_id')
            ->orderBy('total', 'desc')
            ->first();

        $coupon_mas_repetido = Coupon::find($coupon_mas_repetido->coupon_id);
        return $coupon_mas_repetido;
    }
    //Funcion para obtener el cupon mas repetido de la franchise kfc
    public static function getMostRepeatedCouponKFC()
    {
        $coupon_mas_repetido = ClientCoupon::select('coupon_id', DB::raw('count(*) as total'))
            ->whereHas('coupon', function ($query) {
                $query->where('franchise', 'KFC');
            })
            ->groupBy('coupon_id')
            ->orderBy('total', 'desc')
            ->first();
        $coupon_mas_repetido = Coupon::find($coupon_mas_repetido->coupon_id);
        return $coupon_mas_repetido;
    }
    //Funcion para obtener el cupon mas repetido de la franchise pizza hut
    public static function getMostRepeatedCouponPH()
    {
        $coupon_mas_repetido = ClientCoupon::select('coupon_id', DB::raw('count(*) as total'))
            ->whereHas('coupon', function ($query) {
                $query->where('franchise', 'Pizza Hut');
            })
            ->groupBy('coupon_id')
            ->orderBy('total', 'desc')
            ->first();
        $coupon_mas_repetido = Coupon::find($coupon_mas_repetido->coupon_id);
        return $coupon_mas_repetido;
    }
    //Funcion para obtener el cupon mas repetido de la franchise LBB Obregon
    public static function getMostRepeatedCouponLBB()
    {
        $coupon_mas_repetido = ClientCoupon::select('coupon_id', DB::raw('count(*) as total'))
            ->whereHas('coupon', function ($query) {
                $query->where('franchise', 'LBB Obregon');
            })
            ->groupBy('coupon_id')
            ->orderBy('total', 'desc')
            ->first();
        $coupon_mas_repetido = Coupon::find($coupon_mas_repetido->coupon_id);
        return $coupon_mas_repetido;
    }


}
