CakePHP Authorize
=================

This plugin contains a new authorize class for use with the Acl component.

Requirements
----------------

- PHP 5.2.8
- CakePHP 2.x

Installation
----------------

_[Git]_

In your CakePHP plugin directory, run the following command:

```git
	git clone https://github.com/tanuck/cakephp-authorize.git Authorize
```

_[Composer]_

Add to `require` in your composer.json file:

```json
	{
		"require": {
			"tanuck/cakephp-authorize": "dev-master"
		}
	}
```

_[Manual]_

1. Download the zipfile from here: [https://github.com/tanuck/cakephp-authorize/zipball/master](https://github.com/tanuck/cakephp-authorize/zipball/master)
2. Unzip the entire contents.
3. Rename the resulting folder to Authorize.
4. Finally, copy it to the app/Plugin directory.

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
