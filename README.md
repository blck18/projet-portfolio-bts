# Portfolio BTS SIO - Option SISR

Ce portfolio présente mes compétences, projets et expériences acquises durant mon BTS Services Informatiques aux Organisations, option Solutions d'Infrastructure, Systèmes et Réseaux (SISR).

## 📋 Présentation

Ce site web portfolio a été conçu pour présenter mon parcours en BTS SIO option SISR. Il met en avant mes compétences techniques, mes projets réalisés, mes expériences de stage ainsi que ma veille technologique dans le domaine des systèmes et réseaux.

## 🛠️ Technologies utilisées

- **Frontend** : HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend** : PHP 8
- **Base de données** : MySQL 8
- **Déploiement** : Docker
- **Animations** : AOS (Animate On Scroll)
- **Icônes** : Font Awesome
- **Versioning** : Git

## 🚀 Installation et déploiement

### Prérequis
- Docker et Docker Compose installés sur votre machine
- Git pour cloner le repository

### Installation

1. Cloner le repository
   ```bash
   git clone https://github.com/votre-username/portfolio-bts-sio.git
   cd portfolio-bts-sio
   ```

2. Lancer les conteneurs Docker
   ```bash
   docker-compose up -d
   ```

3. Accéder à l'application
   - Frontend : http://localhost:8080
   - PhpMyAdmin : http://localhost:8090 (utilisateur: root, mot de passe: rootpassword)

## 📂 Structure du projet

```
portfolio-bts-sio/
├── database/
│   └── init.sql                # Script d'initialisation de la base de données
├── docker/
│   └── Dockerfile              # Configuration Docker pour PHP/Apache
├── src/
│   ├── config/                 # Configuration de l'application
│   ├── css/                    # Fichiers CSS
│   ├── images/                 # Images et ressources
│   ├── includes/               # Composants PHP réutilisables
│   ├── js/                     # Scripts JavaScript
│   ├── documents/              # Documents téléchargeables (PDF, etc.)
│   └── index.php               # Page principale de l'application
├── .gitignore                  # Fichiers à ignorer par Git
├── docker-compose.yml          # Configuration Docker Compose
└── README.md                   # Documentation du projet
```

## 📱 Fonctionnalités

- **Design responsive** adapté à tous les appareils
- **Menu de navigation** intuitif
- **Sections détaillées** : Accueil, Profil, BTS SIO, Documentation, Situations Professionnelles, Stages, Veille Technologique, Contact
- **Animations** pour une expérience utilisateur dynamique
- **Formulaire de contact** fonctionnel
- **Téléchargement de documents** (CV, rapports de stage, etc.)
- **Intégration de flux RSS** pour la veille technologique

## 🔄 Mise à jour du contenu

Pour mettre à jour le contenu du portfolio :

1. Modifier les fichiers dans le dossier `src/`
2. Pour ajouter de nouveaux projets ou stages, mettre à jour la base de données via PhpMyAdmin

## 📝 Licence

Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.

## 📧 Contact

Pour toute question ou suggestion, n'hésitez pas à me contacter :
- Email : votre-email@example.com
- LinkedIn : [Votre Nom](https://linkedin.com/in/votre-profil)
- GitHub : [votre-username](https://github.com/votre-username)
