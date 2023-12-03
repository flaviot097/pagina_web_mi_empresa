const btnborrar = document.querySelectorAll("a.btn.btn-primary.card-carrito");
console.log(btnborrar);

btnborrar.forEach((boton) => {
  boton.addEventListener("click", (e) => {
    console.log(e.target.id);
    const id = e.target.id;

    const metodo = {
      method: "DELETE",
      headers: {},
    };

    fetch(`http://localhost:4000/inicio/${id}`, metodo).then((res) => {
      console.log(res.status);
      const tarjeta = document.getElementById(`${id}`);
      console.log(tarjeta);
      tarjeta.innerHTML = "";
    });
  });
});
