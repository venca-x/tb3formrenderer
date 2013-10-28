TB3FormRenderer
===============

Nette addon for form render Twitter Bootstrap 3

Configuration
-------------

```php

  $form = new Form();
        
  $form->setRenderer( new \Nette\Forms\Rendering\TB3FormRenderer() );
  
  /*
  //horizontal form
  $renderer = $form->getRenderer();
  $renderer->wrappers['form']['class'] = 'form-horizontal';
  //$renderer->wrappers['form']['class'] = 'form-horizontal col-md-6 col-md-offset-3';
  */
  
  $form->addSubmit( 'create', 'Přidat novinku' )
       ->setAttribute('class', 'btn btn-primary');  

```