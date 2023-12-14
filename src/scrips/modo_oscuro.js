const botonDarkmode = document.getElementById("boton_para_tema_oscuro");
const body = document.querySelector(".cuerpo");
const nav = document.getElementById("cambiar");
const nav2 = document.getElementById("cambiar2");
const nav3 = document.getElementById("cambiar3");
const nav4 = document.getElementById("btn_search");
const nav5 = document.getElementById("cambiar5");
const logo = document.getElementById("logo-mi-empresa");
const tipografiaGrande = document.querySelector("span.mr-2");
const targetasServicios = document.querySelector(".card");
const barranav = document.querySelector(".navbar");
const navServicios = document.querySelector(".navbar");
const divFiltroServicios = document.querySelector(".section_servicios");
const tarjetasTodoServicios = document.querySelector(
  "#contenedor_tarjetas_inicio"
);
const formFilter = document.querySelector("#filtar-servicios");
const inputFilter = document.querySelector("#input-filter");
const btnFiltradoServ = document.querySelector("#btn_filtrado-serv");
const serviciosModOscuro = document.querySelector(".section_servicios");
const filterServModeDark = document.querySelector("#input-filter2");

const filtModeDarkInputs = document.querySelector(
  "form#filtar-servicios.d-flex-col"
);
const textofilto = document.querySelector("#filtros-palabra");

console.log(filterServModeDark);
console.log(botonDarkmode);

if (window.location == "http://localhost/la_verdadera/contacto.php") {
  const barraContactos = document.querySelector("body");
  const todosServ = document.getElementById("cambiar");
  if (sessionStorage.getItem("modo-oscuro") !== "light-mode") {
    todosServ.classList.toggle("dark-nav");
    barraContactos.classList.toggle("contacto-dark");
    barranav.classList.toggle("dark-barra");
    nav2.classList.toggle("dark-nav");
    nav3.classList.toggle("dark-nav");
    nav4.classList.toggle("boton-modo-oscuro");
    nav5.classList.toggle("dark-nav");
    logo.classList.toggle("logo-oscuro");
  } else if (sessionStorage.getItem("modo-oscuro") !== "dark-mode") {
    todosServ.classList.remove("dark-nav");
    barraContactos.classList.remove("contacto-dark");
    barranav.classList.remove("dark-barra");
    nav2.classList.remove("dark-nav");
    nav3.classList.remove("dark-nav");
    nav4.classList.remove("boton-modo-oscuro");
    nav5.classList.remove("dark-nav");
    logo.classList.remove("logo-oscuro");
  }
}

function cambioDeTema() {
  const resp = sessionStorage.getItem("modo-oscuro");
  console.log(resp);
  if (resp === "light-mode") {
    sessionStorage.setItem("modo-oscuro", "dark-mode");
    botonDarkmode.classList.toggle("color-oscuro");
    body.classList.toggle("body-ocuro");
    nav.classList.toggle("dark-nav");
    barranav.classList.toggle("dark-barra");
    nav2.classList.toggle("dark-nav");
    nav3.classList.toggle("dark-nav");
    nav4.classList.toggle("boton-modo-oscuro");
    nav5.classList.toggle("dark-nav");
    logo.classList.toggle("logo-oscuro");
  } else if (resp === "dark-mode") {
    sessionStorage.setItem("modo-oscuro", "light-mode");
    botonDarkmode.classList.remove("color-oscuro");
    body.classList.remove("body-ocuro");
    nav.classList.remove("dark-nav");
    barranav.classList.remove("dark-barra");
    nav2.classList.remove("dark-nav");
    nav3.classList.remove("dark-nav");
    nav4.classList.remove("boton-modo-oscuro");
    nav5.classList.remove("dark-nav");
    logo.classList.remove("logo-oscuro");
  }
}

botonDarkmode.addEventListener("click", cambioDeTema);

const resp = sessionStorage.getItem("modo-oscuro");
console.log(resp);
if (resp === "dark-mode") {
  sessionStorage.setItem("modo-oscuro", "dark-mode");
  botonDarkmode.classList.toggle("color-oscuro");
  body.classList.toggle("body-ocuro");
  nav.classList.toggle("dark-nav");
  barranav.classList.toggle("dark-barra");
  nav2.classList.toggle("dark-nav");
  nav3.classList.toggle("dark-nav");
  nav4.classList.toggle("boton-modo-oscuro");
  nav5.classList.toggle("dark-nav");
  logo.classList.toggle("logo-oscuro");
}
