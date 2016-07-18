TB3FormRenderer
===============

Nette addon for form render Twitter Bootstrap 3

Installation
------------

Add the bundle to your dependencies:

		composer require venca-x/tb3formrenderer:~1.0.0
 
Configuration
-------------

```php

  $form = new Form();
        
  $form->setRenderer( new \Nette\Forms\Rendering\TB3FormRenderer() );
  
  /*
  //horizontal form
  $renderer = $form->getRenderer();
  $renderer->wrappers['form']['orientation'] = 'form-horizontal';
  //$renderer->wrappers['form']['class'] = 'col-md-6 col-md-offset-3';
  */
  
  $form->addSubmit( 'create', 'Přidat novinku' )
       ->setAttribute('class', 'btn btn-primary');  

```