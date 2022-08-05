<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientCoupon;
use App\Models\Coupon;
use App\Models\CouponClient;
use App\Models\User;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev@agenciavandu.com',
            'password' => bcrypt('marencos6359:D'),
        ]);
        User::create([
            'name' => 'Alvar Buenfil Vadillo',
            'email' => 'ab@agenciavandu.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Nicxa',
            'email' => 'nicxa@test.com',
            'password' => bcrypt('password'),
        ]);
        /* Coupon::factory(60)->create(); */

        $coupons = [
            [
            'coupon' => 'Alitas + Refresco',
            'franchise' => 'Pizza Hut',
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
            ],
            [
            'coupon' => 'Combo Whopper + 4 Nuggets',
            'franchise' => 'Burger King',
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
            ],
            [
            'coupon' => '2 Bisquets gratis en tu primera compra*',
            'franchise' => 'LBB Obregon',
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
            ],
            [
            'coupon' => '10 Nuggets + papas grandes',
            'franchise' => 'KFC',
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
            ],
        ];
        foreach ($coupons as $coupon) {
            Coupon::create($coupon);
        }
        $states = ['campeche','chiapas','tabasco','yucatan'];
        $clients = Client::all();
        foreach ($clients as $client) {
            ClientCoupon::create([
                'coupon_id' => Coupon::all()->random()->id,
                'client_id' => $client->id,
                'state' => $states[array_rand($states)],
            ]);
        }
    }
}
