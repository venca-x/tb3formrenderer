TB3FormRenderer
===============

Nette addon for form render Twitter Bootstrap 3

Installation
------------

 1. Add the bundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
			   "venca-x/tb3formrenderer": "dev-master",
           }
        }

 2. Use Composer to download and install the bundle:

        composer update

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