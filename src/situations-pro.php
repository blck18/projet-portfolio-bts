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
                                    <span class="tech-badge">Docker</span>
                                    <span class="tech-badge">Nginx</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="situation-details fade-in" style="animation-delay: 0.5s;">
                        <h3>Démarche et réalisation</h3>
                        <ol>
                            <li>Analyse des besoins et identification des sources de logs à centraliser</li>
                            <li>Conception de l'architecture de la solution ELK adaptée à l'infrastructure existante</li>
                            <li>Déploiement d'Elasticsearch pour le stockage et l'indexation des logs</li>
                            <li>Configuration de Logstash pour la collecte, le filtrage et la transformation des logs</li>
                            <li>Installation de Filebeat sur les différents serveurs pour l'envoi des logs</li>
                            <li>Mise en place de Kibana pour la visualisation et l'analyse des données</li>
                            <li>Création de tableaux de bord personnalisés pour le monitoring et l'analyse</li>
                            <li>Configuration d'alertes pour la détection d'anomalies et d'incidents</li>
                        </ol>
                        
                        <h3 class="mt-4">Résultats obtenus</h3>
                        <ul>
                            <li>Centralisation de tous les logs de l'infrastructure dans une plateforme unique</li>
                            <li>Réduction du temps de détection et de résolution des incidents de 60%</li>
                            <li>Amélioration de la visibilité sur l'état de l'infrastructure grâce aux tableaux de bord</li>
                            <li>Mise en conformité avec les exigences réglementaires en matière de conservation des logs</li>
                            <li>Capacité d'analyse avancée pour l'identification de tendances et la prévention d'incidents</li>
                        </ul>
                        
                        <h3 class="mt-4">Compétences mobilisées</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Administration de la stack ELK</li>
                                    <li>Configuration et optimisation d'Elasticsearch</li>
                                    <li>Développement de pipelines Logstash</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Création de visualisations et tableaux de bord Kibana</li>
                                    <li>Analyse de logs et détection d'anomalies</li>
                                    <li>Scripting et automatisation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="situation-actions">
                            <a href="#" class="situation-btn">
                                <i class="fas fa-file-alt"></i>
                                Voir le rapport complet
                            </a>
                            <a href="#" class="situation-btn">
                                <i class="fas fa-images"></i>
                                Voir les captures d'écran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Situation 2 -->
            <div class="situation-card fade-in" style="animation-delay: 0.6s;">
                <div class="situation-header">
                    <h2>Déploiement d'un système de sauvegarde centralisé</h2>
                    <span class="situation-badge">Projet académique</span>
                </div>
                
                <div class="situation-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="situation-info slide-in-left" style="animation-delay: 0.7s;">
                                <h3>Contexte</h3>
                                <p>Dans le cadre d'un projet académique, j'ai dû concevoir et mettre en place une solution de sauvegarde centralisée pour un parc informatique hétérogène comprenant des postes Windows et Linux.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info fade-in" style="animation-delay: 0.8s;">
                                <h3>Problématique</h3>
                                <p>Comment assurer une sauvegarde fiable, automatisée et sécurisée des données critiques sur un parc informatique hétérogène ?</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info slide-in-right" style="animation-delay: 0.9s;">
                                <h3>Environnement technique</h3>
                                <div class="tech-list">
                                    <span class="tech-badge">BackupPC</span>
                                    <span class="tech-badge">Rescuezilla</span>
                                    <span class="tech-badge">NAS</span>
                                    <span class="tech-badge">Rsync</span>
                                    <span class="tech-badge">Cron</span>
                                    <span class="tech-badge">Windows</span>
                                    <span class="tech-badge">Linux</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="situation-details fade-in" style="animation-delay: 1s;">
                        <h3>Démarche et réalisation</h3>
                        <ol>
                            <li>Analyse des besoins en termes de sauvegarde et de restauration</li>
                            <li>Comparaison des solutions disponibles et choix de BackupPC</li>
                            <li>Installation et configuration du serveur BackupPC sur une machine Linux</li>
                            <li>Configuration des clients de sauvegarde sur les postes Windows et Linux</li>
                            <li>Mise en place de stratégies de rétention et de rotation des sauvegardes</li>
                            <li>Configuration des notifications en cas d'échec de sauvegarde</li>
                            <li>Mise en place de tests de restauration réguliers</li>
                            <li>Rédaction d'une documentation technique et utilisateur</li>
                        </ol>
                        
                        <h3 class="mt-4">Résultats obtenus</h3>
                        <ul>
                            <li>Sauvegarde automatisée et centralisée de l'ensemble du parc informatique</li>
                            <li>Réduction de l'espace de stockage nécessaire grâce à la déduplication</li>
                            <li>Temps de restauration réduit en cas d'incident</li>
                            <li>Suivi et reporting des opérations de sauvegarde</li>
                            <li>Documentation complète pour les administrateurs et les utilisateurs</li>
                        </ul>
                        
                        <h3 class="mt-4">Compétences mobilisées</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Installation et configuration de BackupPC</li>
                                    <li>Administration système Linux</li>
                                    <li>Scripting pour l'automatisation</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Gestion de stockage et optimisation</li>
                                    <li>Planification et stratégie de sauvegarde</li>
                                    <li>Documentation technique</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="situation-actions">
                            <a href="#" class="situation-btn">
                                <i class="fas fa-file-alt"></i>
                                Voir le rapport complet
                            </a>
                            <a href="#" class="situation-btn">
                                <i class="fas fa-images"></i>
                                Voir les captures d'écran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Situation 3 (nouvelle) -->
            <div class="situation-card fade-in" style="animation-delay: 1.1s;">
                <div class="situation-header">
                    <h2>Mise en place d'une infrastructure réseau sécurisée</h2>
                    <span class="situation-badge">Projet d'entreprise</span>
                </div>
                
                <div class="situation-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="situation-info slide-in-left" style="animation-delay: 1.2s;">
                                <h3>Contexte</h3>
                                <p>Dans le cadre d'un projet d'entreprise, j'ai participé à la conception et au déploiement d'une infrastructure réseau sécurisée pour une PME en pleine croissance nécessitant une refonte de son système d'information.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info fade-in" style="animation-delay: 1.3s;">
                                <h3>Problématique</h3>
                                <p>Comment concevoir et déployer une infrastructure réseau performante, évolutive et sécurisée répondant aux besoins actuels et futurs de l'entreprise ?</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="situation-info slide-in-right" style="animation-delay: 1.4s;">
                                <h3>Environnement technique</h3>
                                <div class="tech-list">
                                    <span class="tech-badge">Cisco</span>
                                    <span class="tech-badge">VLANs</span>
                                    <span class="tech-badge">OPNsense</span>
                                    <span class="tech-badge">Active Directory</span>
                                    <span class="tech-badge">VPN</span>
                                    <span class="tech-badge">DMZ</span>
                                    <span class="tech-badge">Monitoring</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="situation-details fade-in" style="animation-delay: 1.5s;">
                        <h3>Démarche et réalisation</h3>
                        <ol>
                            <li>Analyse des besoins et audit de l'infrastructure existante</li>
                            <li>Conception de l'architecture réseau avec segmentation par VLANs</li>
                            <li>Mise en place d'un pare-feu OPNsense avec règles de filtrage avancées</li>
                            <li>Configuration des équipements réseau (switches, routeurs)</li>
                            <li>Déploiement d'une solution VPN pour les accès distants</li>
                            <li>Mise en place d'une DMZ pour les services exposés</li>
                            <li>Configuration d'Active Directory pour la gestion des utilisateurs</li>
                            <li>Implémentation d'une solution de monitoring réseau</li>
                            <li>Tests de sécurité et validation de l'infrastructure</li>
                        </ol>
                        
                        <h3 class="mt-4">Résultats obtenus</h3>
                        <ul>
                            <li>Infrastructure réseau sécurisée et segmentée</li>
                            <li>Amélioration des performances réseau de 40%</li>
                            <li>Accès sécurisé pour les collaborateurs en télétravail</li>
                            <li>Réduction des incidents de sécurité</li>
                            <li>Monitoring en temps réel de l'infrastructure</li>
                            <li>Documentation complète de l'architecture</li>
                        </ul>
                        
                        <h3 class="mt-4">Compétences mobilisées</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Conception d'architecture réseau</li>
                                    <li>Configuration d'équipements Cisco</li>
                                    <li>Administration de pare-feu</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>Mise en place de VLANs et routage</li>
                                    <li>Configuration VPN et DMZ</li>
                                    <li>Sécurisation d'infrastructure</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="situation-actions">
                            <a href="#" class="situation-btn">
                                <i class="fas fa-file-alt"></i>
                                Voir le rapport complet
                            </a>
                            <a href="#" class="situation-btn">
                                <i class="fas fa-images"></i>
                                Voir les captures d'écran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-8 mx-auto text-center fade-in">
                <div class="info-box">
                    <h3><i class="fas fa-info-circle me-2"></i>À propos des situations professionnelles</h3>
                    <p>Les situations professionnelles présentées ici sont des expériences significatives réalisées dans le cadre de ma formation BTS SIO option SISR. Elles illustrent ma capacité à analyser des problématiques techniques, à concevoir et mettre en œuvre des solutions adaptées, et à évaluer les résultats obtenus.</p>
                    <p>Chaque situation a été sélectionnée pour démontrer l'acquisition de compétences spécifiques du référentiel BTS SIO et mon aptitude à les mobiliser dans un contexte professionnel.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
