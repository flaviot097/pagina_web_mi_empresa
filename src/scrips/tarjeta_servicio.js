const tarjeta = document.querySelector("#contenedor_tarjeta_seleccionada");

const datos = JSON.parse(localStorage.getItem("servicio"));

/// consulto el servicio por id

const div = `<div class="card-servicio">
<img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..." />
<div class="card-body">
<h5 class="card-title">${datos.nombre_servicio}</h5>
<p class="card-text">${datos.descripcion}</p>
<p class="card-text"><b>Precio: $${datos.precio}</b></p>
</div>
</div>
<a class="btn btn-primary" name="" id="">🛒</a>`;

tarjeta.innerHTML += div;