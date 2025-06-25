// Selecciona el botón por su ID
var botonCambiarTema = document.getElementById("cambiar-tema");

// Verifica si hay un tema guardado en el almacenamiento local
var temaGuardado = localStorage.getItem("tema");

// Aplica el tema guardado si existe
if (temaGuardado) {
  aplicarTema(temaGuardado);
}

// Agrega un evento de clic al botón
botonCambiarTema.addEventListener("click", function () {
  // Obtiene el tema actual
  var temaActual = document.body.classList.contains("dark") ? "light" : "dark";

  // Guarda el tema en el almacenamiento local
  localStorage.setItem("tema", temaActual);

  // Aplica el tema
  aplicarTema(temaActual);
});

// Función para aplicar el tema
function aplicarTema(tema) {
  if (tema === "dark") {
    document.body.classList.add("dark");
    document.querySelector("header").classList.add("dark"); // Agrega la clase "dark" al header
    document.querySelector("footer").classList.add("dark");
  } else {
    document.body.classList.remove("dark");
    document.querySelector("header").classList.remove("dark"); // Remueve la clase "dark" del header
    document.querySelector("footer").classList.remove("dark");
  }

  // Aplica el tema a los elementos dentro del <main>
  var elementosMain = document.querySelectorAll("main *");
  elementosMain.forEach(function (elemento) {
    if (tema === "dark") {
      elemento.classList.add("dark");
    } else {
      elemento.classList.remove("dark");
    }
  });
}
