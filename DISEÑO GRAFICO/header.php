<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Estilos específicos para el carrusel */
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
        
        /* Estilos para la galería */
        .galeria {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .contenedor {
            position: relative;
            width: 400px;
            height: 400px;
            cursor: pointer;
            margin: 20px;
            overflow: hidden;
        }

        .imagen {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.2s ease;
        }

        .texto-superior, .texto-inferior {
            position: absolute;
            left: 0;
            width: 100%;
            color: white;
            font-size: 18px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .texto-superior {
            top: 10px; /* Posiciona el texto en la parte superior */
        }

        .texto-inferior {
            bottom: 10px; /* Posiciona el texto en la parte inferior */
        }

        .contenedor:hover .imagen {
            transform: scale(2.1); /* Tamaño de zoom */
        }

        .contenedor:hover .texto-superior,
        .contenedor:hover .texto-inferior {
            opacity: 1;
        }

        /* Estilos para el menú social y el menú desplegable */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
            z-index: 1000;
        }

        nav a {
            color: white;
            padding: 0.5rem 1rem;
            display: inline-block;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #575757;
        }

        .menu-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: left;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #575757;
        }

        .menu-dropdown:hover .dropdown-content {
            display: block;
        }
        /* Estilos para los iconos de redes sociales */
footer .social-menu a {
    color: white;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
}

footer .social-menu a i {
    margin-right: 8px;
}

/* Colores específicos para cada red social */
footer .social-menu .whatsapp {
    color: #25D366; /* Color de WhatsApp */
}

footer .social-menu .tiktok {
    color: #000000; /* Color de TikTok */
}

footer .social-menu .facebook {
    color: #4267B2; /* Color de Facebook */
}

footer .social-menu .instagram {
    color: #E1306C; /* Color de Instagram */
}

/* Efecto hover */
footer .social-menu a:hover {
    opacity: 0.8;
}
    </style>
</head>
<body>
<header>
        <img src="img/logohr.jpg" high="500" alt="Logo de Nestlé" class="logo">
    </header>
    <nav>
        <a href="inicio.php"><span>Inicio</span></a>
        <a href="quienes.php"><span>Quiénes Somos</span></a>
        <a href="contactos.php"><span>Contactos</span></a>
        <a href="fotos.php"><span>Galería</span></a>
                <!-- Añade más productos según sea necesario -->
            </div>
        </div>
    </nav>
    