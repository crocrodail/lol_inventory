<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Inventory League of Legends</title>
    <link href="//db.onlinewebfonts.com/c/a05747eaf46bae50f19dfa950b86befd?family=Mark+Pro+Medium" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/inventory.min.css') }}">

    @include('layouts.header')

    <div class="inventory">

      @if ( count($data) != 0)
        <img id="hearder" src="{{ asset('images/champions/'.$data[0]->name.'/header.png') }}" alt="header Inventory">
      @else
        <img id="hearder" src="{{ asset('images/champions/akali/header.png') }}" alt="header Inventory">
      @endif
      <div class="title">
        <h4>Gérez votre</h4>
        <h2>Inventaire</h2>
      </div>
      <div class="fiche">
        {{-- <img id="cadre" src="{{ asset('images/cadreinv.png') }}" alt="cadre"> --}}
        @if ( count($data) == 0)
          <button type="button" id='addFiche' class="redLol1">+ Ajouter fiche</button>
        @else
          <div class="dropdown">
            <button id="buttonchec" class="" type="button">Fiche {{$data[0]->name}}</button>
            <input id="checkbox" type="checkbox" style="display: none">
            <ul class="dropdown-menu">

              @foreach ($all as $key => $value)
                <li class="dropdown-submenu">
                  <a href="/inventaire/{{$value->id}}">Fiche {{$value->name}}</a>
                  <ul class="dropdown-menu">
                    <a href="/inventaire/{{$value->id}}"><li>Accèder</li></a>
                    <div class="br"></div>
                    <a href="/inventaire/delete/{{$value->id}}"><li>Supprimer</li></a>
                  </ul>
                </li>
              @endforeach

              <li id="creatfiche">+ Ajouter fiche</li>
            </ul>
          </div>
        @endif
      </div>
      @if ( count($data) > 0)
        <div class="consommables">
          <h4>consommables</h4>
          <div class="break"></div>
          <div class="content">

            @foreach ($inventory as $key => $value)
              @if ($value->type == 0)
                <div class="item" id="item-{{ $value->id }}">
                  <div class="img">
                    <img id="item" src="{{ $value->url }}" alt="{{ $value->name }}">
                    <img id="cadre" src="{{ asset('images/cadreItem.png') }}" alt="cadre de l'items">
                    <div class="qty">
                      <p>00{{ $value->qty }}</p>
                    </div>
                  </div>
                  <div id="data-name" style="display: none">{{ $value->name }}</div>
                  <div id="data-description" style="display: none">{{ $value->description }}</div>
                </div>
              @endif
            @endforeach

          </div>
        </div>
        <div class="totems">
          <h4>totems</h4>
          <div class="break"></div>
          <div class="content">

            @foreach ($inventory as $key => $value)
              @if ($value->type == 1)
                <div class="item" id="item-{{ $value->id }}">
                  <div class="img">
                    <img id="item" src="{{ $value->url }}" alt="{{ $value->name }}">
                    <img id="cadre" src="{{ asset('images/cadreItem.png') }}" alt="cadre de l'items">
                    <div class="qty">
                      <p>00{{ $value->qty }}</p>
                    </div>
                  </div>
                  <div id="data-name" style="display: none">{{ $value->name }}</div>
                  <div id="data-description" style="display: none">{{ $value->description }}</div>
                </div>
              @endif
            @endforeach

          </div>
        </div>

        <div class="button">
          <button class="redLol2" type="button" name="button">Ajouter un item</button>
          <button class="goldLol1" type="button" name="button">Remise à zero</button>
        </div>

        <div class="weight">
          <h2> <span>23</span>kg</h2>
        </div>

        <div class="champion" style="display: block">
          <img class="cercle" src="{{ asset('images/circle.svg') }}" alt="akali">
          <img class="champ" src="{{ asset('images/champions/'.$data[0]->name.'/main.png') }}" alt="akali">
          <h2>{{$data[0]->description}}</h2>
          <h1>{{$data[0]->name}}</h1>
        </div>

        <div class="descriptionItem" style="display: none">
          <div class="item">
            <img src="{{ asset('images/items/heal.png') }}" alt="item focus">
          </div>
          <h5>Potion du chasseur</h5>
          <p>Propriété active unique. Consomme une charge pour rendre 60 PV et 35 pts de mana en 8 sec. Contient jusqu'à 5 charges et se recharge en passant à la boutique. </p>
          <h5>Actuellement en votre possession</h5>
          <div class="buttonss">
            <div class="qty">
              <div class="moin"></div>
              <p>003</p>
              <div class="plus"></div>
            </div>
            <button>Valider</button>
          </div>
        </div>
      @endif

    </div>


    @include('layouts.footer')
    @include('layouts.choseChampion')
    @include('auth.signIn')
    @include('auth.login')

  </body>
</html>
