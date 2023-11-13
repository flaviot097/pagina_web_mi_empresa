const login = document.querySelector(".card-login");

const createcard = document.querySelector(".card-login-create");

console.log(login);

const btnCrearUsuario = document.querySelector("#btn-crear-usuario");
const displayCartas = (login.style.display = "block");

const ruta = "http://127.0.0.1:5500/login.html";

console.log(login.style.display);

function cambiarDiv() {
  login.style.display = "none";
  createcard.style.display = "block";
}

btnCrearUsuario.addEventListener("Click", cambiarDiv());

//card - login - ocultar.card - login - create - mostrar;
