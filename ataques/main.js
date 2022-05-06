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

var ARPSPOOFING = document.getElementById('ARPSPOOFING');

ARPSPOOFING.addEventListener("click", ARPSPOOFING);

function ARPSPOOFING() {
  ocultarFormularios();
  var Form_ARPSPOOFING = document.getElementById('F-ARPSPOOFING');
  console.log(Form_ARPSPOOFING.style.display);
 if (Form_ARPSPOOFING.style.display == 'none') {
   Form_ARPSPOOFING.style.display = 'block';
 }
}


function ocultarFormularios() {

  var Form_DDOS = document.getElementById('F-DDOS');
  Form_DDOS.style.display = 'none';
  var Form_ARPSPOOFING = document.getElementById('F-ARPSPOOFING');
  Form_ARPSPOOFING.style.display = 'none';
}
