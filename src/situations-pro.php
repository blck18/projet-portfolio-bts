<?php include 'includes/header.php'; ?>

<!-- Situations Professionnelles -->
<section id="situations" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 section-title" data-text="SITUATIONS PROFESSIONNELLES">SITUATIONS PROFESSIONNELLES</h2>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Situation 1 -->
                <div class="situation-card">
                    <div class="situation-header">
                        <h2>Déploiement d'une solution ELK pour la centralisation des logs</h2>
                        <span class="situation-badge">Entreprise Europe GSB</span>
                    </div>
                    
                    <div class="situation-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="situation-info">
                                    <h3>Contexte</h3>
                                    <p>L'entreprise Europe GSB avait besoin d'une solution centralisée pour la gestion et l'analyse des logs de son infrastructure informatique. J'ai été chargé de mettre en place la solution ELK (Elasticsearch, Logstash, Kibana) pour répondre à ce besoin.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="situation-info">
                                    <h3>Problématique</h3>
                                    <p>Comment centraliser efficacement les logs de différentes sources (serveurs, applications, équipements réseau) pour faciliter leur analyse, la détection d'incidents et le respect des exigences de conformité ?</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="situation-info">
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
                        
                        <div class="situation-details mt-4">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Situation 2 -->
                <div class="situation-card mt-5">
                    <div class="situation-header">
                        <h2>Déploiement d'un système de sauvegarde centralisé</h2>
                        <span class="situation-badge">Projet académique</span>
                    </div>
                    
                    <div class="situation-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="situation-info">
                                    <h3>Contexte</h3>
                                    <p>Dans le cadre d'un projet académique, j'ai dû concevoir et mettre en place une solution de sauvegarde centralisée pour un parc informatique hétérogène comprenant des postes Windows et Linux.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="situation-info">
                                    <h3>Problématique</h3>
                                    <p>Comment assurer une sauvegarde fiable, automatisée et sécurisée des données critiques sur un parc informatique hétérogène ?</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="situation-info">
                                    <h3>Environnement technique</h3>
                                    <div class="tech-list">
                                        <span class="tech-badge">BackupPC</span>
                                        <span class="tech-badge">Rescuezilla</span>
                                        <span class="tech-badge">NAS</span>
                                        <span class="tech-badge">Rsync</span>
                                        <span class="tech-badge">Cron</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="situation-details mt-4">
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
                        </div>
                    </div>
                </div>
                
                <!-- Vous pouvez ajouter d'autres situations professionnelles en suivant le même modèle -->
                
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
