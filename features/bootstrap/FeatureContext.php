<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * @var string
     */
    private $output;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^das Programm wurde nie zuvor aufgerufen$/
     */
    public function dasProgrammWurdeNieZuvorAufgerufen()
    {
//        throw new PendingException();
    }

    /**
     * @Given /^ich rufe "([^"]*)" auf$/
     */
    public function ichRufeAuf($arg1)
    {
        $command = $arg1;
        exec($command, $this->output);
        $this->output = join("\n", $this->output);
    }

    /**
     * @Given /^soll folgende Ausgabe erscheinen:$/
     */
    public function sollFolgendeAusgabeErscheinen(PyStringNode $string)
    {
        if ((string) $string !== $this->output) {
            throw new Exception(
                "Actual output is:\n" . $this->output
            );
        }
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
}
