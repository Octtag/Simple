
const formulario = document.querySelector('.datosEvento');
const errores = [];

formulario.addEventListener('submit', function(evento) {
  evento.preventDefault();
  
  const nombreEvento = document.getElementById('nombre-evento');
  const fechaInicio = document.getElementById('fecha-inicio');
  const fechaFin = document.getElementById('fecha-fin');
  const tipoEvento = document.getElementById('tipo-evento');
  const provincia = document.getElementById('provincia');
  const ciudad = document.getElementById('ciudad');
  const codigoPostal = document.getElementById('codigo-postal');
  const direccion = document.getElementById('direccion');
  const instagram = document.getElementById('instagram');
  const facebook = document.getElementById('facebook');
  const photo = document.getElementById('photo');
  const contenedorErr = document.getElementById('errores');

  
  if (nombreEvento.value === '') {
    errores.push('El nombre del evento es obligatorio');
  }
  
  if (fechaInicio.value === '') {
    errores.push('La fecha de inicio del evento es obligatoria');
  }
  
  if (fechaFin.value === '') {
    errores.push('La fecha de finalización del evento es obligatoria');
  }
  
  if (tipoEvento.value === '') {
    errores.push('El tipo de evento es obligatorio');
  }
  
  if (provincia.value === '') {
    errores.push('La provincia es obligatoria');
  }
  
  if (ciudad.value === '') {
    errores.push('La ciudad es obligatoria');
  }
  
  if (codigoPostal.value === '') {
    errores.push('El código postal es obligatorio');
  }
  
  if (direccion.value === '') {
    errores.push('La dirección es obligatoria');
  }
  
  if (instagram.value !== '' && !/^@[a-z\d._-]{2,}$/i.test(instagram.value)) {
    errores.push('La cuenta de Instagram no es válida');
  }
  
  if (facebook.value !== '' && !/^[a-zA-Z\d.-]{2,}$/i.test(facebook.value)) {
    errores.push('La cuenta de Facebook no es válida');
  }
  
  if (photo.value === '') {
    errores.push('Debe cargar una foto del evento');
  }
  
  if (errores.length > 0) {
    contenedorErr.innerText = "Se encontraron estos errores: ";
    contenedorErr.innerText = errores;
    
  } else {
    formulario.submit();
  }
});

function renderizarErrores(listado) {
  const cajaErrores = document.querySelector('#errores');

  // 👇si ya existe la caja la eliminamos del DOM para no multiplicar elementos
  if (cajaErrores) {
      cajaErrores.remove();
  }

  // si el listado no está vacío..
  // creamos la caja con los errores presentes
  if (listado.length > 0) {
      const divTemplate = document.createElement('div');
      divTemplate.setAttribute('id', 'errores');
      divTemplate.style = "background:rgba(255, 0, 0, 0.2);padding:.5em 1em;color: red;margin: .5em 0;";
      listado.forEach(error => {
          divTemplate.innerHTML += `<p><small>${error}</small></p>`
      });

      form.appendChild(divTemplate);
  }
}
