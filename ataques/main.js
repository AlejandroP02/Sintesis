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
var DDOS = document.getElementById('thorhammer');

DDOS.addEventListener("click", ataque_DDOS);

function ataque_DDOS() {
  
}
