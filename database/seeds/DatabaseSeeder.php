<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker::create();

        $num = 1;
        foreach (range(1,5) as $index) {

            DB::table('usuarios')->insert([
                'nombre' => $faker->name,
                'apellido' => $faker->lastName,
                'sistema_id' => $faker->bothify('********************'),

                'email' => 'usuario'.$num.'@gmail.com',
                'contrasena' => bcrypt('123456789'),

            ]);
            $num++;
        }

        $num = 1;
        foreach (range(1,55) as $index) {

            DB::table('productos')->insert([
                'codigo' => $faker->bothify('*************'),
                'materiales' => $faker->safeColorName,
                'peso' => $faker->numerify('###'),
                'tipo' => $faker->word,
                'precio' => $faker->numerify('####'),
                'stock' => $faker->numerify('#'),

            ]);
            $num++;
        }

        DB::table('datos')->insert([
            'mision' => $faker->text($maxNbChars = 550) ,
            'vision' => $faker->text($maxNbChars = 500) ,
            'direccion' => $faker->numerify('###'),
            'telefono' => $faker->numerify('#########'),

        ]);
    }
}
