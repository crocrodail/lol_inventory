document.addEventListener("DOMContentLoaded", () => {
  document.querySelector('#recherche').addEventListener('click', ev => {
    var search = document.querySelector('#valueSearch').value;
    console.log(search);
    document.querySelectorAll('.wplp_outside').forEach((item, i) => {
      item.style.display = "none";
      item.querySelectorAll('.insideframe li').forEach((it, y) => {
        if (search != ""){
          console.log(it.textContent.toLowerCase().includes(search.toLowerCase()));
          if (it.textContent.toLowerCase().includes(search.toLowerCase())){
            item.style.display = "block";
            it.style.display = "block";
          } else {
            it.style.display = "none";
          }
        } else {
          item.style.display = "block";
          it.style.display = "block";
        }
      });
    });
  });
});
