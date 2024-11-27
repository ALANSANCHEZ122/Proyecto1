<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja de Cereal</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        canvas {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <canvas id="cerealBoxCanvas" width="400" height="600"></canvas>

    <script>
        const canvas = document.getElementById('cerealBoxCanvas');
        const ctx = canvas.getContext('2d');

        // Dibuja la caja de cereal (rectángulo)
        ctx.fillStyle = "#FFC107"; // Color amarillo para la caja
        ctx.fillRect(100, 100, 200, 400); // x, y, ancho, alto

        // Dibuja la parte superior de la caja
        ctx.fillStyle = "#FF5722"; // Color naranja para la parte superior
        ctx.fillRect(100, 50, 200, 50);

        // Añade el texto "Cereal"
        ctx.fillStyle = "#FFFFFF";
        ctx.font = "40px Arial";
        ctx.fillText("Cereal", 135, 90);

        // Añade un círculo como símbolo o logo
        ctx.beginPath();
        ctx.arc(200, 300, 50, 0, Math.PI * 2); // x, y, radio, ángulo inicial, ángulo final
        ctx.fillStyle = "#4CAF50"; // Color verde para el círculo
        ctx.fill();

        // Añade el texto dentro del círculo
        ctx.fillStyle = "#FFFFFF";
        ctx.font = "30px Arial";
        ctx.fillText("CJ", 175, 310); // Ajusta la posición del texto dentro del círculo

        // Dibuja líneas que simulan el diseño en la caja
        ctx.strokeStyle = "#795548"; // Color marrón para las líneas
        ctx.lineWidth = 4;
        ctx.beginPath();
        ctx.moveTo(100, 500);
        ctx.lineTo(300, 500);
        ctx.lineTo(250, 550);
        ctx.lineTo(150, 550);
        ctx.closePath();
        ctx.stroke();

    </script>
</body>
</html>