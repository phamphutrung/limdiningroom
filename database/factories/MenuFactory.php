<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function PHPSTORM_META\type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = [
            'food',
            'wine',
            'gallery'
        ];

        return [
            'name' => fake()->name(),
            'price' => rand(10000, 500000),
            'sub_desc' => Str::random(7),
            'desc' => "Lorem ipsum dolor sit amet.",
            'content' => [
                'main_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nostrum.',
                'sub_content1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
                'sub_content2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
                'sub_content3' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe repudiandae modi sed earum sunt obcaecati.',
            ],
            'type' => $type[rand(0, 2)],
        ];
    }
}
