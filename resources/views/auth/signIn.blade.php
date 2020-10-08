<div class="signIn">
  <div class="popup">
    <div class="border">
      <div class="quite"></div>
      <h4>Bienvenue sur</h4>
      <h2>Roleplay inventory</h2>
      <p>Complètez ces quelques informations afin de créer un compte</p>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Votre pseudo" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <input type="email" name="email" placeholder="Votre email" value="{{ old('email') }}" required autocomplete="email">
        <input type="password" name="password" placeholder="Votre mot de passe" value="">
        <input type="password" name="verifPassword" placeholder="Confirmation mot de passe" value="">
        <input type="submit" name="submit" value="Valider">
      </form>
    </div>
  </div>
</div>
