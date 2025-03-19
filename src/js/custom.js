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
        const skillBars = document.querySelectorAll('.skill-progress');
        
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
                }
            }
        });
    }

    // Exécuter l'animation au chargement et au défilement
    window.addEventListener('scroll', animateSkillBarsOnScroll);
    window.addEventListener('resize', animateSkillBarsOnScroll);
    
    // Exécuter une fois au chargement
    animateSkillBarsOnScroll();
});
