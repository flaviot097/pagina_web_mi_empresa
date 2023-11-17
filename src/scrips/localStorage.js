const servicios = [
  {
    id: "0",
    nombre_y_apellido: "teodoro ajia",
    categoria_servicio: "plomero",
    descripcion: "saddasdsadsad sadsadsad",
    nombre_servicio: "teordoro el inodoro",
    precio: 32323,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "1",
    nombre_y_apellido: "juan mecanico",
    categoria_servicio: "mecanico",
    descripcion: "saddasdsadsad sadsadsad",
    nombre_servicio: "mecajuan",
    precio: 567,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "2",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "ramires serv",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "3",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "racares",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "4",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "sereje",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "5",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "papes",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "6",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "felev",
    precio: 23467,
    fecha: "2023-11-05T03:00:00.000Z",
  },
  {
    id: "7",
    nombre_y_apellido: "eketencio ramires",
    categoria_servicio: "plomero",
    descripcion: "sagrgrgrgrg",
    nombre_servicio: "raer",
    precio: 1,
    fecha: "2023-11-05T03:00:00.000Z",
  },
];

//const datosLS = window.localStorage;
const divCarro = document.getElementById("div-carro");
console.log(divCarro);

function llenarcarrito() {
  for (i = 0; i < localStorage.length; i++) {
    let idLlave = localStorage.key(i);
    let item = JSON.parse(localStorage.getItem(`${idLlave}`));
    const divServicio = `<div class="card" style="width: 18rem">
        <img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
        <h5 class="card-title">${item.nombre_servicio}</h5>
        <p class="card-text">${item.descripcion}.</p>
        <p class="card-text"><b>$${item.precio}</b></p>
        <a class="btn btn-primary" name="${item.nombre_servicio}" id="${item.id}">X</a>
        </div>
    </div>`;

    divCarro.innerHTML += divServicio;

    console.log(item);
  }
}

llenarcarrito();
//console.log(datosLS["racares"]);
//console.log(localStorage.key(0));
