<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor' => $this->faker->sentence(2),
            'paciente' => $this->faker->name(),
            'medicamento' => $this->faker->text(),
            'descripcion' => $this->faker->text(),
        ];
    }
}
