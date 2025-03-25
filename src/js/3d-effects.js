// 3D Effects for Portfolio
document.addEventListener('DOMContentLoaded', function() {
    // Initialize 3D elements
    initHeaderAnimation();
    initBackgroundParticles();
    initCardAnimations();
    
    // 3D animation for the header menu icons
    function initHeaderAnimation() {
        const menuItems = document.querySelectorAll('.nav-link');
        
        menuItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.querySelector('.icon-3d').style.transform = 'translateZ(50px) rotateY(10deg)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.querySelector('.icon-3d').style.transform = 'translateZ(0) rotateY(0deg)';
            });
        });
    }
    
    // Create animated particles in the background
    function initBackgroundParticles() {
        const particleContainer = document.getElementById('particles-container');
        if (!particleContainer) return;
        
        // Configuration for the particles
        const PARTICLE_COUNT = 50;
        const PARTICLE_SIZE_MIN = 5;
        const PARTICLE_SIZE_MAX = 15;
        const PARTICLE_SPEED_MIN = 0.5;
        const PARTICLE_SPEED_MAX = 2;
        
        // Create particles
        for (let i = 0; i < PARTICLE_COUNT; i++) {
            createParticle(particleContainer);
        }
        
        function createParticle(container) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random size
            const size = Math.random() * (PARTICLE_SIZE_MAX - PARTICLE_SIZE_MIN) + PARTICLE_SIZE_MIN;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            
            // Random position
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;
            
            // Random speed
            const speedX = (Math.random() * (PARTICLE_SPEED_MAX - PARTICLE_SPEED_MIN) + PARTICLE_SPEED_MIN) * (Math.random() > 0.5 ? 1 : -1);
            const speedY = (Math.random() * (PARTICLE_SPEED_MAX - PARTICLE_SPEED_MIN) + PARTICLE_SPEED_MIN) * (Math.random() > 0.5 ? 1 : -1);
            
            // Random opacity
            particle.style.opacity = Math.random() * 0.5 + 0.1;
            
            // Random color
            const hue = Math.random() * 60 + 180; // Blue to cyan range
            particle.style.backgroundColor = `hsla(${hue}, 100%, 70%, 0.8)`;
            
            // Add to container
            container.appendChild(particle);
            
            // Animation loop
            let posX = parseFloat(particle.style.left);
            let posY = parseFloat(particle.style.top);
            
            function moveParticle() {
                posX += speedX * 0.1;
                posY += speedY * 0.1;
                
                // Wrap around edges
                if (posX > 100) posX = 0;
                if (posX < 0) posX = 100;
                if (posY > 100) posY = 0;
                if (posY < 0) posY = 100;
                
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                
                requestAnimationFrame(moveParticle);
            }
            
            moveParticle();
        }
    }
    
    // Add 3D hover effect to cards throughout the site
    function initCardAnimations() {
        const cards = document.querySelectorAll('.card-3d');
        
        cards.forEach(card => {
            card.addEventListener('mousemove', e => {
                const cardRect = card.getBoundingClientRect();
                const cardCenterX = cardRect.left + cardRect.width / 2;
                const cardCenterY = cardRect.top + cardRect.height / 2;
                
                // Calculate mouse position relative to card center
                const mouseX = e.clientX - cardCenterX;
                const mouseY = e.clientY - cardCenterY;
                
                // Calculate rotation (max 10 degrees)
                const rotateY = (mouseX / (cardRect.width / 2)) * 10;
                const rotateX = -(mouseY / (cardRect.height / 2)) * 10;
                
                // Apply transform
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                card.style.boxShadow = `0 15px 35px rgba(0,0,0,0.5), ${mouseX / 50}px ${mouseY / 50}px 30px rgba(0,191,255,0.25)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
                card.style.boxShadow = '0 10px 30px rgba(0,0,0,0.5)';
            });
        });
    }
});
