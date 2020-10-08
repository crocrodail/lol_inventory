<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Inventory League of Legends</title>
    <link href="//db.onlinewebfonts.com/c/a05747eaf46bae50f19dfa950b86befd?family=Mark+Pro+Medium" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/about.min.css') }}">

    @include('layouts.header')

    <div class="mainScreen">

      <img src="{{ asset('images/logoLOL.png') }}" alt="League of legends logo">
      <img src="{{ asset('images/blitz&co.png') }}" alt="blitz and co">
      <h1>qui sommes nous ?</h1>
      <div class="break"></div>
      <p>League of Legends - Roleplay Inventory, c'est simplement un petit projet scolaire entre un développeur et une designer.  Mais comme ils aiment bien se compliquer la vie, maintenant ça ressemble à peu près à un vrai site.</p>

    </div>

    <div class="us">
      <div class="content">
        <div class="Crocrodail">
          <img id="circleCrocro" src="{{ asset('images/circle.svg') }}" alt="circle">
          <img id='avatarcrocro' src="{{ asset('images/ariel.svg') }}" alt="ariel avatar crocrodail">
          <div class="title">
            <h2>webdeveloper</h2>
            <h1>crocrodail</h1>
            <div class="breakCrocrodail"></div>
          </div>
          <p>En première année à SUP'Internet, <a href="https://github.com/crocrodail">Crocodail</a> est un passionné de développement, de JDR et d'Ariel la petite sirène. C'est lui l'instigateur du concept du "Roleplay Inventory".</p>
          <div class="contentbtn">
            <div class="cadre"></div>
            <button type="button" class="redLol contacter2">contacter</button>
            <div class="onbtnleft"></div>
            <div class="onbtnright"></div>
          </div>
        </div>
        <div class="Perroko">
          <div class="title">
            <h2>webdesigner</h2>
            <h1>perroko</h1>
            <div class="breakPerroko"></div>
          </div>
          <p>En première année à SUP'Internet également, <a href="https://anne-marie-inthavong.fr/" target="_blank">Perroko</a> est une UI/UX designer fan d'oiseaux et de choses mignonnes. Elle s'occupe de toute la partie visuelle du site et de la rédaction.</p>
          <div class="contentbtn">
            <div class="cadre"></div>
            <button type="button" class="redLol contacter2">contacter</button>
            <div class="onbtnleft"></div>
            <div class="onbtnright"></div>
          </div>
          <img id="circlePeroko" src="{{ asset('images/circle.svg') }}" alt="circle">
          <img id="avatarperoko" src="{{ asset('images/peroko.svg') }}" alt="ariel avatar crocrodail">
        </div>
      </div>
    </div>


    @include('layouts.footer')

    @include('auth.signIn')

  </body>
</html>
