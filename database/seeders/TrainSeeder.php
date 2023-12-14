<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
   
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 

            $new_train = new Train();

            $new_train->azienda = $faker->word();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->randomNumber(1, false);
            $new_train->numero_carrozze = $faker->numberBetween(4, 8);
            $new_train->in_orario = $faker->randomElement([false, true]);
            $new_train->cancellato = $faker->randomElement([false, true]);


            $new_train->save();
        }
    }
};
