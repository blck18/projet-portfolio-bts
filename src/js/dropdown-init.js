// Initialisation des menus déroulants Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les éléments avec la classe dropdown-toggle
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    // Vérifier si la page actuelle est une des pages du menu Plus
    const currentPage = window.location.pathname.split('/').pop();
    const plusMenuPages = [
        'situations-pro.php',
        'ateliers-pro.php',
        'certifications.php',
        'stages.php',
        'veille.php',
        'contact.php'
    ];
    
    // Vérifier si nous sommes sur une page du menu Plus
    const isOnPlusMenuPage = plusMenuPages.includes(currentPage);
    
    // Si nous sommes sur une page du menu Plus, ajouter la classe active au dropdown
    if (isOnPlusMenuPage) {
        const navbarDropdown = document.getElementById('navbarDropdown');
        if (navbarDropdown) {
            navbarDropdown.classList.add('active');
        }
    }
    
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
        // Ne pas fermer le menu si on clique sur un élément du menu ou sur le toggle
        if (!e.target.closest('.dropdown-menu') && !e.target.closest('.dropdown-toggle')) {
            document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
            });
            document.querySelectorAll('.dropdown-toggle.active-dropdown').forEach(toggle => {
                toggle.classList.remove('active-dropdown');
            });
        }
    });
    
    // Empêcher la fermeture du menu lorsqu'on clique à l'intérieur
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function(e) {
            // Empêcher la propagation uniquement si ce n'est pas un lien
            if (!e.target.closest('a')) {
                e.stopPropagation();
            }
        });
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
            z-index: 1030 !important;
        }
        .dropdown-toggle.active-dropdown,
        .dropdown-toggle.active {
            color: var(--primary-color) !important;
        }
        .dropdown-menu {
            margin-top: 0;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            padding: 8px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: rgba(0, 191, 255, 0.1);
            color: var(--primary-color);
        }
        .dropdown-item.active {
            background-color: rgba(0, 191, 255, 0.2);
            color: var(--primary-color);
            font-weight: 500;
        }
    `;
    document.head.appendChild(style);
    
    // Marquer l'élément actif dans le menu déroulant
    if (isOnPlusMenuPage) {
        document.querySelectorAll('.dropdown-item').forEach(item => {
            const href = item.getAttribute('href');
            if (href === currentPage) {
                item.classList.add('active');
            }
        });
        
        // Forcer l'ouverture du menu déroulant lors du survol sur les pages du menu Plus
        const dropdown = document.querySelector('.dropdown');
        if (dropdown) {
            dropdown.addEventListener('mouseenter', function() {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                const dropdownToggle = this.querySelector('.dropdown-toggle');
                if (dropdownMenu && dropdownToggle) {
                    dropdownMenu.classList.add('show');
                    dropdownToggle.classList.add('active-dropdown');
                }
            });
            
            // Optionnel : fermer le menu au survol en dehors (décommenter si nécessaire)
            /*
            dropdown.addEventListener('mouseleave', function() {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                const dropdownToggle = this.querySelector('.dropdown-toggle');
                if (dropdownMenu && dropdownToggle) {
                    dropdownMenu.classList.remove('show');
                    dropdownToggle.classList.remove('active-dropdown');
                }
            });
            */
        }
    }
});
