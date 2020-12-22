<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'  => $this->faker->firstname,
            'family_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'subject' => $this->faker->sentence,
            'message_body' => $this->faker->paragraph(3),
            'type' => 'message',
        ];
    }
}
