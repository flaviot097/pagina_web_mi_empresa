if (window.location.href == "http://localhost/la_verdadera/index.php") {
  let numero;
  if (!sessionStorage.getItem("inicio")) {
    numero = 1;
    sessionStorage.setItem("inicio", "se inicio la pagina");
    localStorage.clear();
  }
}
