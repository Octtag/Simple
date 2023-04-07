<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
?>

<main>
    <section class="event-info">
        <img src="http://localhost/login/asset/img/carrusel/IMG_0785.jpg" alt="Foto del Evento">
        <h1>Carnavales de hasenkamp</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, numquam maxime quas necessitatibus aperiam optio in obcaecati laudantium voluptatum atque quisquam neque veniam architecto blanditiis saepe dolorum. Neque, saepe expedita?</p>
        <p>Fecha de inicio: </p>
    </section>
    <section class="ticket-form">
        <h2>Comprar Ticket</h2>
        <form action="procesar_compra.php" method="post">
            <label for="entradas">Número de Entradas:</label>
            <input type="number" id="entradas" name="entradas" min="1" max="10">
            <input type="submit" value="Comprar">
        </form>
    </section>
</main>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>