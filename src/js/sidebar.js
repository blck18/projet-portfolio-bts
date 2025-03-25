// Sidebar Menu Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const sidebar = document.querySelector('.sidebar-menu');
    const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
    const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
    const body = document.body;
    
    // Create overlay element
    const overlay = document.createElement('div');
    overlay.className = 'sidebar-overlay';
    body.appendChild(overlay);
    
    // Toggle sidebar
    sidebarToggleBtn.addEventListener('click', function() {
        sidebar.classList.add('active');
        overlay.classList.add('active');
        body.style.overflow = 'hidden'; // Prevent scrolling when sidebar is open
    });
    
    // Close sidebar
    sidebarCloseBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
    
    // Close sidebar function
    function closeSidebar() {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        body.style.overflow = ''; // Enable scrolling again
    }
    
    // Close sidebar when clicking on a link (mobile)
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth < 993) {
                closeSidebar();
            }
        });
    });
    
    // Highlight active menu item
    const currentPage = window.location.pathname.split('/').pop();
    
    function highlightActiveLink(links, className) {
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPage || (currentPage === '' && href === 'index.php')) {
                link.classList.add('active');
            }
        });
    }
    
    // Highlight in both navbar and sidebar
    highlightActiveLink(document.querySelectorAll('.nav-link'), 'active');
    highlightActiveLink(document.querySelectorAll('.sidebar-link'), 'active');
    
    // Handle dropdown items
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        const href = item.getAttribute('href');
        if (href === currentPage) {
            // Highlight the dropdown toggle
            document.getElementById('navbarDropdown').classList.add('active');
        }
    });
});
