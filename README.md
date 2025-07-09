# Cours Ynov - Tests PHP _ Juillet 2025

## Auteur:
Catherine JULES

## Pourquoi ?
Pour un cours sur les tests, il a fallu réaliser 4 exercices :
- Des **tests unitaires**
- Des **tests d'intégration**
- Un exercice de **TDD** (Test-Driven Development)
- Des **tests end-to-end**

## ⚠️ À propos du TDD
Ce devoir est solo MAIS j'ai fait l'exercice de TDD trinôme avec Angie et Julien.
Nous avons respecté la méthode TDD (Test-Driven Development) en écrivant les tests en premier, avec des méthodes vides ou incomplètes, puis en complétant les méthodes uniquement pour faire passer les tests.

Vous pouvez retrouver cette démarche dans les fichiers suivants :

CalculsClassique.php (classe contenant les méthodes implémentées progressivement)

TDDTestCalculateClassique.php (anciennement un test unitaire, renommé le 9 juillet pour bien montrer notre démarche TDD)

Dans ce fichier renommé, on peut encore voir une trace d’erreur volontairement provoquée, conformément à l’étape Red de la méthode TDD.

J'ai recommencé la calculatrice le 6 juillet.
Merci de prendre cela en compte pour l’évaluation.

## Outils et configuration

- **PHPUnit** : pour les tests unitaires et d’intégration  
- **PHPStan** : pour l’analyse statique du code (niveau 0 actuellement)  
- **PHP CS Fixer** : pour le formatage automatique du code  
- **Behat** : pour les tests comportementaux (E2E)  
- **Makefile** : pour automatiser toutes les commandes ci-dessus

## Makefile

Toutes les commandes sont centralisées dans le fichier Makefile à la racine.

| Commande         | Effet                                              |
|------------------|----------------------------------------------------|
| `make test`      | Lance les tests PHPUnit                           |
| `make stan`      | Lance PHPStan sur `src/`, `tests/`, et `views/`   |
| `make fix`       | Formate le code avec PHP CS Fixer                 |
| `make behat`     | Lance les scénarios Behat (tests end-to-end)      |
| `make all`       | Exécute `stan`, `test`, `fix` et `behat` |

## Pour commencer

```bash
composer install
make all
