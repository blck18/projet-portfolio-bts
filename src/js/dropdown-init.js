// Initialisation des menus déroulants Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les éléments avec la classe dropdown-toggle
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    // Initialiser manuellement les dropdowns Bootstrap
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Trouver le menu associé
            const dropdownMenu = this.nextElementSibling;
            
            // Vérifier si le menu est déjà ouvert
            const isOpen = dropdownMenu.classList.contains('show');
            
            // Fermer tous les menus ouverts
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
            
            // Retirer la classe active de tous les toggles
            document.querySelectorAll('.dropdown-toggle.active-dropdown').forEach(t => {
                t.classList.remove('active-dropdown');
            });
            
            // Si le menu n'était pas ouvert, l'ouvrir
            if (!isOpen) {
                dropdownMenu.classList.add('show');
                this.classList.add('active-dropdown');
            }
        });
    });
    
    // Fermer les menus déroulants lorsqu'on clique ailleurs sur la page
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
            document.querySelectorAll('.dropdown-toggle.active-dropdown').forEach(toggle => {
                toggle.classList.remove('active-dropdown');
            });
        }
    });
    
    // Ajouter des styles CSS pour assurer la visibilité du menu déroulant
    const style = document.createElement('style');
    style.textContent = `
        .dropdown-menu.show {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
            pointer-events: auto !important;
        }
        .dropdown-toggle.active-dropdown {
            color: var(--primary-color) !important;
        }
    `;
    document.head.appendChild(style);
});
