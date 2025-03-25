<?php include 'includes/header.php'; ?>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <!-- Particles Background -->
    <div id="particles-js-contact" class="particles-container"></div>
    
    <!-- Contact Hero -->
    <div class="container">
        <div class="contact-hero fade-in">
            <h2>Contactez-moi</h2>
            <p>Vous avez des questions sur mes compétences, mes projets ou vous souhaitez simplement échanger ? N'hésitez pas à me contacter via le formulaire ci-dessous ou par les moyens de contact directs.</p>
        </div>
        
        <div class="contact-container">
            <div class="row">
                <!-- Contact Cards -->
                <div class="col-lg-4">
                    <!-- Email Card -->
                    <div class="contact-card slide-in-left" data-delay="100">
                        <div class="contact-info">
                            <div class="contact-info-header">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="contact-title">Email</h3>
                                    <p class="contact-subtitle">Réponse sous 24-48h</p>
                                </div>
                            </div>
                            <div class="contact-details">
                                <p><a href="mailto:josephharveyn8@gmail.com">josephharveyn8@gmail.com</a></p>
                            </div>
                            <div class="contact-social">
                                <a href="mailto:josephharveyn8@gmail.com" class="social-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Card -->
                    <div class="contact-card slide-in-left" data-delay="200">
                        <div class="contact-info">
                            <div class="contact-info-header">
                                <div class="contact-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <div>
                                    <h3 class="contact-title">Réseaux sociaux</h3>
                                    <p class="contact-subtitle">Connectons-nous</p>
                                </div>
                            </div>
                            <div class="contact-details">
                                <p>Retrouvez-moi sur les réseaux professionnels et suivez mes projets sur GitHub.</p>
                            </div>
                            <div class="contact-social">
                                <a href="https://www.linkedin.com/in/joseph-harvey-ndoutoume-be-a3849b279" target="_blank" class="social-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://github.com/blck18/projet-portfolio-bts" target="_blank" class="social-icon">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Location Card -->
                    <div class="contact-card slide-in-left" data-delay="300">
                        <div class="contact-info">
                            <div class="contact-info-header">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3 class="contact-title">Localisation</h3>
                                    <p class="contact-subtitle">Campus Beaupeyrat</p>
                                </div>
                            </div>
                            <div class="contact-details">
                                <p>9 rue Pétiniaud Beaupeyrat<br>87000 Limoges<br>France</p>
                            </div>
                            <div class="contact-social">
                                <a href="https://maps.app.goo.gl/Hfm8Vt7Vz5QZJuVV6" target="_blank" class="social-icon">
                                    <i class="fas fa-directions"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact-form-card slide-in-right">
                        <div class="contact-form">
                            <div class="form-header">
                                <h3 class="form-title">Envoyez-moi un message</h3>
                                <p class="form-subtitle">Je vous répondrai dans les plus brefs délais</p>
                            </div>
                            
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control" id="name" placeholder="Votre nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Votre email">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Sujet de votre message">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Votre message"></textarea>
                                </div>
                                
                                <button type="submit" class="submit-btn">
                                    <i class="fas fa-paper-plane me-2"></i> Envoyer le message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="map-card fade-in">
                <div class="map-header">
                    <h3 class="map-title">Me localiser</h3>
                    <p class="map-subtitle">Campus Beaupeyrat - Limoges</p>
                </div>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.8962918561344!2d1.2507806!3d45.8305306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934e2a8c19b4f%3A0x1c0a4b5b8f0a8c0!2s9%20Rue%20P%C3%A9tiniaud%20Beaupeyrat%2C%2087000%20Limoges!5e0!3m2!1sfr!2sfr!4v1616593335339!5m2!1sfr!2sfr" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
                <div class="map-footer">
                    <p class="map-address">
                        <i class="fas fa-map-marker-alt"></i> 9 rue Pétiniaud Beaupeyrat, 87000 Limoges, France
                    </p>
                </div>
            </div>
            
            <!-- Contact CTA -->
            <div class="contact-cta fade-in">
                <p class="cta-text">Vous préférez discuter en personne ?</p>
                <a href="mailto:josephharveyn8@gmail.com" class="cta-btn">
                    <i class="fas fa-calendar-alt"></i> Planifier un rendez-vous
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
