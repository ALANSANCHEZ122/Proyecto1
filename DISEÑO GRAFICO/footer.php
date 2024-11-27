<!-- footer.php -->
<footer>
    <div class="social-menu">
        <a href="https://wa.me/tu_numero_de_whatsapp" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="https://www.tiktok.com/@tu_usuario_de_tiktok" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i> TikTok</a>
        <a href="https://www.facebook.com/tu_pagina_de_facebook" target="_blank" class="facebook"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="https://www.instagram.com/tu_usuario_de_instagram" target="_blank" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
    <address>
        <small>
            Web realizado por: <span class="author">ALAN FRANCO SANCHEZ SILVA</span><br>
            Copyright © 2023 <br>
            Última actualización: 02 de abril de 2024
        </small>
    </address>
</footer>

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
</body>
</html>