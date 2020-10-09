<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Inventory League of Legends</title>
    <link href="//db.onlinewebfonts.com/c/a05747eaf46bae50f19dfa950b86befd?family=Mark+Pro+Medium" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/profil.min.css') }}">

    @include('layouts.header')

    <div class="content">

      <h4>Mon</h4>
      <h2>Profil</h2>
      <div class="info">
        <img src="{{ asset('images/iconUser.png') }}" alt="user icon">
        <div class="data">
          <p> Pseudo: <span>{{ $data[0]->name }}</span> </p>
          <p> adresse e-mail: <span>{{ $data[0]->email }}</span> </p>
          <p> <a href="#">modifier le mot de passe</a> </p>
          <p> nombre de fiches perso: <span>4</span> </p>
          <p> inscrit depuis le: <span>{{ date_format(date_create($data[0]->created_at), 'd M Y') }}</span> </p>
        </div>
      </div>
      <button class="redbutt">Modifier</button>

      <div class="option">
        <a href="/logout"><button class="redbutt2">Déconnexion</button></a>
        <button id='deleteAcount' class="goldLol">Supprimer mon compte</button>
      </div>

    </div>


    @include('layouts.footer')
    @include('layouts.deleteAcount')

  </body>
</html>
