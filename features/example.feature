
Feature: Laravel Behat Extension
  In order to make testing setup easier
  As a teacher
  I want to show an example of installing and using the Laravel Behat extension.

  Scenario: Dummy Example
    Given I am on the homepage
    When I follow "Login"
    Then the url should match "/login"
    When I click "Submit"
    Then the url should match "/admin"
