<?php include 'includes/header.php'; ?>

<!-- Profil -->
<section id="profil" class="profile-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 section-title">PROFIL</h2>
        
        <!-- Profile Header -->
        <div class="profile-header mb-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="profile-image-container">
                        <div class="profile-image-wrapper">
                            <img src="images/photo_identite.png" alt="Joseph Harvey NDOUTOUME-BE" class="img-fluid rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="profile-header-info">
                        <h2 class="profile-name">Joseph Harvey NDOUTOUME-BE</h2>
                        <h3 class="profile-title">Étudiant en BTS SIO - Option SISR</h3>
                        <p class="profile-subtitle">Solutions d'Infrastructure, Systèmes et Réseaux</p>
                        
                        <div class="profile-contact-info">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Limoges, France</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>josephharveyn8@gmail.com</span>
                            </div>
                        </div>
                        
                        <div class="profile-social-links">
                            <a href="https://www.linkedin.com/in/joseph-harvey-ndoutoume-be-a3849b279" target="_blank" class="social-link">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/blck18/projet-portfolio-bts" target="_blank" class="social-link">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="mailto:josephharveyn8@gmail.com" class="social-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                        
                        <div class="profile-cv-buttons">
                            <a href="cv/cv.pdf" target="_blank" class="btn btn-outline-primary">
                                <i class="fas fa-eye me-2"></i> Consulter CV
                            </a>
                            <a href="cv/cv.pdf" download class="btn btn-primary">
                                <i class="fas fa-download me-2"></i> Télécharger CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Profile Tabs -->
        <div class="profile-tabs">
            <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">
                        <i class="fas fa-user me-2"></i>À propos
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">
                        <i class="fas fa-code-branch me-2"></i>Compétences
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">
                        <i class="fas fa-graduation-cap me-2"></i>Formation
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="qualities-tab" data-bs-toggle="tab" data-bs-target="#qualities" type="button" role="tab" aria-controls="qualities" aria-selected="false">
                        <i class="fas fa-star me-2"></i>Qualités
                    </button>
                </li>
            </ul>
            
            <div class="tab-content profile-tab-content" id="profileTabsContent">
                <!-- About Tab -->
                <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h4><i class="fas fa-user-circle me-2"></i>À propos de moi</h4>
                        </div>
                        <div class="profile-card-body">
                            <p>Je m'appelle Joseph Harvey NDOUTOUME-BE et je suis passionné par les infrastructures réseau, la cybersécurité et l'administration système. Je suis actuellement en formation BTS Services Informatiques aux Organisations, spécialité Solutions d'Infrastructure, Systèmes et Réseaux (SISR).</p>
                            <p>Mon objectif est de devenir administrateur systèmes et réseaux ou spécialiste en cybersécurité. Je m'intéresse particulièrement à la mise en place d'infrastructures sécurisées, et au pentesting.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Skills Tab -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h4><i class="fas fa-laptop-code me-2"></i>Compétences techniques</h4>
                        </div>
                        <div class="profile-card-body">
                            <!-- Skills Categories -->
                            <div class="skills-accordion accordion" id="skillsAccordion">
                                <!-- Programmation -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingProgramming">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProgramming" aria-expanded="true" aria-controls="collapseProgramming">
                                            <i class="fas fa-code me-2"></i>Programmation
                                        </button>
                                    </h2>
                                    <div id="collapseProgramming" class="accordion-collapse collapse show" aria-labelledby="headingProgramming" data-bs-parent="#skillsAccordion">
                                        <div class="accordion-body">
                                            <div class="skills-grid">
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fab fa-php"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>PHP</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 75%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">75%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fab fa-python"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Python</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 80%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">80%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-database"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>SQL</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 70%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">70%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-terminal"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Bash</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Systèmes et Réseaux -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSystems">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSystems" aria-expanded="false" aria-controls="collapseSystems">
                                            <i class="fas fa-server me-2"></i>Systèmes et Réseaux
                                        </button>
                                    </h2>
                                    <div id="collapseSystems" class="accordion-collapse collapse" aria-labelledby="headingSystems" data-bs-parent="#skillsAccordion">
                                        <div class="accordion-body">
                                            <div class="skills-grid">
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-desktop"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Virtualisation</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 90%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">90%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fab fa-linux"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Linux</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-network-wired"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Protocoles réseaux</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-sitemap"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Configuration réseau</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 80%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">80%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-chart-line"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Analyse de trames</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 75%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">75%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-hdd"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Sauvegarde</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 70%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Cybersécurité -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSecurity">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecurity" aria-expanded="false" aria-controls="collapseSecurity">
                                            <i class="fas fa-shield-alt me-2"></i>Cybersécurité
                                        </button>
                                    </h2>
                                    <div id="collapseSecurity" class="accordion-collapse collapse" aria-labelledby="headingSecurity" data-bs-parent="#skillsAccordion">
                                        <div class="accordion-body">
                                            <div class="skills-grid">
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-lock"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Chiffrement</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 75%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">75%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-key"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Authentification RSA</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-fire"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Pare-feu</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 80%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">80%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-user-shield"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Authentification forte</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-chart-area"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Supervision</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 70%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">70%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-shield-alt"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>OPNsense</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Outils Logiciels -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTools">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTools" aria-expanded="false" aria-controls="collapseTools">
                                            <i class="fas fa-tools me-2"></i>Outils Logiciels
                                        </button>
                                    </h2>
                                    <div id="collapseTools" class="accordion-collapse collapse" aria-labelledby="headingTools" data-bs-parent="#skillsAccordion">
                                        <div class="accordion-body">
                                            <div class="skills-grid">
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-file-alt"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Bureautique</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 90%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">90%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-project-diagram"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Packet Tracer</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-cube"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Virtualisation</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 80%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">80%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-code"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>VS Code / Docker</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 85%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">85%</span>
                                                    </div>
                                                </div>
                                                <div class="skill-card">
                                                    <div class="skill-icon">
                                                        <i class="fas fa-database"></i>
                                                    </div>
                                                    <div class="skill-info">
                                                        <h5>Base de données</h5>
                                                        <div class="skill-bar">
                                                            <div class="skill-progress" style="width: 75%;"></div>
                                                        </div>
                                                        <span class="skill-percentage">75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Education Tab -->
                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h4><i class="fas fa-graduation-cap me-2"></i>Formation</h4>
                        </div>
                        <div class="profile-card-body">
                            <div class="education-timeline">
                                <div class="education-item">
                                    <div class="education-icon">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div class="education-content">
                                        <div class="education-year">2023 - 2025</div>
                                        <h5 class="education-degree">BTS SIO option SISR</h5>
                                        <p class="education-description">Services Informatiques aux Organisations - Solutions d'Infrastructure, Systèmes et Réseaux</p>
                                    </div>
                                </div>
                                <div class="education-item">
                                    <div class="education-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="education-content">
                                        <div class="education-year">2021 - 2023</div>
                                        <h5 class="education-degree">BTS Technico-Commercial</h5>
                                        <p class="education-description">Magnac-Laval</p>
                                    </div>
                                </div>
                                <div class="education-item">
                                    <div class="education-icon">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <div class="education-content">
                                        <div class="education-year">2021</div>
                                        <h5 class="education-degree">Baccalauréat Général série A1</h5>
                                        <p class="education-description">Lycée Mikolongo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Qualities Tab -->
                <div class="tab-pane fade" id="qualities" role="tabpanel" aria-labelledby="qualities-tab">
                    <div class="profile-card">
                        <div class="profile-card-header">
                            <h4><i class="fas fa-star me-2"></i>Qualités personnelles</h4>
                        </div>
                        <div class="profile-card-body">
                            <div class="qualities-container">
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-mountain"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Persévérant</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 90%;"></div>
                                        </div>
                                        <span class="quality-percentage">90%</span>
                                    </div>
                                </div>
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Réactif</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 85%;"></div>
                                        </div>
                                        <span class="quality-percentage">85%</span>
                                    </div>
                                </div>
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-user-cog"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Autonome</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 95%;"></div>
                                        </div>
                                        <span class="quality-percentage">95%</span>
                                    </div>
                                </div>
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-binoculars"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Prise de recul</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 80%;"></div>
                                        </div>
                                        <span class="quality-percentage">80%</span>
                                    </div>
                                </div>
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Gestion du stress</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 75%;"></div>
                                        </div>
                                        <span class="quality-percentage">75%</span>
                                    </div>
                                </div>
                                <div class="quality-item">
                                    <div class="quality-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="quality-info">
                                        <h5>Travail d'équipe</h5>
                                        <div class="quality-bar">
                                            <div class="quality-progress" style="width: 90%;"></div>
                                        </div>
                                        <span class="quality-percentage">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
