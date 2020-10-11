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
    $allInventory = DB::table('inventory')
        ->select('inventory.id as id', 'name')
        ->join('champions', 'inventory.champion', '=', 'champions.id')
        ->where('player', Auth::user()->id)
        ->get()
        ->toArray();
    $contentInventory = DB::table('inventory_content')
        ->join('items', 'inventory_content.item', '=', 'items.id')
        ->where('inventory', $id)
        ->get()
        ->toArray();
    return view("inventory", ["data" => $playerData, "all" => $allInventory, "inventory" => $contentInventory]);
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

  public function delete($id)
  {
    DB::table('inventory')
        ->where('player', Auth::user()->id)
        ->where('inventory.id', $id)
        ->delete();
    return redirect("/inventaire");
  }
}
