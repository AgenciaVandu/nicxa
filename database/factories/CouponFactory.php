<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coupon' => $this->faker->unique()->randomNumber(6),
            'franchise' => $this->faker->randomElement(['Pizza Hut','Burger King','LBB Obregon','KFC']),
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
        ];
    }
}
