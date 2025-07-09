Feature: Opérations binaires

  Scenario: Binary AND
    Given I have an instance of BinaryCalculate
    When I perform binary AND between 4 and 1
    Then the result should be 0
