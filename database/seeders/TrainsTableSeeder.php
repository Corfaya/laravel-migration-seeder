<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train as Train;
use Faker\Generator as Faker; 

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($k=0; $k<30; $k++) {
            $train = new Train();
            $train->azienda = $faker->words(3, true);
            $train->stazione_di_partenza = $faker->words(4, true);
            $train->stazione_di_arrivo = $faker->words(4, true);
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('?????#');
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
