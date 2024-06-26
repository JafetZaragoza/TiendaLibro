function mostrar(mostrarId, ocultarId) {
    var mostrarElemento = document.getElementById(mostrarId).querySelector('form');
    var ocultarElemento = document.getElementById(ocultarId).querySelector('form');

    if (mostrarElemento.style.display === "none" || !mostrarElemento.style.display) {
        mostrarElemento.style.display = "block";
        ocultarElemento.style.display = "none";
    } else {
        mostrarElemento.style.display = "none";
    }
}

function regresar() {
    window.history.back();
}
