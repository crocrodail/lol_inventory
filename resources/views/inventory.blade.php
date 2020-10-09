<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Inventory League of Legends</title>
    <link href="//db.onlinewebfonts.com/c/a05747eaf46bae50f19dfa950b86befd?family=Mark+Pro+Medium" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/inventory.min.css') }}">

    @include('layouts.header')

    <div class="contents">

      <div class="header_inv">

        <h2>gérez votre</h2>
        <h1>inventaire</h1>
        <button type="button" id='start' class="redLol">Commencer</button>
      </div>

    </div>


    @include('layouts.footer')
    @include('auth.signIn')
    @include('auth.logIn')

  </body>
</html>
