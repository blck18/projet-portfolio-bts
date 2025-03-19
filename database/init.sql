-- Création de la table des projets
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    technologies VARCHAR(255),
    image_url VARCHAR(255),
    github_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de quelques projets exemple
INSERT INTO projects (title, description, technologies, image_url) VALUES
('Gestion de Stock', 'Application web de gestion de stock pour une PME', 'PHP, MySQL, Bootstrap', 'stock.jpg'),
('Site E-commerce', 'Développement d''une boutique en ligne', 'PHP, JavaScript, MySQL', 'ecommerce.jpg'),
('Application Mobile', 'Application mobile de suivi de temps', 'React Native, Node.js', 'mobile.jpg');

-- Création de la table des compétences
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    level INT CHECK (level BETWEEN 1 AND 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion des compétences
INSERT INTO skills (name, category, level) VALUES
('PHP', 'Développement', 4),
('JavaScript', 'Développement', 4),
('HTML/CSS', 'Développement', 5),
('Docker', 'DevOps', 3),
('Linux', 'Systèmes', 4),
('MySQL', 'Base de données', 4);

-- Création de la table des stages
CREATE TABLE stages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    entreprise VARCHAR(255) NOT NULL,
    periode VARCHAR(100) NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    description TEXT NOT NULL,
    missions TEXT,
    competences TEXT,
    bilan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de données d'exemple pour les stages
INSERT INTO stages (titre, entreprise, periode, date_debut, date_fin, description, missions, competences, bilan) VALUES
('Stage de première année', 'Entreprise XYZ', 'Mai-Juin 2023', '2023-05-01', '2023-06-15', 'Stage de découverte en entreprise', 
'Installation et configuration de serveurs Windows Server 2019;Mise en place d''un domaine Active Directory;Configuration de services DHCP et DNS;Déploiement d''une solution de sauvegarde', 
'Windows Server;Active Directory;Réseaux;Sauvegarde', 
'Ce stage m''a permis de mettre en pratique mes connaissances théoriques et de découvrir le métier d''administrateur systèmes et réseaux en entreprise.'),
('Stage de deuxième année', 'Entreprise ABC', 'Janvier-Février 2024', '2024-01-08', '2024-02-23', 'Stage de perfectionnement', 
'Analyse de l''infrastructure existante;Conception d''une architecture cloud sur Microsoft Azure;Migration des serveurs vers des machines virtuelles Azure;Mise en place de solutions de sécurité;Formation des utilisateurs', 
'Cloud Computing;Microsoft Azure;Virtualisation;Sécurité', 
'Ce stage m''a permis d''approfondir mes connaissances en cloud computing et de développer mes compétences en gestion de projet.');

-- Création de la table pour la veille technologique
CREATE TABLE veille (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    resume TEXT NOT NULL,
    contenu TEXT,
    lien VARCHAR(255),
    date_publication DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertion de données d'exemple pour la veille technologique
INSERT INTO veille (titre, resume, contenu, lien, date_publication) VALUES
('Les tendances en cybersécurité pour 2024', 'Analyse des principales menaces et solutions de sécurité émergentes pour protéger les systèmes d''information.', 
'Contenu détaillé de l''article sur les tendances en cybersécurité...', 'https://example.com/cybersecurite-2024', '2024-01-15'),
('L''évolution du Cloud Computing', 'Comment le cloud computing transforme les infrastructures IT et quelles sont les nouvelles offres des principaux fournisseurs.', 
'Contenu détaillé de l''article sur l''évolution du cloud computing...', 'https://example.com/cloud-computing', '2024-02-28'),
('Les réseaux Zero Trust', 'Présentation du concept de Zero Trust et comment l''implémenter dans une infrastructure réseau d''entreprise.', 
'Contenu détaillé de l''article sur les réseaux Zero Trust...', 'https://example.com/zero-trust', '2024-03-10');
