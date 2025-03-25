// Animation des barres de compétences au défilement
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour vérifier si un élément est visible dans la fenêtre
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Fonction pour animer les barres de compétences lorsqu'elles sont visibles
    function animateSkillBarsOnScroll() {
        const skillBars = document.querySelectorAll('.skill-progress, .quality-progress');
        
        skillBars.forEach(bar => {
            if (isElementInViewport(bar)) {
                if (!bar.classList.contains('animated')) {
                    // Récupérer la largeur originale
                    const width = bar.style.width;
                    
                    // Réinitialiser la largeur à 0
                    bar.style.width = '0';
                    
                    // Forcer un reflow
                    void bar.offsetWidth;
                    
                    // Appliquer l'animation
                    bar.classList.add('animated');
                    bar.style.width = width;
                    
                    // Ajouter une transition pour l'animation
                    bar.style.transition = 'width 1s ease-in-out';
                }
            }
        });
    }

    // Exécuter l'animation au chargement et au défilement
    window.addEventListener('scroll', animateSkillBarsOnScroll);
    window.addEventListener('resize', animateSkillBarsOnScroll);
    
    // Exécuter une fois au chargement
    animateSkillBarsOnScroll();
    
    // Animation des cartes de compétences et qualités
    function animateCards() {
        const cards = document.querySelectorAll('.skill-card, .quality-item, .education-content');
        
        cards.forEach((card, index) => {
            if (isElementInViewport(card) && !card.classList.contains('animated-card')) {
                card.classList.add('animated-card');
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                
                // Délai progressif pour l'effet en cascade
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * index);
            }
        });
    }
    
    // Exécuter l'animation des cartes
    window.addEventListener('scroll', animateCards);
    window.addEventListener('resize', animateCards);
    animateCards();
    
    // Animation de l'image de profil
    const profileImage = document.querySelector('.profile-image-wrapper');
    if (profileImage) {
        profileImage.style.opacity = '0';
        profileImage.style.transform = 'scale(0.8)';
        profileImage.style.transition = 'opacity 1s ease, transform 1s ease';
        
        setTimeout(() => {
            profileImage.style.opacity = '1';
            profileImage.style.transform = 'scale(1)';
        }, 300);
    }
    
    // Animation du texte d'en-tête
    const profileHeaderInfo = document.querySelector('.profile-header-info');
    if (profileHeaderInfo) {
        const elements = profileHeaderInfo.children;
        Array.from(elements).forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateX(20px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            setTimeout(() => {
                element.style.opacity = '1';
                element.style.transform = 'translateX(0)';
            }, 300 + (100 * index));
        });
    }
});
