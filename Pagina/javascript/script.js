document.addEventListener('DOMContentLoaded', function() {
    let btnMenu = document.getElementById('btn-menu');
    let btnCerrar = document.getElementById('btn-cerrar');
    let opciones = document.querySelector('.opciones');
    let colapsado = document.querySelector('.menu-barra');
  
    btnMenu.addEventListener('click', function() {
      opciones.classList.add('show');
      btnCerrar.classList.add('show');
      colapsado.classList.add('show');
    });
  
    btnCerrar.addEventListener('click', function() {
      opciones.classList.remove('show');
      btnCerrar.classList.remove('show');
      colapsado.classList.remove('show');
    });
  });

  document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    let mensajeExito = document.getElementById('mensaje-exito');
    mensajeExito.classList.add('show');
  });
  
