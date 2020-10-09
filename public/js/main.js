window.addEventListener("DOMContentLoaded", (event) => {
  var closePopup = document.querySelectorAll('.popup .quite');
  var popup1 = document.querySelector('.signIn');
  var popup2 = document.querySelector('.logIn');
  var popup3 = document.querySelector('.delete');
  var inscription = document.querySelector('.button #register');
  var connection = document.querySelector('.button #login');
  var deleteCancel = document.querySelector('#canceldelete');
  var deleteAcount = document.querySelector('#deleteAcount');

  if (closePopup){
    closePopup.forEach((item, i) => {
      item.addEventListener('click', ev => {
        if (popup1){ popup1.style.display = "none"; }
        if (popup2){ popup2.style.display = "none"; }
        if (popup3){ popup3.style.display = "none"; }
      });
    });
  }

  if (inscription){
    inscription.addEventListener('click', ev => {
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
});
