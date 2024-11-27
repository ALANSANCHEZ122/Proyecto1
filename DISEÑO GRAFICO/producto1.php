<?php 
$pageTitle = "Producto 1 - Caja de Cereal 3D - Nestlé"; 
include 'header.php'; 
?>

<!-- Carrusel -->
<div class="carousel">
    <div class="carousel-container">
        <div class="carousel-slide"><img src="img/chocapic.jpg" alt="Caja de Cereal 1"></div>
        <div class="carousel-slide"><img src="img/cereal1.jpg" alt="Caja de Cereal 2"></div>
        <div class="carousel-slide"><img src="img/cereal2.jpg" alt="Caja de Cereal 3"></div>
    </div>
    <button class="carousel-prev">&lt;</button>
    <button class="carousel-next">&gt;</button>
    <button class="carousel-autoplay">Auto</button>
</div>

<!-- Contenedor de la caja de cereal -->
<div class="cereal-container">
    <div class="cereal-box">
        <div class="front">
            <img class="cj" src="img/Lion.png" alt="Logo de Nestlé">
            <div class="shine"></div>
        </div>
        <div class="side"></div>
        <div class="top"></div>
        <div class="label label1">Delicioso y Nutritivo</div>
        <div class="label label2">Ideal para el Desayuno</div>
    </div>
    <div class="cereal-bar">
        <div class="label-color label3"></div> <!-- Etiqueta 1 -->
        <div class="label-color label4"></div> <!-- Etiqueta 2 -->
    </div>
</div>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #e6f2ff;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Estilos del contenedor de la caja y la barra */
    .cereal-container {
        display: flex;
        align-items: flex-start; /* Alinea la barra y la caja */
        margin-top: 20px;
    }

    /* Estilos para la caja de cereal */
    .cereal-box {
        position: relative;
        width: 200px;
        height: 300px;
        background-color: #3b1f0e; /* Color marrón oscuro */
        border: 2px solid #d49a00; /* Borde de la caja */
        border-radius: 10px;
        margin-right: 5px; /* Reduce el margen entre la caja y la barra */
        overflow: hidden;
        transform-style: preserve-3d;
        perspective: 1000px;

        /* Sombra y luz */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 0 5px rgba(255, 255, 255, 0.5); /* Sombra y resplandor */
    }

    .cereal-bar {
        width: 30px; /* Ancho de la barra */
        height: 300px; /* Altura de la barra */
        background-color: #3b1f0e; /* Color marrón claro para la barra */
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2), 0 0 5px rgba(255, 255, 255, 0.5); /* Sombra y resplandor */
        margin-left: -5px; /* Acerca la barra a la caja */
        position: relative; /* Para posicionar las etiquetas */
        display: flex;
        flex-direction: column; /* Para apilar las etiquetas */
        justify-content: center; /* Centra verticalmente */
        align-items: center; /* Centra horizontalmente */
    }

    /* Estilos para las etiquetas blancas */
    .label-color{
        width: 80%; /* Ancho de la etiqueta */
        height: 40px; /* Altura de la etiqueta */
        background-color: #ffffff; /* Color blanco */
        border-radius: 5px; /* Esquinas redondeadas */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Sombra */
        display: flex;
        justify-content: center; /* Centra el texto horizontalmente */
        align-items: center; /* Centra el texto verticalmente */
        margin: 40px 0; /* Espacio entre las etiquetas */
        font-weight: bold;
        color: #000; /* Color del texto */
    }

    .label1 {
        margin-top: 20px; /* Ajusta la posición de la etiqueta 1 hacia arriba */
    }

    .label2 {
        margin-bottom: 20px; /* Ajusta la posición de la etiqueta 2 hacia abajo */
    }

    /* Estilos para las etiquetas de texto */
    .label {
        position: absolute;
        padding: 5px;
        color: #fff;
        font-weight: bold;
        border-radius: 5px;
        z-index: 1;
    }

    .label1 {
        background-color: red; /* Color verde */
        top: 20px; /* Ajusta la posición según sea necesario */
        left: 10px;
    }

    .label2 {
        background-color: blue; /* Color azul */
        bottom: 20px; /* Ajusta la posición según sea necesario */
        left: 10px;
    }

    .front {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #3b1f0e; /* Color frontal igual al de la caja */
        border-radius: 10px;
        display: flex;
        justify-content: center; /* Centra el contenido horizontalmente */
        align-items: center; /* Centra el contenido verticalmente */
        font-size: 24px;
        font-weight: bold;
        color: #fff;
        border: 2px solid #d49a00;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
        backface-visibility: hidden;
    }

    .cj {
        max-width: 120px; /* Ajusta el tamaño del logo */
        height: auto; /* Mantiene la proporción */
    }

    .shine {
        position: absolute;
        top: -20px;
        left: -20px;
        width: 100%;
        height: 100%;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
        border-radius: 10px;
        pointer-events: none;
        animation: shine 1.5s infinite;
    }

    @keyframes shine {
        0% { top: -20px; left: -20px; }
        50% { top: 20px; left: 20px; }
        100% { top: -20px; left: -20px; }
    }

    .side {
        position: absolute;
        width: 50px;
        height: 100%;
        background-color: #ffb000; /* Color lateral */
        border: 2px solid #d49a00; 
        top: 0;
        left: 200px;
        backface-visibility: hidden;
        border-radius: 5px;
    }

    .top {
        position: absolute;
        width: 100%;
        height: 50px;
        background-color: #ff9900; /* Color de la parte superior */
        border: 2px solid #d49a00; 
        top: -50px;
        left: 0;
        backface-visibility: hidden;
        border-radius: 5px;
    }

    /* Resto de los estilos existentes (carrusel, sombra, etc.) */
    /* ... (tu CSS existente aquí) ... */
</style>


<script>
    let index = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;
    let autoPlayInterval;
    const autoPlayButton = document.querySelector('.carousel-autoplay');

    document.querySelector('.carousel-next').addEventListener('click', () => {
        index = (index + 1) % totalSlides;
        updateCarousel();
    });

    document.querySelector('.carousel-prev').addEventListener('click', () => {
        index = (index - 1 + totalSlides) % totalSlides;
        updateCarousel();
    });

    autoPlayButton.addEventListener('click', () => {
        if (autoPlayButton.classList.contains('active')) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });

    function updateCarousel() {
        document.querySelector('.carousel-container').style.transform = `translateX(-${index * 100}%)`;
    }

    function startAutoPlay() {
        autoPlayButton.classList.add('active');
        autoPlayButton.textContent = 'Stop';
        autoPlayInterval = setInterval(() => {
            index = (index + 1) % totalSlides;
            updateCarousel();
        }, 3000); // Cambia cada 3 segundos
    }

    function stopAutoPlay() {
        autoPlayButton.classList.remove('active');
        autoPlayButton.textContent = 'Auto';
        clearInterval(autoPlayInterval);
    }
</script>

<?php include 'footer.php';