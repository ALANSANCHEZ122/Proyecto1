<?php
$pageTitle = 'Nestlé - Fotos de la Empresa';
include 'header.php';
?>

<div class="carousel">
    <button class="carousel-autoplay">Auto</button>
    <div class="colorful-background">
    </div>
    <div class="carousel-container">
        <div class="carousel-slide"><img src="img/tazas2.jpeg" alt="Imagen 1"></div>
        <div class="carousel-slide"><img src="img/poleras.jpg" alt="Imagen 2"></div>
        <div class="carousel-slide"><img src="img/llaveros1.jpeg" alt="Imagen 3"></div>
        <div class="carousel-slide"><img src="img/estampado.jpg" alt="Imagen 4"></div>
    </div>
    <button class="carousel-prev">&lt;</button>
    <button class="carousel-next">&gt;</button>
</div>
<h1>Galería de Imágenes</h1>
<div class="galeria">
    <div class="contenedor">
        <img src="img/planchas.jpg" alt="Nestlé Logo" class="imagen">
        <div class="texto-superior">PLANCHA PARA ESTAMPAR</div>
        <div class="texto-inferior">Utilizamos la plancha para poder estampar diseños</div>
    </div>
    <div class="contenedor">
        <img src="img/maquinas.jpeg" alt="Nestlé Headquarters" class="imagen">
        <div class="texto-superior">Serigrafiadoras</div>
        <div class="texto-inferior">Es una técnica de impresión que permite transferir tinta a través de una malla</div>
    </div>
    <div class="contenedor">
        <img src="img/ploter2.jpeg" alt="Nestlé Products" class="imagen">
        <div class="texto-superior">Plotter</div>
        <div class="texto-inferior">El plotter es una herramienta de impresión muy versátil y se utiliza en una variedad de aplicaciones, tanto industriales como comerciales.</div>
    </div>
    <div class="contenedor">
        <img src="img/pulpo.jpeg" alt="Nestlé Products" class="imagen">
        <div class="texto-superior">Pulpo de Serigrafia</div>
        <div class="texto-inferior">Es una máquina utilizada en la impresión serigráfica que cuenta con varios brazos (generalmente de 4 a 12)</div>
    </div>
</div>

<?php include 'footer.php'; ?>