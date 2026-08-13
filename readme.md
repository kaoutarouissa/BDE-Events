#  BDE Events

Application Full Stack de gestion des événements du BDE.

L'application permet aux étudiants et aux membres du BDE de gérer les événements, les réservations et l'authentification à travers une API Laravel et une interface React.

##  Technologies utilisées

### Backend

* Laravel
* PHP
* MySQL
* Laravel Sanctum
* API REST

### Frontend

* React.js
* Vite
* JavaScript
* React Router
* Fetch API
* Tailwind CSS

### DevOps

* Docker
* Docker Compose
* Git / GitHub

---

## 👥 Rôles

L'application possède deux types d'utilisateurs :

###  Étudiant

* Créer un compte
* Se connecter
* Consulter les événements
* Consulter les détails d'un événement
* Réserver un événement
* Consulter ses réservations
* Se déconnecter

### Administrateur BDE

* Se connecter
* Accéder au dashboard BDE
* Créer un événement
* Modifier un événement
* Supprimer un événement
* Consulter les événements
* Gérer les événements
* Se déconnecter

---

##  Authentification

L'application utilise Laravel Sanctum pour sécuriser l'API.

Fonctionnalités :

* Inscription
* Connexion
* Déconnexion
* Génération d'un token d'authentification
* Protection des routes
* Gestion des rôles `etudiant` et `bde`
* Accès aux fonctionnalités selon le rôle de l'utilisateur

---

##  Gestion des événements

Le membre BDE peut :

* Créer un événement
* Ajouter un titre
* Ajouter une description
* Définir la date
* Définir l'heure
* Définir le lieu
* Définir le prix
* Définir le nombre de places
* Modifier un événement
* Supprimer un événement

Les étudiants peuvent consulter les événements disponibles et leurs informations.

---

##  Gestion des réservations

Les étudiants peuvent :

* Réserver un événement
* Consulter leurs réservations
* Éviter les réservations en double pour le même événement

Les réservations sont liées à l'utilisateur et à l'événement.

---



##  Lancement avec Docker

Cloner le projet :

```bash
git clone https://github.com/kaoutarouissa/BDE-Events
cd BDE-Events
```

Lancer les conteneurs :

```bash
docker compose up
```

Pour lancer en arrière-plan :

```bash
docker compose up -d
```

---

## Accès à l'application

### Frontend React

http://localhost:8080

### Backend Laravel API

http://localhost:8000

---

##  Structure du projet

```text
BDE-Events/
│
├── bde-events-api/
│   ├── app/
│   ├── database/
│   ├── routes/
│   └── ...
│
├── bde-events-react/
│   ├── src/
│   ├── components/
│   ├── pages/
│   └── ...
│
├── docker-compose.yml
└── README.md
```

---

## Sécurité

* Authentification avec Laravel Sanctum
* Routes API protégées
* Vérification des rôles
* Protection des fonctionnalités administrateur
* Validation des données envoyées par les utilisateurs

---

