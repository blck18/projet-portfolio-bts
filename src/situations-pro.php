<?php include 'includes/header.php'; ?>

<!-- Situations Professionnelles -->
<section id="situations" class="situations-section py-5">
    <!-- Particles.js Background -->
    <div id="particles-js-situations" class="particles-container"></div>
    
    <div class="container situations-container">
        <div class="situations-hero fade-in">
            <h2>Situations Professionnelles</h2>
            <p>Découvrez les situations professionnelles significatives que j'ai rencontrées durant ma formation BTS SIO option SISR. Ces expériences m'ont permis de développer des compétences techniques et transversales en conditions réelles.</p>
        </div>
        
        <div class="situation-timeline">
            <!-- Situation 1 -->
            <div class="situation-card fade-in" style="animation-delay: 0.1s;">
                <div class="situation-header">
                    <h2>Déploiement d'une solution ELK pour la centralisation des logs</h2>
                    <span class="situation-badge">Entreprise Europe GSB</span>
                </div>
                
                <div class="situation-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="situation-info slide-in-left" style="animation-delay: 0.2s;">
                                <h3>Contexte</h3>
                                <p>L'entreprise Europe GSB avait besoin d'une solution centralisée pour la gestion et l'analyse des logs de son infrastructure informatique. J'ai été chargé de mettre en place la solution ELK (Elasticsearch, Logstash, Kibana) pour répondre à ce besoin.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info fade-in" style="animation-delay: 0.3s;">
                                <h3>Problématique</h3>
                                <p>Comment centraliser efficacement les logs de différentes sources (serveurs, applications, équipements réseau) pour faciliter leur analyse, la détection d'incidents et le respect des exigences de conformité ?</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info slide-in-right" style="animation-delay: 0.4s;">
                                <h3>Environnement technique</h3>
                                <div class="tech-list">
                                    <span class="tech-badge">Elasticsearch</span>
                                    <span class="tech-badge">Logstash</span>
                                    <span class="tech-badge">Kibana</span>
                                    <span class="tech-badge">Filebeat</span>
                                    <span class="tech-badge">Linux</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="situation-details fade-in" style="animation-delay: 0.5s;">
                        <h3>Démarche et réalisation</h3>
                        <ol>
                            <li>Analyse des besoins et identification des sources de logs à centraliser</li>
                            <li>Installation et configuration des composants ELK sur un serveur Linux</li>
                            <li>Configuration d'Elasticsearch pour le stockage et l'indexation des logs</li>
                            <li>Déploiement de Logstash pour la collecte, le traitement et l'enrichissement des logs</li>
                            <li>Installation et configuration de Filebeat sur les différents serveurs pour l'envoi des logs</li>
                            <li>Configuration de Kibana pour la visualisation et l'analyse des données</li>
                            <li>Création de dashboards personnalisés pour le monitoring et l'analyse</li>
                            <li>Mise en place d'alertes pour la détection d'anomalies</li>
                            <li>Formation des équipes à l'utilisation de la solution</li>
                            <li>Documentation complète de l'architecture et des procédures</li>
                        </ol>
                    </div>
                    
                    <div class="situation-results fade-in" style="animation-delay: 0.6s;">
                        <h3>Résultats obtenus</h3>
                        <ul>
                            <li>Centralisation réussie des logs de l'ensemble des serveurs et applications de l'entreprise</li>
                            <li>Réduction significative du temps de détection des incidents</li>
                            <li>Amélioration de la capacité d'analyse et de corrélation des événements</li>
                            <li>Mise en conformité avec les exigences réglementaires en matière de conservation des logs</li>
                            <li>Dashboards personnalisés pour différentes équipes (sécurité, infrastructure, développement)</li>
                        </ul>
                    </div>
                    
                    <div class="situation-skills fade-in" style="animation-delay: 0.7s;">
                        <h3>Compétences mobilisées</h3>
                        <div class="skill-list">
                            <span class="skill-badge">Administration système</span>
                            <span class="skill-badge">Gestion de logs</span>
                            <span class="skill-badge">Analyse de données</span>
                            <span class="skill-badge">Sécurité informatique</span>
                            <span class="skill-badge">Documentation technique</span>
                        </div>
                    </div>
                    
                    <div class="situation-actions fade-in" style="animation-delay: 0.8s;">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#elkModal">
                            <i class="fas fa-search-plus me-2"></i>
                            Voir les captures d'écran
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Situation 2 - Nessus -->
            <div class="situation-card fade-in" style="animation-delay: 0.9s;">
                <div class="situation-header">
                    <h2>Mise en place d'un serveur Nessus pour l'analyse de vulnérabilités</h2>
                    <span class="situation-badge">Entreprise Europe GSB</span>
                </div>
                
                <div class="situation-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="situation-info slide-in-left" style="animation-delay: 1.0s;">
                                <h3>Contexte</h3>
                                <p>Suite à un audit de sécurité, l'entreprise Europe GSB a souhaité renforcer son dispositif de cybersécurité en mettant en place une solution d'analyse de vulnérabilités. J'ai été chargé de déployer et configurer Nessus Professional pour effectuer des scans réguliers de l'infrastructure.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info fade-in" style="animation-delay: 1.1s;">
                                <h3>Problématique</h3>
                                <p>Comment identifier proactivement les vulnérabilités de sécurité dans l'infrastructure informatique afin de les corriger avant qu'elles ne soient exploitées par des attaquants ?</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info slide-in-right" style="animation-delay: 1.2s;">
                                <h3>Environnement technique</h3>
                                <div class="tech-list">
                                    <span class="tech-badge">Nessus Professional</span>
                                    <span class="tech-badge">Linux</span>
                                    <span class="tech-badge">Firewall</span>
                                    <span class="tech-badge">CVSS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="situation-details fade-in" style="animation-delay: 1.3s;">
                        <h3>Démarche et réalisation</h3>
                        <ol>
                            <li>Analyse des besoins et définition du périmètre de scan</li>
                            <li>Installation de Nessus Professional sur un serveur Linux dédié</li>
                            <li>Configuration des paramètres de sécurité et des accès</li>
                            <li>Création de politiques de scan adaptées aux différents systèmes</li>
                            <li>Mise en place de scans authentifiés pour une analyse approfondie</li>
                            <li>Configuration des planifications de scans réguliers</li>
                            <li>Définition des seuils d'alerte basés sur le score CVSS</li>
                            <li>Mise en place d'un processus de remédiation</li>
                            <li>Formation de l'équipe à l'utilisation de Nessus</li>
                            <li>Documentation des procédures de scan et de remédiation</li>
                        </ol>
                    </div>
                    
                    <div class="situation-results fade-in" style="animation-delay: 1.4s;">
                        <h3>Résultats obtenus</h3>
                        <ul>
                            <li>Détection proactive des vulnérabilités de sécurité</li>
                            <li>Mise en place d'un processus régulier de scan de sécurité</li>
                            <li>Amélioration continue de la posture de sécurité</li>
                            <li>Rapports détaillés permettant de prioriser les corrections</li>
                            <li>Réduction significative des vulnérabilités critiques</li>
                        </ul>
                    </div>
                    
                    <div class="situation-skills fade-in" style="animation-delay: 1.5s;">
                        <h3>Compétences mobilisées</h3>
                        <div class="skill-list">
                            <span class="skill-badge">Administration système</span>
                            <span class="skill-badge">Sécurité informatique</span>
                            <span class="skill-badge">Analyse de vulnérabilités</span>
                            <span class="skill-badge">Gestion des risques</span>
                            <span class="skill-badge">Documentation technique</span>
                        </div>
                    </div>
                    
                    <div class="situation-actions fade-in" style="animation-delay: 1.6s;">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nessusModal">
                            <i class="fas fa-search-plus me-2"></i>
                            Voir les captures d'écran
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="situations-conclusion fade-in" style="animation-delay: 1.7s;">
                <h3>Conclusion</h3>
                <p>Les situations professionnelles présentées ici sont des expériences significatives réalisées dans le cadre de ma formation BTS SIO option SISR. Elles illustrent ma capacité à analyser des problématiques techniques, à concevoir et mettre en œuvre des solutions adaptées, et à évaluer les résultats obtenus.</p>
                <p>Chaque situation a été sélectionnée pour démontrer l'acquisition de compétences spécifiques du référentiel BTS SIO et mon aptitude à les mobiliser dans un contexte professionnel.</p>
            </div>
        </div>
    </div>
