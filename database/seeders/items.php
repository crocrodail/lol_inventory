<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run()
    {
      DB::table('items')->insert([
          'name' => "Potion de vie",
          'poid' => 1,
          'type' => 0,
          'description' => "Propriété active unique. Consomme une charge pour rendre 60 PV et 35 pts de mana en 8 sec. Contient jusqu'à 5 charges et se recharge en passant à la boutique. ",
          'url' => "../images/heal.png",
      ]);
      DB::table('items')->insert([
          'name' => "Potion du chasseur",
          'poid' => 1,
          'type' => 0,
          'description' => "Propriété active unique. Consomme une charge pour rendre 60 PV et 35 pts de mana en 8 sec. Contient jusqu'à 5 charges et se recharge en passant à la boutique. ",
          'url' => "../images/hunt.png",
      ]);
      DB::table('items')->insert([
          'name' => "Totem de vision",
          'poid' => 1,
          'type' => 1,
          'description' => "Propriété active unique. Consomme une charge pour rendre 60 PV et 35 pts de mana en 8 sec. Contient jusqu'à 5 charges et se recharge en passant à la boutique. ",
          'url' => "../images/ward.png",
      ]);
    }
}
