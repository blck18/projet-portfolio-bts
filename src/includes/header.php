<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio BTS SIO SISR | NDOUTOUME-BE Joseph Harvey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/bts-sio.css">
    <link rel="stylesheet" href="css/ateliers-pro.css">
    <link rel="stylesheet" href="css/situations-pro.css">
    <link rel="stylesheet" href="css/certifications.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/stages.css">
    <!-- Three.js from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
    <!-- Particles Background Container -->
    <div id="particles-container" class="particles-js"></div>
    
    <!-- Sidebar Menu -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo-3d">
                <i class="fab fa-linux"></i>
                <span class="logo-text">JH</span>
            </div>
            <button class="sidebar-close-btn" id="sidebarCloseBtn">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a class="sidebar-link" href="index.php">
                    <span class="icon-3d"><i class="fas fa-home"></i></span>
                    <span class="nav-text">Accueil</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="profil.php">
                    <span class="icon-3d"><i class="fas fa-user"></i></span>
                    <span class="nav-text">Profil</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="bts-sio.php">
                    <span class="icon-3d"><i class="fas fa-graduation-cap"></i></span>
                    <span class="nav-text">BTS SIO</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="situations-pro.php">
                    <span class="icon-3d"><i class="fas fa-briefcase"></i></span>
                    <span class="nav-text">Situations Pro</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="ateliers-pro.php">
                    <span class="icon-3d"><i class="fas fa-tools"></i></span>
                    <span class="nav-text">Ateliers Pro</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="certifications.php">
                    <span class="icon-3d"><i class="fas fa-certificate"></i></span>
                    <span class="nav-text">Certifications</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="stages.php">
                    <span class="icon-3d"><i class="fas fa-building"></i></span>
                    <span class="nav-text">Stages</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="veille.php">
                    <span class="icon-3d"><i class="fas fa-rss"></i></span>
                    <span class="nav-text">Veille</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="contact.php">
                    <span class="icon-3d"><i class="fas fa-envelope"></i></span>
                    <span class="nav-text">Contact</span>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Horizontal Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <div class="logo-3d">
                    <i class="fab fa-linux"></i>
                    <span class="logo-text">JH</span>
                </div>
            </a>
            <button class="navbar-toggler sidebar-toggle-btn" type="button" id="sidebarToggleBtn">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span class="icon-3d"><i class="fas fa-home"></i></span>
                            <span class="nav-text">Accueil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">
                            <span class="icon-3d"><i class="fas fa-user"></i></span>
                            <span class="nav-text">Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bts-sio.php">
                            <span class="icon-3d"><i class="fas fa-graduation-cap"></i></span>
                            <span class="nav-text">BTS SIO</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="icon-3d"><i class="fas fa-folder-open"></i></span>
                            <span class="nav-text">Plus</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="situations-pro.php">Situations Pro</a></li>
                            <li><a class="dropdown-item" href="ateliers-pro.php">Ateliers Pro</a></li>
                            <li><a class="dropdown-item" href="certifications.php">Certifications</a></li>
                            <li><a class="dropdown-item" href="stages.php">Stages</a></li>
                            <li><a class="dropdown-item" href="veille.php">Veille</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Contenu principal -->
    <main>
