<?php

namespace Database\Seeders;

use App\Models\Client;
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
        $coupons = Coupon::factory(60)->create();

        foreach ($coupons as $coupon) {
            $coupon->clients()->attach(Client::all()->random()->id);
        }
    }
}
