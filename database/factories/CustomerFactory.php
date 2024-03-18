<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fake = fake('id_ID');

        return [
            'id'=> $fake->unique()->numerify('C####'),
            'name'=> $fake->name(),
            'addres'=> $fake->addres(),
            'gander'=> $fake->randomElement(1,2),
            'addres'=> $fake->randomElement(0,1),

        ];
    }
}
