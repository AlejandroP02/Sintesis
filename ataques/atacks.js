function fetchcall () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("DDOS-form"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
  })
  .catch((err) => { console.error(err); });
  return false;
}

function fetchcall1 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ARPSPOOFING-form"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
  })
  .catch((err) => { console.error(err); });
  return false;
}

function fetchcall2 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("DNSSPOOFING-form"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
  })
  .catch((err) => { console.error(err); });
  return false;
}

function fetchcall3 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("SMURF-form"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
  })
  .catch((err) => { console.error(err); });
  return false;
}

function fetchNMAP () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("NMAP-form"));
  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    alert(txt);
    // var Alerta
    // document.getElementById("resultado").innetHTML(txt);
    document.getElementById("resultado").innerHTML = txt;
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill1 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque1"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill2 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque2"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill3 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque3"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill4 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque4"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill5 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque5"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}

function kill6 () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("ataque6"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
    ocultarFormularios()
  })
  .catch((err) => { console.error(err); });
  return false;
}
