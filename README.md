CakePHP Authorize
=================

This plugin contains a new authorize class for use with the Acl component.

Requirements
----------------

- PHP 5.2.8
- CakePHP 2.x

Installation
----------------

_[Composer]_

Add to `require` in your composer.json file:

```json
	{
		"require": {
			"tanuck/cakephp-authorize": "dev-master"
		}
	}
```

Usage
----------------

Standard CakePHP plugin installation, in `app/Config/bootstrap.php` insert the line: `CakePlugin::load('Authorize');`

To use the PathAuthorize class for authorization:

```php
	//in $components
	public $components = array(
	    'Auth' => array(
	        'authorize' => array(
	            'Authorize.Path' => array('actionPath' => 'controllers')
	        )
	    )
	);
    //Or in beforeFilter()
	$this->Auth->authorize = array(
	    'Authorize.Path' => array('actionPath' => 'controllers')
	);
```
