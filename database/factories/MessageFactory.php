<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customers = Customer::get();
        $randCustomerId = [];
        foreach ($customers as $customer) {
            $randCustomerId[] = $customer->id;
        }

        return [
            'content' => fake()->text(200),
            'customer_id' => $randCustomerId[rand(0, count($randCustomerId) - 1)]
        ];
    }
}
