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
  console.log(Form_DDOS.style.display);
 if (Form_DDOS.style.display == 'none') {
   Form_DDOS.style.display = 'block';
 } else {
      Form_DDOS.style.display = 'none';
 }


}
