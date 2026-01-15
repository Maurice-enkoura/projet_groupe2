# Projet Groupe 2 – Gestion de Restaurant

## Description
Application web de gestion de restaurant développée avec Laravel 12.
Le projet permet la gestion des menus, des plats et des commandes,
avec un système d’authentification et de rôles.

Ce projet est réalisé dans le cadre d’un travail collaboratif.

---

##  Fonctionnalités
- Authentification (Laravel Breeze)
  - Inscription
  - Connexion
  - Déconnexion
- Gestion des rôles
  - Visiteur
  - Utilisateur
  - Administrateur
- Gestion des menus (CRUD)
- Gestion des plats (CRUD)
- Gestion des commandes
- Accès différencié selon le rôle

---

## Technologies utilisées
- PHP _8.12
- Laravel 12
- MySQL
- Laravel Breeze
- HTML / CSS / Blade
- Git & GitHub

---

## 👥 Membres du Groupe et Rôles

### **Maurice Enkoura** - Développeur Backend & Architecte
**Rôle principal** : Implémentation complète du système restaurant

#### **Tâches réalisées :**
- **Architecture** : Configuration initiale du projet Laravel
- **Modèles & Relations** : User, Menu, Plat, Commande avec relations Eloquent
- **Authentification** : Système de rôles (admin/user) 
- **Sécurité** : Middleware `EnsureIsAdmin` et policies d'autorisation
- **Base de données** : Migrations et seeders avec données de test réalistes
- **Interface visiteur** : Consultation des menus/plats sans authentification
- **Dashboard client** : Interface utilisateur connecté
- **Gestion des rôles** : Visiteur, Utilisateur, Administrateur
- **Accès différencié** : 
  - Visiteur : consultation uniquement
  - Utilisateur : CRUD partiel
  - Administrateur : CRUD complet

### **Maty Mbaye** - Développeur Frontend & Interface Admin
**Rôle principal** : Développement de l'interface administrateur

#### **Tâches attribuées :**
- Dashboard administrateur complet
- CRUD complet pour la gestion des restaurants
- Interface de gestion des commandes
- Gestion des utilisateurs et permissions
- Statistiques et rapports

### **Mauricia Ibata** - Développeuse Authentification & Sécurité
**Responsabilités principales :**
- ~~Système d'inscription des utilisateurs~~ *(fait par Maurice - problèmes techniques)*
- ~~Gestion de la connexion et déconnexion~~ *(fait par Maurice - problèmes techniques)*
- ~~Validation des formulaires d'authentification~~ *(fait par Maurice - problèmes techniques)*

## 🚧 Problèmes Techniques Rencontrés

### **Problèmes d'installation (Mauricia Ibata)**
- Difficultés avec l'installation de Composer et dépendances
- Problèmes de configuration de l'environnement Laravel
- Impossibilité de lancer le serveur localement


## Structure Technique par Membre

### **Maurice Enkoura**

## ⚙️ Installation du projet

### 1️⃣ Cloner le dépôt
```bash
git clone https://github.com/Maurice-enkoura/projet_groupe2.git
cd projet_groupe2