</section>

<!-- Modal ELK -->
<div class="modal fade" id="elkModal" tabindex="-1" aria-labelledby="elkModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="elkModalLabel">Projet ELK - Captures d'écran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="elkCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#elkCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#elkCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#elkCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-img-container">
                                <img src="images/elk-dashboard.jpg" class="d-block w-100" alt="Dashboard Kibana">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Dashboard Kibana</h5>
                                <p>Vue d'ensemble du tableau de bord Kibana montrant les statistiques des logs.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img-container">
                                <img src="images/elk-logstash.jpg" class="d-block w-100" alt="Configuration Logstash">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Configuration Logstash</h5>
                                <p>Exemple de configuration des pipelines Logstash pour le traitement des logs.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img-container">
                                <img src="images/elk-filebeat.jpg" class="d-block w-100" alt="Déploiement Filebeat">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Déploiement Filebeat</h5>
                                <p>Configuration de Filebeat sur les serveurs sources pour la collecte des logs.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#elkCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#elkCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nessus -->
<div class="modal fade" id="nessusModal" tabindex="-1" aria-labelledby="nessusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nessusModalLabel">Projet Nessus - Captures d'écran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="nessusCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#nessusCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#nessusCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#nessusCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-img-container">
                                <img src="images/nessus-dashboard.jpg" class="d-block w-100" alt="Dashboard Nessus">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Dashboard Nessus</h5>
                                <p>Vue d'ensemble du tableau de bord Nessus montrant les scans récents et leurs résultats.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img-container">
                                <img src="images/nessus-scan-policy.jpg" class="d-block w-100" alt="Politique de scan">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Politique de scan</h5>
                                <p>Configuration d'une politique de scan personnalisée pour les serveurs critiques.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img-container">
                                <img src="images/nessus-vulnerabilities.jpg" class="d-block w-100" alt="Rapport de vulnérabilités">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Rapport de vulnérabilités</h5>
                                <p>Exemple de rapport détaillé des vulnérabilités identifiées avec leur niveau de criticité.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#nessusCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#nessusCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
