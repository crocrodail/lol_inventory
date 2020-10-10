<div class="selectChamp" style="display: none">
  <div class="popup">
    <div class="border">
      <div class="quite"></div>
      <h4>Choisissez un</h4>
      <h2>Champion</h2>
      <form method="POST" action="/createFiche">
        @csrf
        <div class="radio">
          <input id="akali" type="radio" name="champ" value="1">
          <input id="yasuo" type="radio" name="champ" value="2">
          <input id="lux" type="radio" name="champ" value="3">
          <input id="jinx" type="radio" name="champ" value="4">
          <input id="thresh" type="radio" name="champ" value="5">
          <input id="leona" type="radio" name="champ" value="6">
        </div>
        <input type="submit" name="submit" class="redLol1" value="Valider">
      </form>
    </div>
  </div>
</div>
