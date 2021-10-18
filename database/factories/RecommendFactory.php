<?php

namespace Database\Factories;

use App\Models\Recommend;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecommendFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recommend::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nitrogen'=>random_int(10,30),
            'phosphorus'=>random_int(10,30),
            'potassium'=>random_int(10,30),
            'temperature'=>random_int(10,30),
            'humidity'=>random_int(10,30),
            'ph'=>random_int(1,14),
            'rainfall'=>random_int(10,30),
            'label'=>$this->faker->randomElement(["rice","mainze","Coffee","Tomato"]),
            'location'=>$this->faker->city(),
            'user_id'=>fn()=>User::all()->random()
        ];
    }
}
