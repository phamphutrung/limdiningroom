<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $boolean = [false, true];

        return [
            'name' => fake()->name(),
            'price' => rand(10000, 500000),
            'sub_desc' => 'Lorem ipsum dolor sit amet consectetur.',
            'short_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sequi corrupti sapiente consectetur aliquam blanditiis voluptas, ipsam similique beatae repellat!',
            'content' => [
                'main_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.',
                'sub_content1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
                'sub_content2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
                'sub_content3' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
            ],
            'status' => $boolean[rand(0,1)],
            'isCombo' => $boolean[rand(0,1)],
            'more_info' => [
                'introduce' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae distinctio optio asperiores a alias vero maiores cum sunt. Provident temporibus voluptates accusantium animi perspiciatis architecto vero eos vitae obcaecati exercitationem.,',
                'element' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, non.',
                'Nutritional value' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, maiores?'
            ]
        ];
    }
}
