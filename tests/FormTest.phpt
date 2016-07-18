<?php
namespace Test;

use Nette;
use Nette\Forms\Form;
use Tester;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class FormTest extends Tester\TestCase
{

    function setUp()
    {
    }

    function testSimpleForm()
    {
        $form = new Form;
        $form->addText('username', 'Username:');

        Assert::matchFile(__DIR__ . '/expected/simpleForm.phtml', (string) $form);
    }
}

$test = new FormTest();
$test->run();