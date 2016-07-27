<?php
namespace Test;

use Nette;
use Nette\Forms\Form;
use Tester;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class FormGroup extends Tester\TestCase
{

    function setUp()
    {
    }

    private function createBaseFormWithRenderer() {
        $form = new Form;
        $form->setRenderer( new \Nette\Forms\Rendering\TB3FormRenderer() );
        return $form;
    }

    function testFormGroupForm()
    {
        $form = $this->createBaseFormWithRenderer();
        $form->addText('email', 'Email')->setType('email');
        Assert::matchFile(__DIR__ . '/expected/form-group/text-email.phtml', $this->removeHeaderAndFooterForm((string)$form));

        $form = $this->createBaseFormWithRenderer();
        $form->addSelect('sex', 'Pohlaví', [1 => 'Muž', 2 => 'Žena']);
        Assert::matchFile(__DIR__ . '/expected/form-group/select.phtml', $this->removeHeaderAndFooterForm((string)$form));

        $form = $this->createBaseFormWithRenderer();
        $form->addCheckbox('mailing', 'Zasílat novinky');
        Assert::matchFile(__DIR__ . '/expected/form-group/checkbox.phtml', $this->removeHeaderAndFooterForm((string)$form));

        $form = $this->createBaseFormWithRenderer();
        $form->addButton('add', 'Přidat');
        Assert::matchFile(__DIR__ . '/expected/form-group/button.phtml', $this->removeHeaderAndFooterForm((string)$form));
    }

    private function removeHeaderAndFooterForm($formHtml) {
        $formHtml = $this->removeHeaderForm($formHtml);
        $formHtml = $this->removeFooterForm($formHtml);
        $formHtml = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $formHtml);//remove empty lines
        return $formHtml;
    }

    /**
     * Remove header from form
     * <form action="" method="post">
     * @param $formHtml
     */
    private function removeHeaderForm($formHtml) {
        return preg_replace("/<form .*?>/", " ", $formHtml);
    }

    /**
     * Remove footer form
     * <div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
     * </form>
     */
    private function removeFooterForm($formHtml) {
        $formHtml = str_replace('<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>', '', $formHtml);
        $formHtml = preg_replace("/<\/form.*?>/", " ", $formHtml);
        return $formHtml;
    }
}

$test = new FormGroup();
$test->run();