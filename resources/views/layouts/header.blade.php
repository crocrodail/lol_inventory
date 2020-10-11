    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/header_footer.min.css') }}">
    <link href="//db.onlinewebfonts.com/c/a05747eaf46bae50f19dfa950b86befd?family=Mark+Pro+Medium" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/116af611cbcd9e4bada60b4e700430c1?family=Avenir+Light" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
  <div id="app">
    <header>
      <div class="logoRG">
        <img id="riotgame" src="{{ asset('images/riot-games-seeklogo.com.svg') }}" alt="Riot Game logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="10.682" height="8.535" viewBox="0 0 8.682 4.535">
          <g id="noun_Arrow_2094736" transform="translate(-0.001 -75.02)">
            <path id="Tracé_16" data-name="Tracé 16" d="M.079,8.658a.115.115,0,0,0,.068.023A.12.12,0,0,0,.23,8.645L4.472,4.514a.26.26,0,0,0,0-.34L.23.036A.112.112,0,0,0,.078.025.231.231,0,0,0,0,.21V8.475a.229.229,0,0,0,.079.183Z" transform="translate(8.683 75.02) rotate(90)" fill="#7e7e7e"/>
          </g>
        </svg>
        <div class="break"></div>
        <img id="iconlol" src="{{ asset('images/lollogoo.svg') }}" alt="League of legends icon">
      </div>
      <div class="mainMenu">
        <a href="{{ route('welcome') }}">Accueil</a>
        <a href="{{ route('inventaire') }}">Inventaire</a>
        <a href="{{ route('about') }}">Qui sommes-nous ?</a>
        <a href="{{ route('contact') }}">Contact</a>
      </div>

      @auth
        <div class="button">
          <button type="button" class="redLolll">Mon profil</button>
        </div>
      @else
        <div class="button">
          <button type="button" class="goldLollll" id="login">Connexion</button>
          <button type="button" class="redLolll" id="register">Inscription</button>
        </div>
      @endif
    </header>
