<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Balance>
 */
class BalanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date"=> $this->faker->date(),
            'wastetype'=> $this->faker->word(),
            'user'=> $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'opening_balance'=> $this->faker->randomDigit(),
            'generation_quantity'=> $this->faker->randomDigit(),
            'disposal_quantity'=> $this->faker->randomDigit(),
            'closing_balance'=> $this->faker->randomDigit(),
        ];
    }
}
