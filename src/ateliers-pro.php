<?php include 'includes/header.php'; ?>

<!-- Ateliers Professionnels -->
<section id="ateliers" class="ateliers-section py-5">
    <!-- Particles.js Background -->
    <div id="particles-js-ateliers" class="particles-container"></div>
    
    <div class="container">
        <div class="ateliers-hero fade-in">
            <h2>Ateliers Professionnels</h2>
            <p>Découvrez les projets pratiques réalisés dans le cadre de ma formation BTS SIO option SISR. Ces ateliers m'ont permis de développer des compétences techniques et d'appliquer les connaissances acquises en cours.</p>
            
            <div class="ateliers-categories">
                <button class="category-btn active" data-category="all">Tous</button>
                <button class="category-btn" data-category="infrastructure">Infrastructure</button>
                <button class="category-btn" data-category="securite">Sécurité</button>
                <button class="category-btn" data-category="reseau">Réseau</button>
                <button class="category-btn" data-category="systeme">Système</button>
                <button class="category-btn" data-category="services">Services</button>
            </div>
        </div>
        
        <div class="ateliers-grid">
            <!-- Infrastructure réseau sécurisée -->
            <div class="atelier-card fade-in" data-category="infrastructure" style="animation-delay: 0.1s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-network-wired"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Infrastructure réseau sécurisée</h3>
                    <p class="atelier-description">Conception et mise en place d'une infrastructure réseau sécurisée pour une entreprise fictive, incluant la segmentation réseau, les VLANs et les politiques de sécurité.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Infrastructure</span>
                        <span class="atelier-tag">Sécurité</span>
                        <span class="atelier-tag">Réseau</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/infrastructure.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sauvegarde Backuppc -->
            <div class="atelier-card fade-in" data-category="systeme" style="animation-delay: 0.2s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-save"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Sauvegarde Backuppc</h3>
                    <p class="atelier-description">Mise en place d'une solution de sauvegarde centralisée avec BackupPC pour sécuriser les données d'une organisation et permettre leur restauration en cas d'incident.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Système</span>
                        <span class="atelier-tag">Sauvegarde</span>
                        <span class="atelier-tag">Linux</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/backuppc.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Rescuezilla -->
            <div class="atelier-card fade-in" data-category="systeme" style="animation-delay: 0.3s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-life-ring"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Rescuezilla</h3>
                    <p class="atelier-description">Utilisation de Rescuezilla pour la création d'images système et la restauration de données en cas de défaillance matérielle ou logicielle.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Système</span>
                        <span class="atelier-tag">Récupération</span>
                        <span class="atelier-tag">Sauvegarde</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/rescuezilla.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- GPG -->
            <div class="atelier-card fade-in" data-category="securite" style="animation-delay: 0.4s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-key"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">GPG</h3>
                    <p class="atelier-description">Implémentation de GPG (GNU Privacy Guard) pour le chiffrement et la signature de données sensibles, assurant leur confidentialité et leur intégrité.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Sécurité</span>
                        <span class="atelier-tag">Cryptographie</span>
                        <span class="atelier-tag">Confidentialité</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/gpg.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- MFA -->
            <div class="atelier-card fade-in" data-category="securite" style="animation-delay: 0.5s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-fingerprint"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">MFA</h3>
                    <p class="atelier-description">Mise en place de l'authentification multi-facteurs (MFA) pour renforcer la sécurité des accès aux systèmes d'information et réduire les risques d'intrusion.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Sécurité</span>
                        <span class="atelier-tag">Authentification</span>
                        <span class="atelier-tag">Identité</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/mfa.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Base de donnée -->
            <div class="atelier-card fade-in" data-category="services" style="animation-delay: 0.6s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-database"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Base de données</h3>
                    <p class="atelier-description">Installation, configuration et sécurisation d'un serveur de base de données pour stocker et gérer les informations d'une application métier.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Services</span>
                        <span class="atelier-tag">SQL</span>
                        <span class="atelier-tag">Stockage</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/database.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- DHCP -->
            <div class="atelier-card fade-in" data-category="reseau" style="animation-delay: 0.7s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-ethernet"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">DHCP</h3>
                    <p class="atelier-description">Configuration d'un serveur DHCP pour l'attribution automatique d'adresses IP aux équipements du réseau, incluant des réservations et des options avancées.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Réseau</span>
                        <span class="atelier-tag">Services</span>
                        <span class="atelier-tag">Configuration</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/dhcp.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bind -->
            <div class="atelier-card fade-in" data-category="reseau" style="animation-delay: 0.8s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-sitemap"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Bind</h3>
                    <p class="atelier-description">Mise en place d'un serveur DNS avec Bind pour la résolution de noms dans un réseau local et la gestion des zones DNS internes et externes.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Réseau</span>
                        <span class="atelier-tag">DNS</span>
                        <span class="atelier-tag">Services</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/bind.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- HTTP -->
            <div class="atelier-card fade-in" data-category="services" style="animation-delay: 0.9s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-globe"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">HTTP</h3>
                    <p class="atelier-description">Installation et configuration d'un serveur web Apache pour l'hébergement de sites et d'applications web, avec mise en place de l'HTTPS et des règles de sécurité.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Services</span>
                        <span class="atelier-tag">Web</span>
                        <span class="atelier-tag">Apache</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/http.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- FTP -->
            <div class="atelier-card fade-in" data-category="services" style="animation-delay: 1s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-file-upload"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">FTP</h3>
                    <p class="atelier-description">Déploiement d'un serveur FTP sécurisé pour le transfert de fichiers, avec gestion des utilisateurs, des droits d'accès et du chiffrement des communications.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Services</span>
                        <span class="atelier-tag">Transfert</span>
                        <span class="atelier-tag">Sécurité</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/ftp.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Samba -->
            <div class="atelier-card fade-in" data-category="services" style="animation-delay: 1.1s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-folder-open"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Samba</h3>
                    <p class="atelier-description">Configuration d'un serveur de fichiers Samba pour le partage de ressources entre systèmes Windows et Linux, avec gestion des permissions et de l'authentification.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Services</span>
                        <span class="atelier-tag">Partage</span>
                        <span class="atelier-tag">Interopérabilité</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/samba.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- OPNSense -->
            <div class="atelier-card fade-in" data-category="securite" style="animation-delay: 1.2s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-shield-alt"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">OPNSense</h3>
                    <p class="atelier-description">Mise en place d'un pare-feu OPNSense pour sécuriser le réseau d'une organisation, avec configuration des règles de filtrage, VPN et détection d'intrusion.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Sécurité</span>
                        <span class="atelier-tag">Pare-feu</span>
                        <span class="atelier-tag">Infrastructure</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/opnsense.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Fail2ban -->
            <div class="atelier-card fade-in" data-category="securite" style="animation-delay: 1.3s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-ban"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Fail2ban</h3>
                    <p class="atelier-description">Implémentation de Fail2ban pour protéger les serveurs contre les tentatives d'intrusion par force brute, avec configuration de règles personnalisées et monitoring.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Sécurité</span>
                        <span class="atelier-tag">Protection</span>
                        <span class="atelier-tag">Linux</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/fail2ban.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Windows-Server -->
            <div class="atelier-card fade-in" data-category="systeme" style="animation-delay: 1.4s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fab fa-windows"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Windows Server</h3>
                    <p class="atelier-description">Déploiement et administration d'un environnement Windows Server avec Active Directory, stratégies de groupe et services de domaine pour une gestion centralisée des ressources.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Système</span>
                        <span class="atelier-tag">Windows</span>
                        <span class="atelier-tag">Administration</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/windows-server.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zabbix -->
            <div class="atelier-card fade-in" data-category="infrastructure" style="animation-delay: 1.5s;">
                <div class="atelier-header">
                    <div class="atelier-icon-wrapper">
                        <i class="atelier-icon fas fa-chart-line"></i>
                    </div>
                </div>
                <div class="atelier-body">
                    <h3 class="atelier-title">Zabbix</h3>
                    <p class="atelier-description">Mise en place d'une solution de surveillance d'infrastructure avec Zabbix pour le monitoring en temps réel des serveurs, réseaux et applications avec alertes et tableaux de bord personnalisés.</p>
                    <div class="atelier-tags">
                        <span class="atelier-tag">Infrastructure</span>
                        <span class="atelier-tag">Monitoring</span>
                        <span class="atelier-tag">Système</span>
                    </div>
                    <div class="atelier-footer">
                        <a href="rapports/zabbix.pdf" class="atelier-btn" target="_blank">
                            <i class="fas fa-file-pdf"></i>
                            Voir le rapport
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-8 mx-auto text-center fade-in">
                <div class="info-box">
                    <h3><i class="fas fa-info-circle me-2"></i>À propos des ateliers professionnels</h3>
                    <p>Les ateliers professionnels sont des projets pratiques réalisés dans le cadre de ma formation BTS SIO option SISR. Ils m'ont permis de mettre en application les connaissances théoriques acquises en cours et de développer des compétences techniques essentielles pour mon futur métier.</p>
                    <p>Chaque atelier est documenté dans un rapport détaillé qui présente la problématique, la méthodologie, les solutions techniques mises en œuvre et les résultats obtenus. Ces rapports sont disponibles en téléchargement au format PDF.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
