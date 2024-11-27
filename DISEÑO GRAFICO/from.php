<?php
$pageTitle = 'Nestlé - Inicio';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario de Diseño Gráfico</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Cuestionario de Necesidades de Diseño Gráfico</h2>
        <form id="designSurvey">
            <label for="proyecto">Tipo de Proyecto de Diseño:</label>
            <select id="proyecto" name="proyecto" required>
                <option value="">Seleccione uno...</option>
                <option value="logotipo">Logotipo</option>
                <option value="identidad">Identidad Corporativa</option>
                <option value="publicidad">Diseño de Publicidad</option>
                <option value="web">Diseño Web</option>
                <option value="promocional">Material Promocional</option>
            </select>

            <label for="estilo">Estilo Preferido:</label>
            <select id="estilo" name="estilo" required>
                <option value="">Seleccione uno...</option>
                <option value="moderno">Moderno</option>
                <option value="clasico">Clásico</option>
                <option value="minimalista">Minimalista</option>
                <option value="creativo">Creativo</option>
            </select>

            <label>Presupuesto Aproximado:</label>
            <input type="number" id="presupuesto" name="presupuesto" min="0" required>

            <label for="plazo">Plazo de Entrega Ideal:</label>
            <select id="plazo" name="plazo" required>
                <option value="">Seleccione uno...</option>
                <option value="menos-1-semana">Menos de 1 semana</option>
                <option value="1-2-semanas">1-2 semanas</option>
                <option value="2-4-semanas">2-4 semanas</option>
                <option value="mas-4-semanas">Más de 4 semanas</option>
            </select>

            <label>¿Tienes ejemplos de diseño?</label>
            <input type="radio" id="ejemploSi" name="ejemplos" value="si" required>
            <label for="ejemploSi">Sí</label>
            <input type="radio" id="ejemploNo" name="ejemplos" value="no">
            <label for="ejemploNo">No</label>

            <label for="descripcion">Descripción Adicional:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <div id="thanksMessage" class="overlay">
        <div class="popup">
            <h2>Gracias por su calificación</h2>
            <button onclick="closePopup()">Volver a la Página Principal</button>
        </div>
    </div>

    <script src="java.js"></script>
</body>
</html>
