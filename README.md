# Cours Ynov - Tests PHP _ Juillet 2025

## Auteur:
Catherine JULES

## Pourquoi ?
Pour un cours sur les tests, il a fallu réaliser 4 exercices :
- Des **tests unitaires**
- Des **tests d'intégration**
- Un exercice de **TDD** (Test-Driven Development)
- Des **tests end-to-end**

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