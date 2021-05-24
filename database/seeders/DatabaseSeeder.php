<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /* public function run(){
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
            $cont++;
        }
    } */

    public function run()
    {
        $cervezas =  [
            [
                'idCerveza'=>'1', 'nombre'=>'Estrella Galicia 1906', 'tipo'=>'Tostada', 
                'descripcion'=>'Esta cerveza tostada tiene una graduación de 6.5%, su origen es gallego y presenta un color ámbar con abundante espuma blanca.',
                'pais'=>'España'
            ],[
                'idCerveza'=>'2', 'nombre'=>'Alhambra 1925', 'tipo'=>'Rubia', 
                'descripcion'=>'La Alhambra 1925 es una cerveza rubia de tipo Extra Lager de baja fermentación, con una graduación alcohólica 6.5%.',
                'pais'=>'España'
            ],[
                'idCerveza'=>'3', 'nombre'=>'Ambar Centeno', 'tipo'=>'Tostada', 
                'descripcion'=>'Es una cerveza tostada, con 6.4% grados de alchol. Se recomienda servir a una temperatura de entre 8 y 10ºC. Es considerada una de las mejores cervezas de centeno españolas.',
                'pais'=>'España'
            ],[
                'idCerveza'=>'4', 'nombre'=>'Mahou Maestra', 'tipo'=>'Tostada', 
                'descripcion'=>'Mahou Maestra es una tostada de tipo Extra Lager, con una graduación de 7.5%. Se recomienda consumir a una temperatura de entre 6 y 8ºC.',
                'pais'=>'España'
            ],[
                'idCerveza'=>'5', 'nombre'=>'Voll-Damm Doble Malta', 'tipo'=>'Märzenbier', 
                'descripcion'=>'Una cerveza de estilo Märzenbier clásica cin un intenso y complejo aroma a tostados, frutos de carozos y cítricos que otorgan frescor y evocaciones florales.',
                'pais'=>'España'
            ]
        ];

        foreach ($cervezas as $cerveza) {
            DB::table('cerveza')->insert($cerveza);
        }

        $bares =  [
            [
                'idBar'=>'1', 'nombre'=>'Bar Auzoa', 'latitud'=>'43.257119',  'longitud'=>'-2.906831', 'localidad'=>'Txurdinaga'
            ],[
                'idBar'=>'2', 'nombre'=>'Cafeteria Mahi', 'latitud'=>'43.258490',  'longitud'=>'-2.905277', 'localidad'=>'Txurdinaga'
            ],[
                'idBar'=>'3', 'nombre'=>'Bar El Mirador', 'latitud'=>'43.259052',  'longitud'=>'-2.902850', 'localidad'=>'Otxarkoaga'
            ],[
                'idBar'=>'4', 'nombre'=>'Bar Rimaitor', 'latitud'=>'43.259395',  'longitud'=>'-2.900959', 'localidad'=>'Otxarkoaga'
            ]
        ];

        foreach ($bares as $bar) {
            DB::table('bar')->insert($bar);
        }

        $BarCervezas = [
            [
                'precio'=>'1.87', 'cerveza_idCerveza'=>'2', 'bar_idBar'=>'1'
            ],
            [
                'precio'=>'1.84', 'cerveza_idCerveza'=>'4', 'bar_idBar'=>'1'
            ],
            [
                'precio'=>'1.95', 'cerveza_idCerveza'=>'5', 'bar_idBar'=>'1'
            ],
            [
                'precio'=>'1.85', 'cerveza_idCerveza'=>'1', 'bar_idBar'=>'2'
            ],
            [
                'precio'=>'1.85', 'cerveza_idCerveza'=>'4', 'bar_idBar'=>'2'
            ],
            [
                'precio'=>'1.80', 'cerveza_idCerveza'=>'1', 'bar_idBar'=>'3'
            ],
            [
                'precio'=>'1.80', 'cerveza_idCerveza'=>'2', 'bar_idBar'=>'3'
            ],
            [
                'precio'=>'1.80', 'cerveza_idCerveza'=>'3', 'bar_idBar'=>'3'
            ],
            [
                'precio'=>'1.83', 'cerveza_idCerveza'=>'3', 'bar_idBar'=>'4'
            ],
            [
                'precio'=>'1.88', 'cerveza_idCerveza'=>'5', 'bar_idBar'=>'4'
            ]
        ];

        foreach ($BarCervezas as $BarCerveza) {
            DB::table('BarCerveza')->insert($BarCerveza);
        }
    }
}
