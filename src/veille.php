<?php include 'includes/header.php'; ?>

<!-- Veille Technologique -->
<section id="veille" class="py-5 veille-section">
    <!-- Particles Background -->
    <div id="veille-particles"></div>
    
    <div class="container">
        <h1 class="text-center mb-5 section-title" data-aos="fade-down">VEILLE TECHNOLOGIQUE</h1>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="veille-intro" data-aos="fade-up">
                    <h2 class="mb-4"><i class="fas fa-search-plus me-2"></i>Ma démarche de veille</h2>
                    <p>La veille technologique est essentielle dans le domaine de l'informatique pour rester à jour avec les dernières évolutions, tendances et bonnes pratiques. Je me concentre particulièrement sur la <strong>cybersécurité</strong> et les <strong>menaces émergentes</strong> comme les malwares, afin d'anticiper les risques et d'adapter mes compétences aux nouveaux défis du secteur.</p>
                </div>
                
                <div class="veille-card" data-aos="fade-up" data-aos-delay="100">
                    <h2><i class="fas fa-cogs me-2"></i>Ma méthodologie de veille</h2>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="veille-method-card">
                                <div class="method-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3>Sources d'information</h3>
                                <ul>
                                    <li>Sites spécialisés en cybersécurité (ANSSI, ZDNet, The Register)</li>
                                    <li>Newsletters techniques sur la sécurité</li>
                                    <li>Flux RSS de chercheurs en sécurité</li>
                                    <li>Podcasts sur la cybersécurité</li>
                                    <li>Forums spécialisés et communautés de chercheurs</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="veille-method-card">
                                <div class="method-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <h3>Outils utilisés</h3>
                                <ul>
                                    <li>Feedly pour l'agrégation de flux RSS</li>
                                    <li>Pocket pour sauvegarder les articles</li>
                                    <li>Notion pour organiser les informations</li>
                                    <li>VirusTotal pour l'analyse de malwares</li>
                                    <li>Sandboxes virtuelles pour l'analyse sécurisée</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="veille-tools">
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-rss"></i>
                                    </div>
                                    <h4 class="tool-name">Feedly</h4>
                                    <p class="tool-description">Agrégateur de flux RSS pour suivre les actualités de multiples sources</p>
                                    <a href="https://feedly.com" target="_blank" class="tool-link">Découvrir</a>
                                </div>
                                
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-bookmark"></i>
                                    </div>
                                    <h4 class="tool-name">Pocket</h4>
                                    <p class="tool-description">Outil de sauvegarde d'articles pour lecture ultérieure</p>
                                    <a href="https://getpocket.com" target="_blank" class="tool-link">Découvrir</a>
                                </div>
                                
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="far fa-sticky-note"></i>
                                    </div>
                                    <h4 class="tool-name">Notion</h4>
                                    <p class="tool-description">Outil de prise de notes et d'organisation de l'information</p>
                                    <a href="https://www.notion.so" target="_blank" class="tool-link">Découvrir</a>
                                </div>
                                
                                <div class="tool-card">
                                    <div class="tool-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4 class="tool-name">VirusTotal</h4>
                                    <p class="tool-description">Service d'analyse de fichiers et URLs suspects</p>
                                    <a href="https://www.virustotal.com" target="_blank" class="tool-link">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="veille-card" data-aos="fade-up" data-aos-delay="200">
                    <h2><i class="fas fa-bug me-2"></i>Cybersécurité : Les Malwares</h2>
                    
                    <div class="veille-sujet-card mt-4">
                        <div class="sujet-header">
                            <h3>Qu'est-ce qu'un malware ?</h3>
                        </div>
                        <div class="sujet-content">
                            <p>Un malware (logiciel malveillant) est un programme conçu pour s'infiltrer dans un système informatique sans le consentement de l'utilisateur, dans le but de voler des données, d'espionner, d'endommager le système ou d'en prendre le contrôle.</p>
                            <div class="sujet-sources">
                                <h4>Articles de référence :</h4>
                                <div class="sources-list">
                                    <a href="https://www.anssi.fr/publications/bonnes-pratiques" target="_blank" class="source-link">ANSSI - Définition des malwares</a>
                                    <a href="https://www.kaspersky.fr/resource-center/threats/malware" target="_blank" class="source-link">Kaspersky - Histoire des malwares</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="veille-sujet-card mt-4">
                        <div class="sujet-header">
                            <h3>Types de malwares</h3>
                        </div>
                        <div class="sujet-content">
                            <p>Il existe de nombreux types de malwares, chacun avec ses propres caractéristiques et objectifs. Les plus courants sont les virus, les vers, les chevaux de Troie, les ransomwares, les spywares, les adwares, les rootkits et les botnets.</p>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h5><i class="fas fa-virus me-2"></i>Virus et vers</h5>
                                    <p>Les virus se propagent en s'attachant à des fichiers légitimes, tandis que les vers sont autonomes et se propagent via les réseaux.</p>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.cert.ssi.gouv.fr" target="_blank" class="source-link">CERT-FR - Différence virus/vers</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5><i class="fas fa-lock me-2"></i>Ransomwares</h5>
                                    <p>Les ransomwares chiffrent les données de la victime et exigent une rançon pour les déchiffrer.</p>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.cybermalveillance.gouv.fr" target="_blank" class="source-link">Cybermalveillance - Ransomwares</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h5><i class="fas fa-eye me-2"></i>Spywares et keyloggers</h5>
                                    <p>Les spywares collectent des informations sur l'utilisateur à son insu, tandis que les keyloggers enregistrent les frappes au clavier.</p>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.cnil.fr/fr/spyware-logiciel-espion-definition" target="_blank" class="source-link">CNIL - Spywares</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5><i class="fas fa-robot me-2"></i>Rootkits et botnets</h5>
                                    <p>Les rootkits se cachent profondément dans le système, tandis que les botnets transforment les machines infectées en "zombies" contrôlés à distance.</p>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.ssi.gouv.fr" target="_blank" class="source-link">ANSSI - Botnets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="veille-sujet-card mt-4">
                        <div class="sujet-header">
                            <h3>Vecteurs d'infection</h3>
                        </div>
                        <div class="sujet-content">
                            <p>Les malwares utilisent divers vecteurs pour infecter les systèmes, notamment les pièces jointes d'emails, les téléchargements de logiciels compromis, les sites web malveillants, les clés USB infectées et les vulnérabilités non corrigées.</p>
                            <div class="sujet-sources">
                                <h4>Articles de référence :</h4>
                                <div class="sources-list">
                                    <a href="https://www.ssi.gouv.fr/guide/guide-dhygiene-informatique" target="_blank" class="source-link">ANSSI - Vecteurs d'infection</a>
                                    <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques" target="_blank" class="source-link">Cybermalveillance - Emails malveillants</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="veille-sujet-card mt-4">
                        <div class="sujet-header">
                            <h3>Techniques de protection</h3>
                        </div>
                        <div class="sujet-content">
                            <p>La protection contre les malwares repose sur plusieurs niveaux de défense, incluant les antivirus, les pare-feu, les mises à jour régulières, la sensibilisation des utilisateurs et les sauvegardes.</p>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h5><i class="fas fa-shield-alt me-2"></i>Solutions techniques</h5>
                                    <ul>
                                        <li>Antivirus et anti-malware</li>
                                        <li>Pare-feu et systèmes de détection d'intrusion</li>
                                        <li>Sandboxing et virtualisation</li>
                                        <li>Mises à jour et correctifs de sécurité</li>
                                    </ul>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.ssi.gouv.fr/entreprise/bonnes-pratiques" target="_blank" class="source-link">ANSSI - Solutions de sécurité</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5><i class="fas fa-user-shield me-2"></i>Bonnes pratiques</h5>
                                    <ul>
                                        <li>Sauvegardes régulières (3-2-1)</li>
                                        <li>Formation et sensibilisation</li>
                                        <li>Principe du moindre privilège</li>
                                        <li>Segmentation du réseau</li>
                                    </ul>
                                    <div class="sources-list mt-2">
                                        <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes" target="_blank" class="source-link">Cybermalveillance - Sauvegardes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="veille-card" data-aos="fade-up" data-aos-delay="400">
                    <h2><i class="fas fa-newspaper me-2"></i>Derniers articles suivis</h2>
                    
                    <div class="filter-buttons mb-4">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Tous</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="malware">Malwares</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="ransomware">Ransomware</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="vulnerability">Vulnérabilités</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="security">Sécurité</button>
                    </div>
                    
                    <div id="rss-feed" class="rss-feed-container">
                        <!-- Article 1 -->
                        <div class="article-card" data-categories="malware,security">
                            <div class="article-date">5 Mai 2025</div>
                            <h3 class="article-title">FrigidStealer : Ce malware cible votre Mac via de fausses mises à jour</h3>
                            <p class="article-description">Un nouveau malware nommé FrigidStealer cible spécifiquement les utilisateurs Mac en se faisant passer pour des mises à jour de navigateur légitimes.</p>
                            <div class="article-source">Source: Mac4Ever</div>
                            <a href="https://www.mac4ever.com/mac/187387-frigidstealer-ce-malware-cible-votre-mac-via-de-fausses-mises-a-jour-de-navigateur" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 2 -->
                        <div class="article-card" data-categories="malware">
                            <div class="article-date">5 Mai 2025</div>
                            <h3 class="article-title">Triada : Un malware préinstallé dans le firmware de smartphones Android</h3>
                            <p class="article-description">Kaspersky révèle la présence du malware Triada préinstallé dans le firmware de certains smartphones Android, compromettant la sécurité dès l'usine.</p>
                            <div class="article-source">Source: Generation NT</div>
                            <a href="https://www.generation-nt.com/actualites/triada-malware-preinstallation-firmware-smartphone-android-kaspersky-2056930" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 3 -->
                        <div class="article-card" data-categories="security">
                            <div class="article-date">4 Mai 2025</div>
                            <h3 class="article-title">Un nouveau botnet prend d'assaut des appareils de vidéosurveillance</h3>
                            <p class="article-description">Une nouvelle menace cible les systèmes de vidéosurveillance, créant un vaste réseau de botnets pour des attaques distribuées.</p>
                            <div class="article-source">Source: 01Net</div>
                            <a href="https://www.01net.com/actualites/nouveau-botnet-prend-assaut-certains-appareils-videosurveillance-adresses-ip-malveillantes.html" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 4 -->
                        <div class="article-card" data-categories="ransomware">
                            <div class="article-date">4 Mai 2025</div>
                            <h3 class="article-title">Rançongiciel : Comment JohnSmith, Boba et Svetka extorquent leurs victimes via RDP</h3>
                            <p class="article-description">Analyse des techniques utilisées par différents groupes de rançongiciels pour exploiter les accès RDP et compromettre les systèmes.</p>
                            <div class="article-source">Source: ZDNet</div>
                            <a href="https://www.zdnet.fr/actualites/rancongiciel-comment-johnsmith-boba-ou-encore-svetka-ont-tente-dextorquer-leurs-victimes-en-passant-par-des-acces-rdp-453256.htm" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 5 -->
                        <div class="article-card" data-categories="malware">
                            <div class="article-date">3 Mai 2025</div>
                            <h3 class="article-title">Les dangers des infostealers</h3>
                            <p class="article-description">Une analyse approfondie des infostealers, ces logiciels malveillants spécialisés dans le vol d'informations personnelles et sensibles.</p>
                            <div class="article-source">Source: Il Mattino</div>
                            <a href="https://www.ilmattino.it/fr/les_dangers_des_infostealers-8806081.html" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 6 -->
                        <div class="article-card" data-categories="malware,security">
                            <div class="article-date">3 Mai 2025</div>
                            <h3 class="article-title">Supercard X : Un nouveau malware Android qui vide les cartes bancaires</h3>
                            <p class="article-description">Un dangereux malware Android nommé "Supercard X" a été découvert, capable de vider les comptes bancaires des victimes en interceptant les informations de carte bancaire.</p>
                            <div class="article-source">Source: Journal du Geek</div>
                            <a href="https://www.journaldugeek.com/2025/05/03/supercard-x-un-nouveau-malware-android-qui-vide-les-cartes-bancaires/" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>

                        <!-- Article 7 -->
                        <div class="article-card" data-categories="malware,vulnerability">
                            <div class="article-date">3 Mai 2025</div>
                            <h3 class="article-title">Alerte cyberattaque : Un faux plugin anti-malware sème la pagaille sur WordPress</h3>
                            <p class="article-description">Découverte d'un plugin WordPress malveillant se faisant passer pour un outil de sécurité, compromettant les sites web des victimes.</p>
                            <div class="article-source">Source: MSN Actualités</div>
                            <a href="https://www.msn.com/fr-fr/actualite/technologie-et-sciences/alerte-cyberattaque-un-faux-plugin-anti-malware-s%C3%A8me-la-pagaille-sur-wordpress-comment-le-rep%C3%A9rer/ar-AA1E2BXH" target="_blank" class="article-link">Lire l'article <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Scripts spécifiques à la page Veille -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="js/veille.js"></script>
