<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fumetti = config('comics');

         foreach($fumetti as $fumetto) {

            $nuovoFumetto = new Comic();

            $nuovoFumetto->fill($fumetto);

            $nuovoFumetto->save();

         }
         

    }
}
