// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé, initialisation des animations...');
    
    // Ajouter l'attribut data-text pour l'effet glitch
    const glitchElements = document.querySelectorAll('.glitch-hover');
    glitchElements.forEach(el => {
        el.setAttribute('data-text', el.textContent);
    });
    
    // Effet de typing pour les éléments avec la classe .typing-effect
    const typingElements = document.querySelectorAll('.typing-effect');
    typingElements.forEach(el => {
        const text = el.textContent;
        el.textContent = '';
        let i = 0;
        
        function typeWriter() {
            if (i < text.length) {
                el.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        
        typeWriter();
    });
    
    // Effet de défilement fluide pour les liens d'ancrage
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animation GSAP pour les éléments au chargement de la page
    if (typeof gsap !== 'undefined') {
        console.log('GSAP détecté, initialisation des animations GSAP...');
        
        // Animation du titre principal
        gsap.from('.hero-content h1', {
            duration: 1.2,
            y: 50,
            opacity: 0,
            ease: 'power3.out'
        });
        
        // Animation du sous-titre
        gsap.from('.hero-content p', {
            duration: 1.2,
            y: 30,
            opacity: 0,
            ease: 'power3.out',
            delay: 0.3
        });
        
        // Animation des boutons
        gsap.from('.hero-content .btn', {
            duration: 1,
            y: 20,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out',
            delay: 0.6
        });
        
        // Animation des cartes
        gsap.from('.glass-card', {
            duration: 0.8,
            y: 30,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.glass-card',
                start: 'top 80%'
            }
        });
        
        // Animation des cartes de compétences
        gsap.from('.card-3d-wrapper', {
            duration: 0.8,
            scale: 0.9,
            opacity: 0,
            stagger: 0.2,
            ease: 'back.out(1.7)',
            scrollTrigger: {
                trigger: '.card-3d-wrapper',
                start: 'top 80%'
            }
        });
    }
    
    // Initialisation des animations AOS
    if (typeof AOS !== 'undefined') {
        console.log('AOS détecté, initialisation des animations au scroll...');
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true
        });
    }
    
    // Initialisation des particules
    if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js')) {
        console.log('Initialisation des particules...');
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: "#00bfff"
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
                    value: 0.5,
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#00bfff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: false,
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
                            opacity: 1
                        }
                    },
                    bubble: {
                        distance: 400,
                        size: 40,
                        duration: 2,
                        opacity: 8,
                        speed: 3
                    },
                    repulse: {
                        distance: 200,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    },
                    remove: {
                        particles_nb: 2
                    }
                }
            },
            retina_detect: true
        });
    }
    
    console.log('Toutes les animations ont été initialisées avec succès!');
});
