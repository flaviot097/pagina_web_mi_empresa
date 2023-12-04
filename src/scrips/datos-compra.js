const total = document.getElementById("letras-total");
const serv = document.querySelectorAll("h5.card-title");
const btn = document.getElementById("btn-redireccion");

const arreglo = [total.textContent];

serv.forEach((e) => {
  const de = e.textContent;
  arreglo.push(de);
  console.log(arreglo);
});
if (localStorage.length !== 0) {
  btn.style.display = "block";
} else {
  btn.style.display = "none";
}
btn.addEventListener("click", () => {
  localStorage.setItem("articulo", arreglo);
  var arr = JSON.stringify(arreglo);
});

btnform.addEventListener(
  "submit",
  $.ajax({
    url: "../../mercado-pago/api.php",
    type: "POST",
    data: { arr: arr },
    success: function (response) {
      alert(response);
    },
  })
);
