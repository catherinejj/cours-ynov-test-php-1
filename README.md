# Cours Ynov - Tests PHP _ Juillet 2025

## Auteur:
Catherine JULES

## Pourquoi ?
Pour un cours sur les tests, il a fallut réaliser 4 exercices :
- Des **tests unitaires**
- Des **tests d'intégration**
- Un exercice de **TDD** (Test-Driven Development)
- Des **tests end-to-end**

#Pour lancer les premiers test:
## Tests unitaires seuls
./vendor/bin/phpunit tests/utils/BinaryCalculateTest.php

## Tous les tests PHPUnit
./vendor/bin/phpunit tests/utils

## Analyse statique
./vendor/bin/phpstan analyse src tests views

## Formatage du code
./vendor/bin/php-cs-fixer fix

## Tests Behat (si des scénarios existent)
./vendor/bin/behat


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
| `make all`       | Exécute `stan`, `test` et `fix` dans cet ordre    |

## Pour commencer

```bash
composer install
make all
