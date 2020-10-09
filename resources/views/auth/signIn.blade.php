<div class="signIn" style="@if($errors->any() && old('name')) {{'display: block'}} @else {{'display: none'}} @endif">
  <div class="popup">
    <div class="border">
      <div class="quite"></div>
      <h4>Bienvenue sur</h4>
      <h2>Roleplay inventory</h2>
      <p>Complètez ces quelques informations afin de créer un compte</p>
      <form method="POST" action="/register">
        @csrf
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" name="name" placeholder="Votre pseudo" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <input type="email" name="email" placeholder="Votre email" value="{{ old('email') }}" required autocomplete="email">
        <input type="password" name="password" placeholder="Votre mot de passe" value="">
        <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe" value="">
        <input type="submit" name="submit" value="Valider">
      </form>
    </div>
  </div>
</div>
