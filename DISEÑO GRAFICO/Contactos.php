<?php
$pageTitle = 'Nestlé - Contactos';
include 'header.php';
?>

<div class="container">
    <div class="contact-form">
        <h2>Contáctanos</h2>
        <form id="contactForm" action="#" method="post" onsubmit="return validateForm()">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Introduce tu nombre" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Introduce tu correo electrónico" required>

            <label for="phone">Teléfono:</label>
            <input type="tel" id="phone" name="phone" placeholder="Introduce tu número de teléfono" required>

            <label for="website">Sitio web:</label>
            <input type="url" id="website" name="website" placeholder="Introduce tu sitio web" required>

            <label for="subject">Asunto:</label>
            <input type="text" id="subject" name="subject" placeholder="Introduce el asunto" required>

            <label for="comment">Comentario:</label>
            <textarea id="comment" name="comment" rows="5" placeholder="Introduce tu comentario" required></textarea>

            <input type="submit" value="Enviar">
        </form>
        <p id="warningMessage" style="color:red; display:none;">Por favor, completa todos los campos.</p>
    </div>
</div>

<script>
    function validateForm() {
        var form = document.getElementById("contactForm");
        var warningMessage = document.getElementById("warningMessage");

        // Check if the form is valid
        if (!form.checkValidity()) {
            warningMessage.style.display = "block"; // Show warning message
            return false; // Prevent form submission
        } else {
            warningMessage.style.display = "none"; // Hide warning message
        }
    }
</script>
    
    <div class="contact-info">
        <h2>Información de Contacto</h2>
        <ul>
            <li><strong>Celular:</strong> +54 9 11 1234 5678</li>
            <li><strong>Teléfono:</strong> +54 11 4321 8765</li>
            <li><strong>Fax:</strong> +54 11 9876 5432</li>
        </ul>
    </div>
    
    <div class="map-container">
        <h2>Nuestra Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.3555535104674!2d-68.11657749116422!3d-16.50813811915323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f205ebf665a13%3A0x563f580535075b7f!2sAv.%20Mejillones%2C%20La%20Paz%2C%20Bolivia!5e0!3m2!1ses-419!2sar!4v1731375336696!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php include 'footer.php'; ?>