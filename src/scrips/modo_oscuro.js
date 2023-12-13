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

if (window.location.toString() === "http://127.0.0.1:5500/servicios.html") {
  divFiltroServicios.classList.toggle("section_servicios-serv");
  tarjetasTodoServicios.classList.toggle("tarjetas-servicios-nuevos");
  formFilter.classList.toggle("filtrado-servicios-form");
  inputFilter.classList.toggle("input-filter-serv");
  btnFiltradoServ.classList.toggle("btn-filtro-serv");
}

function cambioDeTema() {
  if (!sessionStorage.getItem("modo-oscuro")) {
    sessionStorage.setItem("modo-oscuro", "dark-mode");

    botonDarkmode.classList.toggle("color-oscuro");

    if (
      window.location.toString() == "http://localhost/la_verdadera/contacto.php"
    ) {
      const barraContactos = document.querySelector("body");
      const todosServ = document.getElementById("cambiar");
      todosServ.classList.toggle("dark-nav");
      barraContactos.classList.toggle("contacto-dark");
      barranav.classList.toggle("dark-barra");
      nav2.classList.toggle("dark-nav");
      nav3.classList.toggle("dark-nav");
      nav4.classList.toggle("boton-modo-oscuro");
      nav5.classList.toggle("dark-nav");
      logo.classList.toggle("logo-oscuro");
    }

    body.classList.toggle("body-ocuro");
    nav.classList.toggle("dark-nav");
    nav2.classList.toggle("dark-nav");
    nav3.classList.toggle("dark-nav");
    nav4.classList.toggle("boton-modo-oscuro");
    nav5.classList.toggle("dark-nav");
    logo.classList.toggle("logo-oscuro");
    //targetasServicios.classList.toggle("tarjeta-modo-oscuro");
    //targetasServicios.classList.toggle("tarjeta-modo-oscuro");

    if (window.location.toString() === "http://127.0.0.1:5500/servicios.html") {
      navServicios.classList.toggle("dark-barra");
      divFiltroServicios.classList.toggle("section_servicios-serv");
      tarjetasTodoServicios.classList.toggle("tarjetas-servicios-nuevos");
      formFilter.classList.toggle("filtrado-servicios-form");
      inputFilter.classList.toggle("filter-input-oscuro");
      btnFiltradoServ.classList.toggle("btn-filtro-serv");
      serviciosModOscuro.classList.toggle("section_oscuro_servicios");
      //formFilter.classList.toggle("filtrado-servicios-form-ocuro");
      filterServModeDark.classList.toggle("filter-input-oscuro");
      filtModeDarkInputs.classList.toggle("alineado-form");
      textofilto.classList.toggle("alinerar-palabra-filtros");
      btnFiltradoServ.classList.toggle("btn-sev-oscuro-filtrado");
    } else {
      barranav.classList.toggle("dark-barra");
      tipografiaGrande.classList.toggle("dark-nav");
    }
  } else {
    sessionStorage.removeItem("modo-oscuro");
  }
}

botonDarkmode.addEventListener("click", cambioDeTema);
