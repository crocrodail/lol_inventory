<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class champions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static public function run()
    {
      DB::table('champions')->insert(['name' => "akali", 'description' => "the rogue assassin"]);
      DB::table('champions')->insert(['name' => "yasuo",'description' => "the unforgiven"]);
      DB::table('champions')->insert(['name' => "lux",'description' => "the lady of luminosity"]);
      DB::table('champions')->insert(['name' => "jinx",'description' => "the loose cannon"]);
      DB::table('champions')->insert(['name' => "thresh",'description' => "the chain warden"]);
      DB::table('champions')->insert(['name' => "leona",'description' => "the radiant dawn"]);
    }
}
