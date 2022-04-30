fetch("./menu.html")
  .then(response => {
    return response.text()
  })
  .then(data => {
    document.querySelector("menu").innerHTML = data;
  });

  fetch("./footer.html")
    .then(response => {
      return response.text()
    })
    .then(data => {
      document.querySelector("footer").innerHTML = data;
    });

var DDOS = document.getElementById('DDOS');

DDOS.addEventListener("click", ataque_DDOS);

function ataque_DDOS() {
  var Form_DDOS = document.getElementById('F-DDOS');
 if (Form_DDOS.classList.contains('hidden')) {
   Form_DDOS.classList.remove( 'hidden' );
 } else {
   Form_DDOS.classList.add( 'hidden' );
 }

}
