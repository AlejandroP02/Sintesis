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
  ocultarFormularios();
  var Form_DDOS = document.getElementById('F-DDOS');
  console.log(Form_DDOS.style.display);
 if (Form_DDOS.style.display == 'none') {
   Form_DDOS.style.display = 'block';
 }
}

var ATAQUE2 = document.getElementById('ATAQUE2');

ATAQUE2.addEventListener("click", ataque2);

function ataque2() {
  ocultarFormularios();
  var Form_ATAQUE2 = document.getElementById('F-ATAQUE2');
  console.log(Form_ATAQUE2.style.display);
 if (Form_ATAQUE2.style.display == 'none') {
   Form_ATAQUE2.style.display = 'block';
 }
}


function ocultarFormularios() {

  var Form_DDOS = document.getElementById('F-DDOS');
  Form_DDOS.style.display = 'none';
  var Form_ATAQUE2 = document.getElementById('F-ATAQUE2');
  Form_ATAQUE2.style.display = 'none';
}
