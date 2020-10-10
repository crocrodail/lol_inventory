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
      DB::table('champions')->insert(['name' => "akali",]);
      DB::table('champions')->insert(['name' => "yasuo",]);
      DB::table('champions')->insert(['name' => "lux",]);
      DB::table('champions')->insert(['name' => "jinx",]);
      DB::table('champions')->insert(['name' => "thresh",]);
      DB::table('champions')->insert(['name' => "leona",]);
    }
}
