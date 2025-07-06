Feature: Calculatrice Binaire

  Scenario: L'utilisateur calcule 4 AND 1
    Given je suis sur "http://localhost:8080/?page=binaire"
    And je remplis "a" avec "4"
    And je remplis "b" avec "1"
    And je sélectionne "and" dans "op"
    When je clique sur "Go !"
    Then je devrais voir "Résultat de and entre 4 et 1 :"
    And je devrais voir "Résultat en binaire :"