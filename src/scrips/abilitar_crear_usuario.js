document.getElementById("crear-usuario").style.display = "none";

const btnCrear = document.getElementById("btn-crear-usuario");

function mostrarDiv() {
  document.getElementById("logear-usuario").style.display = "none";
  document.getElementById("crear-usuario").style.display = "";
}

btnCrear.addEventListener("click", mostrarDiv);
