const divCarrrito = document.querySelector("#section-carrito");

if (localStorage.length !== 0) {
  const imagen = document.querySelector(".bolsa-de-compras");
  const texto = document.querySelector(".contenedor-descubrir-productos");

  imagen.remove();
  texto.remove();

  divCarrrito.classList.toggle(".divcarrito-lleno");
  console.log("carro con articulos");
}
