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

var Bibliografia_B = document.getElementById('bibliografia_B');

Bibliografia_B.addEventListener("click", MOSTRAR_BIBLIOGRAFIA);

function MOSTRAR_BIBLIOGRAFIA() {
  var Bibliografia_Var = document.getElementById('bibliografia');
  console.log(Bibliografia_Var.style.display);
 if (Bibliografia_Var.style.display == 'none') {
   Bibliografia_Var.style.display = 'block';
 }
 else {
   Bibliografia_Var.style.display = 'none';
 }
}
