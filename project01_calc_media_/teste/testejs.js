const adicionar = document.getElementById("adicionar");
const ingredientes = document.getElementById("ingredientes");

adicionar.addEventListener("click", function (event) {
  let campo = document.createElement("input");
  campo.name = "ingredientes";
  campo.placeholder = "Ex: Sal";
  ingredientes.appendChild(campo);
});