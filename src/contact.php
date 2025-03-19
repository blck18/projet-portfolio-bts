<?php include 'includes/header.php'; ?>

<!-- Contact -->
<section id="contact" class="py-5 contact-section">
    <div class="container py-5">
        <h2 class="text-center mb-5 section-title" data-text="CONTACT">CONTACT</h2>
        
        <div class="row">
            <div class="col-lg-5 mb-4">
                <div class="contact-info-card">
                    <h3 class="mb-4">Mes informations</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>josephharvey8@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="contact-details">
                            <h4>LinkedIn</h4>
                            <p>www.linkedin.com/in/joseph-harvey-ndoutoume-be-a3849b279</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="contact-details">
                            <h4>GitHub</h4>
                            <p><a href="https://github.com/blck18/projet-portfolio-bts" target="_blank">github.com/blck18/projet-portfolio-bts</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Localisation</h4>
                            <p>Limoges, France</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="mb-4">Envoyez-moi un message</h3>
                    
                    <form id="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Nom" required>
                        </div>
                        
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        
                        <div class="mb-3">
                            <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                        </div>
                        
                        <div class="mb-3">
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
