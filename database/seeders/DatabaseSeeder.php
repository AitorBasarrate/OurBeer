<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        $cont = 0;
        while($cont < 30){
            DB::table('bar')->insert([
                'nombre' => $faker->word(),
                'latitud' => $faker->latitude($min = -90, $max = 90),
                'longitud' => $faker->longitude($min = -180, $max = 180),
                'ciudad' => $faker->city()
            ]);

            DB::table('cerveza')->insert([
                'name' => $faker->word(),
                'tipo' => $faker->word(),
                'descripcion' => $faker->sentence($nbWords = 20),
                'pais' => $faker->country()
            ]);

            DB::table('BarCerveza')->insert([
                'precio' => $faker->numberBetween($min=2, $max=7)
            ]);
            $cont++

    }
}
