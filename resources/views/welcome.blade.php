<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Inventory League of Legends</title>
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

    @include('layouts.header')

    <div class="mainScreen">

      <img src="{{ asset('images/logoLOL.png') }}" alt="League of legends logo">
      <div class="breaklolStyle"></div>
      <h1>Roleplay inventory</h1>
      <div class="btn">
        <div class="content">
          <div class="cadre"></div>
          <button type="button" class="redLol" id="decouvrir">Découvrir</button>
          <div class="onbtnleft"></div>
          <div class="onbtnright"></div>
        </div>
      </div>
    </div>

    <div class="about">
      <div class="content">
        <div class="left">
          <h2>Découvrez notre</h2>
          <h1>Concept</h1>
          <div class="break"></div>
          <p>
            League of Legends - Roleplay Inventory est une
            plateforme vous permettant de gérer vos inventaires
            de Jeu de Rôle. Ajoutez ou enlevez des objets,
            définissez un poids maximum, gérez et consommez vos
            ressources... Créez votre inventaire, ou gérez les
            inventaires de vos joueurs en tant que MJ.

            Inscrivez-vous dès à présent afin de commencer à créer !
          </p>
          <button type="button" id='registerr' class="redLol">S'inscrire</button>
        </div>
        <div class="right">
          <img id="circleG" src="{{ asset('images/circle.svg') }}" alt="circle">
          <img id="garen" src="{{ asset('images/garen.png') }}" alt="garen">
          <h2>The might of demacia</h2>
          <h1>garen</h1>
        </div>
      </div>
    </div>

    <div class="exemple">
      <div class="left">

        <img id="inventaire" src="{{ asset('images/inventaire.svg') }}" alt="inventaire">
        <img id="champion" src="{{ asset('images/champions/akali/main.png') }}" alt="akali">
        <h2 id="champdescrip">The rogue assassin</h2>
        <h1 id="namechamp">akali</h1>
        <div class="btn">
          <button type="button" class="redLol">Ajouter un item</button>
          <button type="button" class="goldLol">Remise a zéro</button>
        </div>
        <div class="crow"> </div>
        <div class="roles">
          <div class="role assassins select">
            <img src="{{ asset('images/assassins.png') }}" alt="assassins">
            <div class="p">
              <p>assassins</p>
            </div>
          </div>
          <div class="role fighters">
            <img src="{{ asset('images/fighters.png') }}" alt="fighters">
            <div class="p">
              <p>fighters</p>
            </div>
          </div>
          <div class="role mages">
            <img src="{{ asset('images/mages.png') }}" alt="mages">
            <div class="p">
              <p>mages</p>
            </div>
          </div>
          <div class="role marksmen">
            <img src="{{ asset('images/marksmen.png') }}" alt="marksmen">
            <div class="p">
              <p>marksmen</p>
            </div>
          </div>
          <div class="role supports">
            <img src="{{ asset('images/supports.png') }}" alt="supports">
            <div class="p">
              <p>supports</p>
            </div>
          </div>
          <div class="role tanks">
            <img src="{{ asset('images/tanks.png') }}" alt="tanks">
            <div class="p">
              <p>tanks</p>
            </div>
          </div>
        </div>

      </div>

      <div class="right">

        <h2>Créez votre</h2>
        <h1>Inventaire</h1>
        <div class="break"></div>
        <p>Choisissez votre classe et créez votre inventaire en quelques clics !</p>
        <a href="/inventaire"><button type="button" id='start' class="redLol">Commencer</button></a>
      </div>

    </div>

    <div class="lol">
      <div class="borderr">
        <div class="content">
          <h2>découvrez</h2>
          <h1>league of legends</h1>
          <div class="break"></div>
          <p>League of Legends est un jeu de stratégie en équipe dans lequel deux équipes de cinq champions s'affrontent pour détruire la base adverse.  League of Legends JDR s'inspire du lore du célèbre jeu. N'hésitez pas à le découvrir !</p>
          <div class="btn">
            <div class="contentbtn">
              <div class="cadre"></div>
              <a href="https://play.euw.leagueoflegends.com/fr_FR"><button type="button" class="redLol" id="decouvrir2">Découvrir</button></a>
              <div class="onbtnleft"></div>
              <div class="onbtnright"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.footer')
    @include('auth.signIn')
    @include('auth.logIn')

  </body>
</html>
