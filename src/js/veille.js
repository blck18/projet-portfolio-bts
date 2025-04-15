// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initialisation de la page Veille Technologique...');
    
    // Initialiser les particules
    initParticles();
    
    // Initialiser les animations au défilement
    initScrollAnimations();
    
    // Initialiser les tooltips
    initTooltips();
    
    // Initialiser les événements pour les cartes
    initCardEvents();
    
    // Initialiser le filtre des articles
    initArticleFilter();
    
    // Simuler le chargement des derniers articles
    loadLatestArticles();
});

// Initialiser les particules
function initParticles() {
    if (typeof particlesJS !== 'undefined' && document.getElementById('veille-particles')) {
        particlesJS('veille-particles', {
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
        document.querySelectorAll('.veille-intro, .veille-card, .veille-method-card, .veille-sujet-card, .timeline-item, .tool-card, .rss-article').forEach((element, index) => {
            element.setAttribute('data-aos', 'fade-up');
            element.setAttribute('data-aos-delay', (index % 4 * 100).toString());
        });
    }
}

// Initialiser les tooltips
function initTooltips() {
    const sourceLinks = document.querySelectorAll('.source-link');
    
    sourceLinks.forEach(link => {
        // Ajouter un effet visuel au survol
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
            this.style.boxShadow = '0 5px 15px rgba(0, 217, 255, 0.3)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });
    });
}

// Initialiser les événements pour les cartes
function initCardEvents() {
    const cards = document.querySelectorAll('.veille-card, .veille-method-card, .veille-sujet-card, .tool-card, .rss-article');
    
    cards.forEach(card => {
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
}

// Initialiser le filtre des articles
function initArticleFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const articles = document.querySelectorAll('.rss-article');
    
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Activer le bouton sélectionné
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filtrer les articles
                articles.forEach(article => {
                    const category = article.getAttribute('data-category');
                    
                    if (filter === 'all' || category === filter) {
                        article.style.display = 'flex';
                        setTimeout(() => {
                            article.style.opacity = '1';
                            article.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        article.style.opacity = '0';
                        article.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            article.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }
}

// Simuler le chargement des derniers articles
function loadLatestArticles() {
    const rssFeed = document.getElementById('rss-feed');
    
    if (rssFeed) {
        // Simuler un délai de chargement
        setTimeout(() => {
            rssFeed.innerHTML = '<div class="rss-articles">' + generateArticles() + '</div>';
            
            // Initialiser les événements pour les nouvelles cartes
            initCardEvents();
            
            // Initialiser les animations pour les nouveaux éléments
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        }, 1000);
    }
}

// Générer des articles de démonstration
function generateArticles() {
    const articles = [
        {
            title: "Découverte du malware LuaDream, une nouvelle menace pour macOS",
            date: "12 avril 2025",
            excerpt: "Les chercheurs de Kaspersky ont découvert un nouveau malware sophistiqué ciblant macOS, baptisé LuaDream. Ce malware modulaire est capable d'exfiltrer des données sensibles, de capturer des frappes clavier et d'enregistrer l'écran des victimes...",
            source: "Kaspersky SecureList",
            category: "macos",
            image: "https://media.kasperskycontenthub.com/wp-content/uploads/sites/43/2023/10/12090549/abstract-malware-sl-800x450.jpg",
            link: "https://securelist.com/luadream-macos-malware/110675/"
        },
        {
            title: "BlackCat (ALPHV) : le ransomware-as-a-service qui révolutionne les attaques",
            date: "8 avril 2025",
            excerpt: "Le ransomware BlackCat (également connu sous le nom d'ALPHV) continue d'évoluer avec de nouvelles techniques d'exfiltration de données et de double extorsion. Développé en Rust, ce RaaS est devenu l'un des plus redoutables sur le marché criminel...",
            source: "ANSSI",
            category: "ransomware",
            image: "https://www.cert.ssi.gouv.fr/uploads/CERTFR-2023-CTI-007.png",
            link: "https://www.cert.ssi.gouv.fr/cti/CERTFR-2023-CTI-007/"
        },
        {
            title: "Emergence des malwares polymorphes basés sur l'IA générative",
            date: "5 avril 2025",
            excerpt: "Une nouvelle génération de malwares utilisant l'IA générative pour modifier dynamiquement leur code et échapper aux solutions de sécurité traditionnelles a été identifiée. Ces malwares peuvent générer des variantes uniques pour chaque infection...",
            source: "Wired",
            category: "malware",
            image: "https://media.wired.com/photos/6425ef2984bf8cc5d8f4f3ad/master/w_1600,c_limit/The-Malware-Industry-Is-Booming-Security-GettyImages-1322539778.jpg",
            link: "https://www.wired.com/story/ai-malware-cyberattacks-deepfakes-phishing/"
        },
        {
            title: "StripedFly : le malware furtif qui est resté caché pendant 5 ans",
            date: "1 avril 2025",
            excerpt: "Les chercheurs de Microsoft ont découvert StripedFly, un malware sophistiqué qui a infecté plus de 100 000 appareils dans 60 pays pendant 5 ans sans être détecté. Ce malware combine des capacités de cryptomining et d'espionnage...",
            source: "Microsoft Security",
            category: "malware",
            image: "https://www.microsoft.com/en-us/security/blog/wp-content/uploads/2023/08/StripedFly-1.png",
            link: "https://www.microsoft.com/en-us/security/blog/2023/08/24/striped-fly-a-unique-mass-scale-cyber-espionage-and-cryptocurrency-mining-campaign/"
        },
        {
            title: "Akira : le nouveau ransomware qui cible les entreprises via les VPN",
            date: "28 mars 2025",
            excerpt: "Un nouveau groupe de ransomware nommé Akira exploite les vulnérabilités dans les solutions VPN pour compromettre les réseaux d'entreprise. Ce ransomware se distingue par sa capacité à chiffrer les données sur les systèmes Windows et Linux...",
            source: "Trend Micro",
            category: "ransomware",
            image: "https://www.trendmicro.com/content/dam/trendmicro/global/en/research/23/h/akira-ransomware-enters-the-fray-with-vpn-vulnerabilities-as-initial-access-vector/akira-ransomware-enters-the-fray-with-vpn-vulnerabilities-as-initial-access-vector-1.png",
            link: "https://www.trendmicro.com/en_us/research/23/h/akira-ransomware-enters-the-fray-with-vpn-vulnerabilities-as-init.html"
        },
        {
            title: "Malware Rust Moon : la nouvelle menace qui cible les environnements Linux",
            date: "22 mars 2025",
            excerpt: "Rust Moon, un nouveau malware écrit en Rust, cible spécifiquement les environnements Linux en exploitant des vulnérabilités dans les services SSH mal configurés. Ce malware est capable d'établir des portes dérobées persistantes et d'exfiltrer des données sensibles...",
            source: "The Hacker News",
            category: "linux",
            image: "https://thehackernews.com/new-images/img/b/R29vZ2xl/AVvXsEgUt_zCm-Fh1l4lQkpLBcnQWyiAvOlMCH-OqYXrYGHcnQsxOXUxgmN-WQy-8tFQB6VxQVv1gnCVQGTJYkFgXDNaLlQAGXJCUqUYCCJHHxGQ5VBzXR6wHiKYGhF4xmVlwYC_UGYbpfIhkIJa/s728-rj-e365/malware.jpg",
            link: "https://thehackernews.com/2023/04/new-rust-based-linux-malware-targeting.html"
        }
    ];
    
    let html = '';
    
    articles.forEach(article => {
        html += `
            <div class="rss-article" data-category="${article.category}">
                <div class="rss-article-image">
                    <img src="${article.image}" alt="${article.title}">
                </div>
                <div class="rss-article-content">
                    <div class="rss-article-date">
                        <i class="far fa-calendar-alt"></i> ${article.date}
                    </div>
                    <h4 class="rss-article-title">
                        <a href="${article.link}" target="_blank">${article.title}</a>
                    </h4>
                    <p class="rss-article-excerpt">${article.excerpt}</p>
                    <div class="rss-article-source">
                        <i class="fas fa-globe"></i> Source: ${article.source}
                    </div>
                    <a href="${article.link}" target="_blank" class="rss-article-link">Lire l'article</a>
                </div>
            </div>
        `;
    });
    
    return html;
}
