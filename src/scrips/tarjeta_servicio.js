const tarjeta = document.querySelector("#contenedor_tarjeta_seleccionada");

const datos = JSON.parse(localStorage.getItem("servicio"));

/// consulto el servicio por id

const div = `<div class="card-servicio">
<img src="./img/car-wash-1619823_1280.jpg" class="card-img-top serv" alt="..." />
<div class="card-body">
<h5 class="card-title">${datos.nombre_servicio}</h5>
<p class="card-text">${datos.descripcion}</p>
<p class="card-text"><b>Precio: $${datos.precio}</b></p>
</div>
</div>
<a class="btn btn-primary serv" name="${datos.nombre_servicio}" id="${datos.id}">🛒</a> `;

tarjeta.innerHTML += div;

const botonComprar = document.querySelector("a.btn.btn-primary");

console.log(botonComprar);
botonComprar.addEventListener("click", () => {
  localStorage.setItem(`${datos.nombre_servicio}`, JSON.stringify(datos));
});

localStorage.removeItem("servicio");
