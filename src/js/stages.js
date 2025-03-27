// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initialisation de la page Stages...');
    
    // Initialiser les particules
    initParticles();
    
    // Initialiser les animations au défilement
    initScrollAnimations();
    
    // Initialiser les tooltips pour les badges de technologies
    initTooltips();
    
    // Ajouter des événements pour les cartes de stage
    initStageCards();
});

// Initialiser les particules
function initParticles() {
    if (typeof particlesJS !== 'undefined' && document.getElementById('stages-particles')) {
        particlesJS('stages-particles', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#ffffff"
                },
                shape: {
                    type: "circle",
                    stroke: {
                        width: 0,
                        color: "#000000"
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.2,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#4d79ff",
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 140,
                        line_linked: {
                            opacity: 0.5
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });
    }
}

// Initialiser les animations au défilement
function initScrollAnimations() {
    if (typeof AOS !== 'undefined') {
        // Initialiser AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: false
        });
        
        // Ajouter des attributs AOS aux éléments
        document.querySelectorAll('.stage-card').forEach((card, index) => {
            card.setAttribute('data-aos', 'fade-up');
            card.setAttribute('data-aos-delay', (index * 100).toString());
        });
        
        document.querySelectorAll('.stage-info, .stage-missions, .stage-technologies, .stage-results, .stage-skills').forEach((section, index) => {
            section.setAttribute('data-aos', 'fade-up');
            section.setAttribute('data-aos-delay', ((index % 3) * 100).toString());
        });
    }
}

// Initialiser les tooltips pour les badges de technologies
function initTooltips() {
    const techBadges = document.querySelectorAll('.tech-badge');
    
    techBadges.forEach(badge => {
        // Ajouter une description pour chaque technologie
        const tech = badge.textContent.trim();
        let description = '';
        
        switch (tech) {
            case 'Zabbix':
                description = 'Logiciel de surveillance réseau open source';
                break;
            case 'ELK Stack':
                description = 'Suite Elasticsearch, Logstash et Kibana pour l\'analyse de logs';
                break;
            case 'Alcasar':
                description = 'Portail captif pour contrôler l\'accès à Internet';
                break;
            case 'Sage100':
                description = 'Logiciel de gestion d\'entreprise';
                break;
            case 'Active Directory':
                description = 'Service d\'annuaire pour Windows Server';
                break;
            case 'Veyon':
                description = 'Logiciel de surveillance et de contrôle des postes de travail';
                break;
            case 'Windows Server':
                description = 'Système d\'exploitation serveur de Microsoft';
                break;
            case 'Linux':
                description = 'Système d\'exploitation open source';
                break;
            case 'Rescuezilla':
                description = 'Outil de sauvegarde et de restauration de disque';
                break;
            case 'SQL Server 2022':
                description = 'Système de gestion de base de données relationnelle de Microsoft';
                break;
            case 'Fiery':
                description = 'Serveur d\'impression numérique';
                break;
            case 'Windows':
                description = 'Système d\'exploitation de Microsoft';
                break;
            case 'Adobe Illustrator':
                description = 'Logiciel de création graphique vectorielle';
                break;
            default:
                description = 'Technologie utilisée pendant le stage';
        }
        
        // Ajouter l'attribut title pour le tooltip natif
        badge.setAttribute('title', description);
        
        // Ajouter un effet visuel au survol
        badge.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 5px 15px rgba(0, 217, 255, 0.3)';
        });
        
        badge.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
}

// Initialiser les interactions pour les cartes de stage
function initStageCards() {
    const stageCards = document.querySelectorAll('.stage-card');
    
    stageCards.forEach(card => {
        // Ajouter un effet de survol
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 15px 40px rgba(77, 121, 255, 0.4)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
    
    // Ajouter des événements pour les boutons de rapport
    const reportButtons = document.querySelectorAll('.report-button');
    
    reportButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Vérifier si le rapport existe
            const reportPath = this.getAttribute('href');
            if (!reportPath || reportPath === '#') {
                e.preventDefault();
                alert('Le rapport de stage sera disponible prochainement.');
            }
        });
    });
}

// Fonction pour afficher les compétences acquises
function showSkills(stageId) {
    const skillsContainer = document.getElementById(`skills-${stageId}`);
    
    if (skillsContainer) {
        if (skillsContainer.style.display === 'none' || skillsContainer.style.display === '') {
            skillsContainer.style.display = 'block';
            // Animation pour faire apparaître les compétences
            skillsContainer.style.opacity = '0';
            skillsContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                skillsContainer.style.opacity = '1';
                skillsContainer.style.transform = 'translateY(0)';
            }, 10);
        } else {
            // Animation pour faire disparaître les compétences
            skillsContainer.style.opacity = '0';
            skillsContainer.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                skillsContainer.style.display = 'none';
            }, 300);
        }
    }
}
