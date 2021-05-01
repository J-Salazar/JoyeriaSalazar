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

                'email' => 'usuario'.$num.'@gmail.com',
                'contrasena' => bcrypt('123456789'),

            ]);
            $num++;
        }

        $num = 1;
        foreach (range(1,55) as $index) {

            DB::table('productos')->insert([
                'codigo' => $faker->bothify('*************'),
                'materiales' => $faker->$faker->randomElement(['Oro', 'Plata', 'Cobre']),
                'peso' => $faker->numberBetween($min = 10, $max = 250),
                'tipo' => $faker->$faker->randomElement(['Gargantilla', 'Collar', 'Pulsera','Aretes','Tobillera']),
                'precio' => $faker->numerify('###'),
                'stock' => $faker->numberBetween($min = 1, $max = 20),

            ]);
            $num++;
        }

        $num = 1;
        foreach (range(1,23) as $index) {

            DB::table('clientes')->insert([
                'nombre' => $faker->name,
                'apellido' => $faker->lastName,
                'telefono' => $faker->numerify('#########'),
                'correo' => $faker->email,
                'dni' => $faker->numerify('########'),

            ]);
            $num++;
        }

        $mision = "Nuestra búsqueda es redefinir y reforzar la pasión por las joyas de oro y diamantes con productos de la más alta calidad y pureza  en la gama más amplia y los precios más bajos. Tenemos la intención de establecer nuevos estándares de transparencia y trato justo.";
            $vision = "Ser un centro regional de excelencia en diseño de joyas y emprendimiento creativo, con una reputación que atraiga a los nuevos diseñadores de joyas más talentosos a nuestros programas, y una educación que produzca graduados superiores para mejorar la industria de la joyería de la región.";
            $direccion = "Av. General Garzon 1388 - Jesús María Lima 11 Lima, Perú";
            $telefono = "(01) 425-1494";
        DB::table('datos')->insert([

            'mision' => $mision ,
            'vision' => $vision ,
            'direccion' => $direccion,
            'telefono' => $telefono,

        ]);
    }
}
