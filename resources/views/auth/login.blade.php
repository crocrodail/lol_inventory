<div class="logIn" style="@if($errors->any() && !old('name')) {{'display: block'}} @else {{'display: none'}} @endif">
  <div class="popup">
    <div class="border">
      <div class="quite"></div>
      <h4>se connecter sur</h4>
      <h2>Roleplay inventory</h2>
      <p>Complètez ces quelques informations afin de vous connecter</p>
      <form method="POST" action="{{ route('login') }}">
        @csrf
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
        <input type="email" name="email" placeholder="Votre email" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <input type="password" name="password" placeholder="Votre mot de passe" value="">
        <input type="submit" name="submit" value="Valider">
      </form>
    </div>
  </div>
</div>
