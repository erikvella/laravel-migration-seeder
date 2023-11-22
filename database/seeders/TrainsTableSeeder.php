<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0 ; $i < 10 ; $i++){
            $train = new Train();
            $train->Azienda = $faker->words(3 , true);
            $train->Stazione_di_partenza = $faker->address;
            $train->Stazione_di_arrivo = $faker->address;
            $train->slug = Str::slug($train->Azienda, '-');
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_treno = $faker->numberBetween(10000,99999);
            $train->Numero_di_carrozze = $faker->numberBetween(12,16);
            // $train->In_orario =
            // $train->Cancellato =

            $train->save();
        }

    }
}
