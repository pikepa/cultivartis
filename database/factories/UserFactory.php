<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname,
            'family_name' => $this->faker->lastname,
            'email' => $this->faker->safeEmail,
            'subject' => $this->faker->sentence,
            'message_body' => $this->faker->paragraph(3),
            'type' => 'message'
            ];
    }
}
