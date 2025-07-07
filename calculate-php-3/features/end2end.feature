Feature: Calculatrice Binaire

  Scenario: L'utilisateur calcule 4 AND 1
    Given je suis sur "/index.php"
    When je clique sur le lien "Calculatrice Binaire"
    And je remplis "a" avec "6"
    And je remplis "b" avec "3"
    And je choisis "and" dans "op"
    And je clique sur "Go !"
    Then je devrais voir "Résultat de and entre 6 et 3 :"
    And je devrais voir "2"
    And je devrais voir "Résultat en binaire : 10"