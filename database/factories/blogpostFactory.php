<?php

namespace Database\Factories;

use App\Models\blogpost;
use Illuminate\Database\Eloquent\Factories\Factory;

class blogpostfactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = blogpost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Inside the definition method, we edit the return array to define our blog post data:
            'title' => $this->faker->sentence, //Generates a fake sentence
            'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'user_id' => User::factory() //Generates a User from factory and extracts id

        ];
    }
}
