<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;
use Faker\Guesser\Name;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        // crear un seeder especifico sin utilizar el factory
        //con este codigo puedes insertar mas datos
        // Curso::create([
        //     'name'=>'Laravel',
        //     'slug'=>Str::slug('Programacion','-'),
        //     'descripcion'=>'curso pro de laravel',
        //     'categoria'=>'desarrollo',

        // ]);
        //podriamos utilizar el faker para que fuese en español
        $faker = FakerFactory::create('es_ES');
        Curso::factory(50)->create();
    }
    
}
