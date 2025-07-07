Feature: Opérations binaires

  Scenario: Binary AND between 4 and 1
    Given I have an instance of BinaryCalculate
    When I perform binary AND between 4 and 1
    Then the result should be 0

  Scenario: Binary OR between 4 and 1
    Given I have an instance of BinaryCalculate
    When I perform binary OR between 4 and 1
    Then the result should be 5

  Scenario: Binary XOR between 4 and 1
    Given I have an instance of BinaryCalculate
    When I perform binary XOR between 4 and 1
    Then the result should be 5