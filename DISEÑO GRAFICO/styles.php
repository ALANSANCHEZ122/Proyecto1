/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background: url('Fondones.jpg') no-repeat center center fixed;
    background-size: cover;
    padding-top: 70px; /* Ajustar según la altura del nav fijo */
}

header {
    background-color: #fff;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header .logo {
    max-width: 1400px; /* Se incrementó el ancho máximo del logo */
    height: 350px; /* Se incrementó la altura del banner */
    object-fit: cover; /* Mantener la proporción de la imagen */
}

nav {
    display: flex;
    justify-content: center;
    background: rgba(14, 21, 56, 0.65);
    padding: 10px 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

nav a {
    position: relative;
    width: 250px;
    height: 35px;
    display: inline-block;
    border-radius: 5px;
    margin: 0 10px;
    text-align: center;
    line-height: 35px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 3px;
    overflow: hidden;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

nav a::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #00ccff, #00ccff, #00ccff, #0e1538);
    z-index: -1;
    transition: all 0.5s ease;
    opacity: 0;
}

nav a:hover::before {
    opacity: 1;
    filter: blur(5px);
}

nav a:hover {
    border-color: #00ccff;
}

nav a:active {
    background-color: #00ccff;
    color: #fff;
}

nav a span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 3px;
    background: rgba(14, 21, 56, 0.65);
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

.content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.text-section {
    width: 50%;
    padding-right: 20px;
}

.video-section {
    width: 50%;
}

video {
    width: 90%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Carousel styles */
.carousel {
    position: relative;
    width: 100%;
    max-width: 800px; /* Tamaño máximo para el carrusel */
    margin: auto;
    overflow: hidden;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.carousel-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-slide {
    min-width: 100%;
    box-sizing: border-box;
}

.carousel-slide img {
    width: 100%;
    height: auto;
    display: block;
}

.carousel-prev, .carousel-next {
    position: absolute;
    top: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
    z-index: 1;
}

.carousel-prev {
    left: 10px;
}

.carousel-next {
    right: 10px;
}

/* Estilos para el botón de auto-play */
.carousel-autoplay {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #edb301;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    z-index: 2;
}

.carousel-autoplay.active {
    background-color: #d19c01;
}

/* Estilos para la galería de imágenes */
.image-gallery {
    display: flex;
    overflow: hidden;
    position: relative;
}

.image-gallery img {
    width: 100%;
    border-radius: 10px;
    transition: transform 0.5s ease;
}

.image-gallery img:hover {
    transform: scale(1.1);
}

footer {
    background-color: #d1d1d1; /* Gris medio claro */
    color: white;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
    position: relative;
    width: 100%;
    bottom: 0;
}

footer address {
    margin: 0;
    
}

footer .author {
    color: #fff;
}

.map-container {
    width: 100%;
    margin-top: 20px;
    padding: 0;
}

.contact-form, .map-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    margin-bottom: 20px;
}

.contact-form h2, .map-container h2 {
    color: #edb301;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
}

.contact-form input[type="submit"] {
    background-color: #edb301;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.contact-form input[type="submit"]:hover {
    background-color: #d19c01;
}

.contact-form input[type="submit"]:active {
    background-color: #b48201;
    transform: scale(0.98);
}

/* Estilos para el menú social */
.social-menu {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 10px;
}

.social-menu a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    padding: 5px;
    background-color: #f1f1f1;
    border-radius: 5px;
}

.social-menu a:hover {
    background-color: #ddd;
}

/* Lista de contacto */
.contact-list {
    margin-top: 20px;
    font-size: 16px;
}

.contact-list ul {
    list-style-type: none;
    padding: 0;
}

.contact-list ul li {
    margin-bottom: 10px;
}
