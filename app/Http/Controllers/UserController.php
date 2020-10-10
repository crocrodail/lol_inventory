<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function get()
    {
      $nbFiche = '';
      $playerData = DB::table('users')
        ->where('id', Auth::user()->id)
        ->get();
      return view("profil", ["data" => $playerData, "trackings" => $nbFiche]);
    }

    public function delete(Request $request)
    {
      $playerData = DB::table('users')->where('id', Auth::user()->id)->delete();
      return redirect("/logout");
    }
}
