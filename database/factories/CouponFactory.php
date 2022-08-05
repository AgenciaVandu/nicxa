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
            'coupon' => $this->faker->randomElement(['Alitas + Refresco','Combo Whopper + 4 Nuggets','2 Bisquets gratis en tu primera compra*','10 Nuggets + papas grandes']),
            'franchise' => $this->faker->randomElement(['Pizza Hut','Burger King','LBB Obregon','KFC']),
            'state' => $this->faker->randomElement(['campeche','chiapas','tabasco','yucatan']),
            'source' => 'landing',
            'campaign' => 'Cupones Impresos',
            'chanel' => 'web',
        ];
    }
}
