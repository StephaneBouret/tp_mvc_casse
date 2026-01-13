# 🧪 TP — MVC cassé

## 🎯 Objectif pédagogique

Ce TP a pour but de **tester votre compréhension réelle du MVC**,  
et non votre capacité à "faire fonctionner du code".

L'application fournie **fonctionne mal volontairement** :
- les responsabilités sont mélangées,
- certaines bonnes pratiques MVC ne sont pas respectées,
- des erreurs subtiles sont présentes.

👉 Votre mission : **réparer l'architecture**, pas bricoler.

---

## 🧠 Rappel : qu'est-ce que MVC ?

- **Model** : accès aux données + logique liée aux données  
- **View** : affichage HTML uniquement  
- **Controller** : orchestre la requête, appelle le Model, transmet à la View  
- **Router** : décide quel contrôleur et quelle action exécuter  

💡 Si une couche fait le travail d'une autre, **le MVC est cassé**.

---

## 🧩 Fonctionnalités attendues (à la fin)

- Afficher la liste des créations  
?controller=creation&action=index
- Afficher une création précise 
?controller=creation&action=show&id=2
- Aucune requête SQL dans les contrôleurs  
- Aucun HTML dans les modèles  
- Les données sont représentées par des **entités hydratées**

---

## 📁 Arborescence fournie
```
tp_mvc_casse
├──Controllers
│   └──CreationController.php
├──Core
│   ├──Autoloader.php
│   ├──DbConnect.php
│   └──Router.php
├──Entities
│   ├──Creation.php
│   └──Entity.php
├──Models
│   ├──CreationModel.php
│   └──Model.php
├──public
│   └──index.php
├──Views
│   └──creation
│   │   ├──index.php
│   │   └──show.php
└──README.md
```

⚠️ **Attention** : certains fichiers contiennent volontairement des erreurs.

---

## 🔧 Travail demandé

### ✅ Étape 1 — Faire démarrer l'application
``` bash
php -S localhost:8000 -t public
```
- Corriger les problèmes de chargement (autoloader, index.php)
- Vérifier que l'application ne plante plus

---

### ✅ Étape 2 — Corriger le routeur
- Ne pas transmettre `controller` et `action` au contrôleur
- Vérifier l'existence du contrôleur et de la méthode
- Gérer une erreur 404 proprement

---

### ✅ Étape 3 — Réparer les contrôleurs
- Supprimer toute requête SQL dans les contrôleurs
- Le contrôleur doit :
  - appeler le modèle
  - récupérer des entités
  - transmettre les données à la vue

---

### ✅ Étape 4 — Réparer les modèles
- Supprimer tout affichage (`echo`, HTML)
- Les méthodes doivent :
  - exécuter des requêtes SQL
  - retourner des **entités hydratées**

---

### ✅ Étape 5 — Réparer l'hydratation
- Transformer les données SQL (snake_case)
- Hydrater correctement les entités
- Convertir les dates (`created_at`) en `DateTimeImmutable`

---

### ✅ Étape 6 — Sécuriser l'affichage
- Échapper les données affichées dans les vues
- Éviter toute injection HTML ou JavaScript (XSS)

---

## 🧪 Indices (si vous êtes bloqué)

- ❌ SQL dans un contrôleur → **erreur MVC**
- ❌ HTML dans un modèle → **erreur MVC**
- ❌ `$row['created_at']` en string dans l'entité → **hydratation incomplète**
- ❌ `$_GET` transmis tel quel → **routeur fragile**

---

## 📋 Critères d'évaluation

Vous serez évalué sur :
- le respect du MVC
- la clarté du code
- la séparation des responsabilités
- la sécurité minimale (SQL / XSS)
- la lisibilité globale

⚠️ **Un code qui "marche" mais ne respecte pas le MVC sera pénalisé.**

---

## 🧠 Règle d'or

> **Ce TP ne se corrige pas en ajoutant du code,  
> mais en le déplaçant au bon endroit.**

---

Bon courage 👊  
Et souvenez-vous :  
**le MVC est une architecture, pas une contrainte.**

