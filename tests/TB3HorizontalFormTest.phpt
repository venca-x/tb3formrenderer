<?php
namespace Test;

use Nette;
use Nette\Forms\Form;
use Tester;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class TB3HorizontalFormTest extends Tester\TestCase
{

    function setUp()
    {
    }

    function testSimpleForm()
    {
        $form = new Form;
        $form->setRenderer( new \Nette\Forms\Rendering\TB3FormRenderer() );
        //horizontal form
        $renderer = $form->getRenderer();
        $renderer->wrappers['form']['orientation'] = 'form-horizontal';

        $form->addText('username', 'Username:');

        Assert::matchFile(__DIR__ . '/expected/tb3horizontalSimpleForm.phtml', (string) $form);
    }
}

$test = new TB3HorizontalFormTest();
$test->run();