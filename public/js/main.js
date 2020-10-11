window.addEventListener("DOMContentLoaded", (event) => {
  var closePopup = document.querySelectorAll('.popup .quite');
  var popup1 = document.querySelector('.signIn');
  var popup2 = document.querySelector('.logIn');
  var popup3 = document.querySelector('.delete');
  var popup4 = document.querySelector('.selectChamp');
  var inscription = document.querySelector('.button #register');
  var inscription2 = document.querySelector('#registerr');
  var connection = document.querySelector('.button #login');
  var deleteCancel = document.querySelector('#canceldelete');
  var deleteAcount = document.querySelector('#deleteAcount');
  var addFiche = document.querySelector('#addFiche');
  var championimg = document.querySelector('#champion');
  var assassin = document.querySelector('.roles .assassins');
  var fighters = document.querySelector('.roles .fighters');
  var mages = document.querySelector('.roles .mages');
  var marksmen = document.querySelector('.roles .marksmen');
  var supports = document.querySelector('.roles .supports');
  var tanks = document.querySelector('.roles .tanks');
  var champname = document.querySelector('#namechamp');
  var champdescrip = document.querySelector('#champdescrip');
  var addFiche2 = document.querySelector('#creatfiche');
  var btncheck = document.querySelector('#buttonchec');
  var checkbox = document.querySelector('#checkbox');
  var profil = document.querySelector('#profilacxc')

  if (closePopup){
    closePopup.forEach((item, i) => {
      item.addEventListener('click', ev => {
        if (popup1){ popup1.style.display = "none"; }
        if (popup2){ popup2.style.display = "none"; }
        if (popup3){ popup3.style.display = "none"; }
        if (popup4){ popup4.style.display = "none"; }
      });
    });
  }

  if (inscription){
    inscription.addEventListener('click', ev => {
      popup1.style.display = "block";
    });
  }
  if (inscription2){
    inscription2.addEventListener('click', ev => {
      popup1.style.display = "block";
    });
  }
  if (connection){
    connection.addEventListener('click', ev => {
      popup2.style.display = "block";
    });
  }
  if (deleteCancel){
    deleteCancel.addEventListener('click', ev => {
      popup3.style.display = "none";
    });
  }
  if (deleteAcount){
    deleteAcount.addEventListener('click', ev => {
      popup3.style.display = "block";
    });
  }
  if (addFiche){
    addFiche.addEventListener('click', ev => {
      popup4.style.display = "block";
    });
  }
  if (addFiche2){
    addFiche2.addEventListener('click', ev => {
      popup4.style.display = "block";
      checkbox.checked = false
    });
  }
  if (btncheck){
    btncheck.addEventListener('click', ev => {
      console.log(checkbox.checked);
      if (checkbox.checked){
        checkbox.checked = false;
      } else {
        checkbox.checked = true;
      }
    });
  }
  if (profil){
    profil.addEventListener('click', ev => {
      window.location = '/profil';
    });
  }

  if (assassin){
    var timing = 8
    var timer = timing;
    var last = 'akali';
    assassin.addEventListener('click', ev => {
      akali();
    });
    fighters.addEventListener('click', ev => {
      yasuo();
    });
    mages.addEventListener('click', ev => {
      lux();
    });
    marksmen.addEventListener('click', ev => {
      jinx();
    });
    supports.addEventListener('click', ev => {
      thresh();
    });
    tanks.addEventListener('click', ev => {
      leona();
    });

    function boucle(){
      if (timer == 0){
        switch (last) {
          case 'akali':
            yasuo();
            last = "yasuo";
            break;
          case 'yasuo':
            lux();
            last = "lux";
            break;
          case 'lux':
            jinx();
            last = "jinx";
            break;
          case 'jinx':
            thresh();
            last = "thresh";
            break;
          case 'thresh':
            leona();
            last = "leona";
            break;
          case 'leona':
            akali();
            last = "akali";
            break;
        }
      }
      timer--;
      setTimeout(function () {
        boucle();
      }, 1000);
    }
    boucle();

    function akali(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/akali/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "akali"
        champdescrip.innerHTML = "THE ROGUE ASSASSIN"
      }, 1000);
      assassin.classList.add("select");
      fighters.classList.remove("select");
      mages.classList.remove("select");
      marksmen.classList.remove("select");
      supports.classList.remove("select");
      tanks.classList.remove("select");
    }
    function yasuo(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/yasuo/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "yasuo"
        champdescrip.innerHTML = "the unforgiven"
      }, 1000);
      assassin.classList.remove("select");
      fighters.classList.add("select");
      mages.classList.remove("select");
      marksmen.classList.remove("select");
      supports.classList.remove("select");
      tanks.classList.remove("select");
    }
    function lux(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/lux/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "lux"
        champdescrip.innerHTML = "the lady of luminosity"
      }, 1000);
      assassin.classList.remove("select");
      fighters.classList.remove("select");
      mages.classList.add("select");
      marksmen.classList.remove("select");
      supports.classList.remove("select");
      tanks.classList.remove("select");
    }
    function jinx(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/jinx/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "jinx"
        champdescrip.innerHTML = "the loose cannon"
      }, 1000);
      assassin.classList.remove("select");
      fighters.classList.remove("select");
      mages.classList.remove("select");
      marksmen.classList.add("select");
      supports.classList.remove("select");
      tanks.classList.remove("select");
    }
    function thresh(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/thresh/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "thresh"
        champdescrip.innerHTML = "the chain warden"
      }, 1000);
      supports.classList.remove("select");
      fighters.classList.remove("select");
      mages.classList.remove("select");
      marksmen.classList.remove("select");
      supports.classList.add("select");
      tanks.classList.remove("select");
    }
    function leona(){
      timer = timing
      championimg.style.transition = "2s";
      championimg.style.clipPath = "polygon(200% 0%, 0% 200%, 100% 200%)";
      setTimeout(function () {
        championimg.src = "../images/champions/leona/main.png"
        championimg.style.clipPath = "polygon(0% 0%, 200% 0%, 0% 200%)";
        champname.innerHTML = "leona"
        champdescrip.innerHTML = "the radiant dawn"
      }, 1000);
      assassin.classList.remove("select");
      fighters.classList.remove("select");
      mages.classList.remove("select");
      marksmen.classList.remove("select");
      supports.classList.remove("select");
      tanks.classList.add("select");
    }
  }

});
