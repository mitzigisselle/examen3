<?php

namespace Database\Factories;

use App\Models\Personas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonasFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Personas::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Apaterno' => $this->faker->name(),
            'Amaterno' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'fecha' => $this->faker->date(),
            'sexo' => $this->faker->name(),
        ];
    }
}
