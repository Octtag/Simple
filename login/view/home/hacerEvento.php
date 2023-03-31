<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
?>

<div class="introFormultario">
    <h2>Completa este simple fomrulario con la informacion de tu evento</h2>

</div>
  
<div class="contenedorForm">
    <form class="datosEvento">
      <label for="nombre-evento">Nombre del evento:</label>
      <input type="text" id="nombre-evento" name="nombre-evento"><br>

      <label for="fecha-inicio">Fecha de inicio del evento:</label>
      <input type="date" id="fecha-inicio" name="fecha-inicio"><br>

      <label for="fecha-fin">Fecha de finalización del evento:</label>
      <input type="date" id="fecha-fin" name="fecha-fin"><br>

      <label for="tipo-evento">Tipo de evento:</label>
      <input type="text" id="tipo-evento" name="tipo-evento"><br>

      <label for="mayores-edad">¿Es para mayores de edad?</label>
      <input type="checkbox" id="mayores-edad" name="mayores-edad"><br>

      <label for="provincia">Provincia:</label>
      <select id="provincia" name="provincia">
        <option value="">Selecciona una provincia</option>
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Catamarca">Catamarca</option>
        <option value="Chaco">Chaco</option>
        <option value="Chubut">Chubut</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Corrientes">Corrientes</option>
        <option value="Entre Ríos">Entre Ríos</option>
        <option value="Formosa">Formosa</option>
        <option value="Jujuy">Jujuy</option>
        <option value="La Pampa">La Pampa</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Mendoza">Mendoza</option>
        <option value="Misiones">Misiones</option>
        <option value="Neuquén">Neuquén</option>
        <option value="Río Negro">Río Negro</option>
        <option value="Salta">Salta</option>
        <option value="San Juan">San Juan</option>
        <option value="San Luis">San Luis</option>
        <option value="Santa Cruz">Santa Cruz</option>
        <option value="Santa Fe">Santa Fe</option>
        <option value="Santiago del Estero">Santiago del Estero</option>
        <option value="Tierra del Fuego">Tierra del Fuego</option>
        <option value="Tucumán">Tucumán</option>
      </select><br>

      <label for="ciudad">Ciudad:</label>
      <input type="text" id="ciudad" name="ciudad"><br>

      <label for="codigo-postal">Código postal:</label>
      <input type="text" id="codigo-postal" name="codigo-postal"><br>

      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion"><br>

      <label for="instagram">Cuenta de Instagram:</label>
      <input type="text" id="direccion" name="direccion"><br>

      <label for="facebook">Cuenta de Facebook:</label>
      <input type="text" id="direccion" name="direccion"><br>

      <label for="photo">Cargar foto del evento:</label>
      <input type="file" name="photo" id="photo"><br>

      <input type="submit" value="Enviar">
    </form>

    <script src=""></script>
</div>