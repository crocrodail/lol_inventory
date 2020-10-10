<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ficheController extends Controller
{
  public function get()
  {
    $playerData = DB::table('inventory')
        ->where('player', Auth::user()->id)
        ->get()
        ->toArray();
    echo var_dump($playerData);
    if (!isset($playerData[0])){
      return view("inventory", ["data" => $playerData]);
    } else {
      $id = $playerData[0]->id;
      return redirect("/inventaire/".$id);
    }
  }

  public function focus($id)
  {
    $playerData = DB::table('inventory')
        ->join('champions', 'inventory.champion', '=', 'champions.id')
        ->where('player', Auth::user()->id)
        ->where('inventory.id', $id)
        ->get()
        ->toArray();
    echo var_dump($playerData);
    return view("inventory", ["data" => $playerData]);
  }

  public function create(Request $request)
  {
    $champion = $request->get('champ');
    DB::table('inventory')->insert(
      [
        'player' => Auth::user()->id,
        'champion' => $champion,
      ]);
    return redirect('/inventaire');
  }
}
