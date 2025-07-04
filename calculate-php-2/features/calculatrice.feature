Feature: Calculatrice Binaire

  Scenario: L'utilisateur calcule 4 AND 1
    Given je suis sur "hhttp://localhost:8000"
    And je saisis "4" dans le champ "a"
    And je saisis "1" dans le champ "b"
    And je sélectionne "and" dans "op"
    When je soumets le formulaire
    Then je devrais voir "Résultat de and entre 4 et 1 : 0"