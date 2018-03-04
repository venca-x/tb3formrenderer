TB3FormRenderer
===============
[![Build Status](https://travis-ci.org/venca-x/tb3formrenderer.svg)](https://travis-ci.org/venca-x/tb3formrenderer.svg?branch=master) 
[![Latest Stable Version](https://poser.pugx.org/venca-x/tb3formrenderer/v/stable.svg)](https://packagist.org/packages/venca-x/tb3formrenderer) 
[![Latest Unstable Version](https://poser.pugx.org/venca-x/tb3formrenderer/v/unstable.svg)](https://packagist.org/packages/venca-x/tb3formrenderer) 
[![Total Downloads](https://poser.pugx.org/venca-x/tb3formrenderer/downloads.svg)](https://packagist.org/packages/venca-x/tb3formrenderer) 
[![License](https://poser.pugx.org/venca-x/tb3formrenderer/license.svg)](https://packagist.org/packages/venca-x/tb3formrenderer)

Nette addon for form render Twitter Bootstrap 3

**This package is dpericated. Use: [nette-form-renderer](https://github.com/venca-x/nette-form-renderer)**

Installation
------------

Add the bundle to your dependencies:

```
composer require venca-x/tb3formrenderer:~1.0.0
```
 
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
