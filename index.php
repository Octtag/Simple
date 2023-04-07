<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
?>
<div class="buscador">
    <form class="container-input" action="busqueda.php" method="get">
        <input type="text" placeholder="Encontra el evento que estas buscando..." name="text" class="input">
        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
            <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
        </svg>
    </form>
</div>

<?php if(!empty($_SESSION['usuario'])): ?>
    <h1 class="text-center mt-4 h1Bienve"> ¡ Bienvenido <?= $_SESSION['usuario']?> !</h1>
    <?php else: ?>
        
<?php endif ?>

<div class="Carousel">

    <h2>EVENTOS</h2>

    <div class="slick-list" id="slick-list">
        <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
        </button>
        <div class="slick-track" id="track">
            <div class="slick">
                <div>
                    <a href="http://localhost/login/view/eventos/tickets-carnaval.php">
                        <h4><small>Carnavales de Hasenkamp</small>Compra tu ticket!</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0785.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0786.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0787.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0788.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0789.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0790.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="asset\img\carrusel\IMG_0785.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0785.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0786.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0787.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
            <div class="slick">
                <div>
                    <a href="/">
                        <h4><small>Share Your Message</small>Watch</h4>
                        <picture>
                            <img src="http://localhost/login/asset/img/carrusel/IMG_0788.jpg" alt="Image">
                        </picture>
                        <div class="buy-ticket">Comprar ticket!</div>
                    </a>
                </div>
            </div>
        </div>
        <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
        </button>
    </div>
</div>

<div class="hacerEvento">
    <img src="http://localhost/login/asset/img/STboth.png" alt="logo" srcset="">    
    <h2>VENDE TICKETS SEGUROS Y DE MANERA
         ONLINE DE UNA FORMA UNICA.</h2>
    <button class="shadow__btn">
        Crear mi evento!
    </button>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>





