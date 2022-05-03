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

function kill () {
  // (B1) GET FORM DATA
  var data = new FormData(document.getElementById("kill"));

  // (B2) FETCH
  fetch("scripts.php", { method: "POST", body: data })
  .then(res => res.text())
  .then((txt) => {
    console.log(txt);
  })
  .catch((err) => { console.error(err); });
  return false;
}
