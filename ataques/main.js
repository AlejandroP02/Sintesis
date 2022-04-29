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
  var Form_DDOS = document.getElementByClass('F-DDOS');
 if (document.getElementByClass('F-DDoS').classList.contains('hidden')) {
   Form_DDOS.querySelectorAll( 'div' )
   .forEach( el => el.classList.remove( 'hidden' ));
 }
 else {
   Form_DDOS.querySelectorAll( 'div' )
   .forEach( el => el.classList.add( 'hidden' ));
 }
}
