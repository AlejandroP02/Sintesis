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

var CARGA = document.getElementById('carga');

CARGA.addEventListener("click", cargar);

function cargar() {
  var Cargar_NMAP = document.getElementById('loader');
  console.log(Cargar_NMAP.style.display);
 if (Cargar_NMAP.style.display == 'none') {
   Cargar_NMAP.style.display = 'block';
   ocultarEnvio();
 }
}

var NMAP = document.getElementById('NMAP');

NMAP.addEventListener("click", ataque_NMAP);

function ataque_NMAP() {
  ocultarFormularios();
  var Form_NMAP = document.getElementById('F-NMAP');
  console.log(Form_NMAP.style.display);
 if (Form_NMAP.style.display == 'none') {
   Form_NMAP.style.display = 'block';
 }
}


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

ARPSPOOFING.addEventListener("click", ataque_ARPSPOOFING);

function ataque_ARPSPOOFING() {
  ocultarFormularios();
  var Form_ARPSPOOFING = document.getElementById('F-ARPSPOOFING');
  console.log(Form_ARPSPOOFING.style.display);
 if (Form_ARPSPOOFING.style.display == 'none') {
   Form_ARPSPOOFING.style.display = 'block';
 }
}

var DNSSPOOFING = document.getElementById('DNSSPOOFING');

DNSSPOOFING.addEventListener("click", ataque_DNSSPOOFING);

function ataque_DNSSPOOFING() {
  ocultarFormularios();
  var Form_DNSSPOOFING = document.getElementById('F-DNSSPOOFING');
  console.log(Form_DNSSPOOFING.style.display);
 if (Form_DNSSPOOFING.style.display == 'none') {
   Form_DNSSPOOFING.style.display = 'block';
 }
}

var SMURF = document.getElementById('SMURF');

SMURF.addEventListener("click", ataque_SMURF);

function ataque_SMURF() {
  ocultarFormularios();
  var Form_SMURF = document.getElementById('F-SMURF');
  console.log(Form_SMURF.style.display);
 if (Form_SMURF.style.display == 'none') {
   Form_SMURF.style.display = 'block';
 }
}

function ocultarFormularios() {

  var Form_NMAP = document.getElementById('F-NMAP');
  Form_NMAP.style.display = 'none';
  var Form_DDOS = document.getElementById('F-DDOS');
  Form_DDOS.style.display = 'none';
  var Form_ARPSPOOFING = document.getElementById('F-ARPSPOOFING');
  Form_ARPSPOOFING.style.display = 'none';
  var Form_DNSSPOOFING = document.getElementById('F-DNSSPOOFING');
  Form_DNSSPOOFING.style.display = 'none';
  var Form_SMURF = document.getElementById('F-SMURF');
  Form_SMURF.style.display = 'none';
}
function ocultarEnvio(){
  var Cargar_NMAP = document.getElementById('carga');
  Cargar_NMAP.style.display = 'none';
}
function envioNMAP() {
  var Enviar_NMAP = document.getElementById('carga');
  Enviar_NMAP.style.display = 'block';
 }
