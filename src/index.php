<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joseph Harvey NDOUTOUME-BE | Portfolio BTS SIO SISR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section" id="hero">
        <div id="particles-js" class="particles-container"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center hero-content">
                    <h1 class="welcome-title mb-3" data-aos="zoom-in">Bienvenue sur mon portfolio</h1>
                    <h2 class="display-4 mb-4 gradient-text" data-aos="fade-up" data-aos-delay="300">PORTFOLIO BTS SIO</h2>
                    <h3 class="author-name mb-4" data-aos="fade-up" data-aos-delay="400">NDOUTOUME-BE Joseph Harvey</h3>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="500">Services Informatiques aux Organisations - Option SISR</p>
                    <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="700">
                        <a href="profil.php" class="btn btn-outline-primary neon-btn me-3">Voir mon profil</a>
                        <a href="ateliers-pro.php" class="btn btn-primary glow-btn">Mes projets</a>
                    </div>
                    <div class="scroll-indicator-container">
                        <div class="scroll-indicator"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/main.js"></script>
    
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            easing: "ease-in-out",
            once: true
        });
    </script>
</body>
</html>
