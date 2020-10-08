    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/header_footer.min.css') }}">
  </head>
  <body>
  <header>
    <div class="logoRG">
      <a href="#"><img id="riotgame" src="{{ asset('images/logoRG.png') }}" alt="Riot Game logo"></a>
      <svg xmlns="http://www.w3.org/2000/svg" width="10.682" height="8.535" viewBox="0 0 8.682 4.535">
        <g id="noun_Arrow_2094736" transform="translate(-0.001 -75.02)">
          <path id="Tracé_16" data-name="Tracé 16" d="M.079,8.658a.115.115,0,0,0,.068.023A.12.12,0,0,0,.23,8.645L4.472,4.514a.26.26,0,0,0,0-.34L.23.036A.112.112,0,0,0,.078.025.231.231,0,0,0,0,.21V8.475a.229.229,0,0,0,.079.183Z" transform="translate(8.683 75.02) rotate(90)" fill="#7e7e7e"/>
        </g>
      </svg>
      <div class="break"></div>
      <img id="iconlol" src="{{ asset('images/iconLOL.png') }}" alt="League of legends icon">
    </div>
    <div class="mainMenu">
      <a href="{{ route('home') }}">Accueil</a>
      <a href="{{ route('inventaire') }}">Inventaire</a>
      <a href="{{ route('about') }}">Qui sommes-nous ?</a>
      <a href="{{ route('contact') }}">Contact</a>
    </div>

    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif --}}
    <div class="button">
      <button type="button" class="goldLol" id="login">Connexion</button>
      <button type="button" class="redLol" id="register">Inscription</button>
    </div>
  </header>
