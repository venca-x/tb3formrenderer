<?php
namespace Test;

use Nette;
use Nette\Forms\Form;
use Tester;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class TB3VerticalFormTest extends Tester\TestCase
{

    function setUp()
    {
    }

    function testSimpleForm()
    {
        $form = new Form;
        $form->setRenderer( new \Nette\Forms\Rendering\TB3FormRenderer() );

        $form->addText('username', 'Username:');

        Assert::matchFile(__DIR__ . '/expected/tb3verticalSimpleForm.phtml', (string) $form);
    }
}

$test = new TB3VerticalFormTest();
$test->run();