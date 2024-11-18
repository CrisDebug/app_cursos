<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //variable
        // $name = $this->faker->sentence();
        $faker = FakerFactory::create('es_ES');
        $name = $this->faker->words(3,true);
        //validacion para slug vacio
        if(empty($name))
        {
            $name ='Laravel';
        }
        return [
            //definir los campos
            'name' => $name,
            'slug' => Str::slug($name,'-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['desarrollo','diseño']),
        ];
    }
}
