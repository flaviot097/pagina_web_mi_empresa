const tarjeta = document.querySelector("#contenedor_tarjeta_seleccionada");
import data from "./servicios";

/// consulto el servicio por id

const div = `<div class="card-servicio">
<img src="./img/car-wash-1619823_1280.jpg" class="card-img-top" alt="..." />
<div class="card-body">
<h5 class="card-title">sdfsdfsd</h5>
<p class="card-text">dsfsdfsd</p>
<p class="card-text"><b>$sadsadsa</b></p>
<a class="btn btn-primary" name="" id="">🛒</a>
</div>
</div>`;

tarjeta.innerHTML += div;
