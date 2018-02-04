# Zend Framework Login

## Introduction

This modul presended form with two imputs: email address and password.

All inputs data is validating and filtering.

## Instruction for implementation

1. Clone this repository to your zend-framework project (your-project/module/)
  
2. Update your config file in (config/modules.config.php) and add a line to the returned array:
```bash
  return [
    'Zend\Router',
    'Zend\Validator',
    'Application',
    'Login', // <-- add this line
];
```

3. Update your composer.json file:
```bash
  "autoload": {
        "psr-4": {
            "Login\\": "module/Login/src/" // <-- add this line
        }
    },
```

4. Add two required modules to your Zend Framework project (if not exists):

- open your terminal (mac os) or cmd (windows)
- go to your project root folder

```bash
$ cd your-project-root-folder
```

add dependence modules:

```bash
  $ composer require zendframework/zend-validator
  $ composer require zendframework/zend-filter
```

## JavaScript file:

this code is validate input data on the browser

```bash
$(document).ready(function()
{
	// LOGIN VALIDATION FORM
	$('#authentication').validate({
		rules: {
			email: {
				required: 	true,
				email: 		true
			},
			password: {
				required: 	true,
				minlength: 	5,
				maxlength: 	30
			}
		},
		messages: {
			email: {
				required: 	'Email Address is required',
				email: 		'Email Address is not valid'
			},
			password: {
				required: 	'Password is required',
				minlength: 	'Password is too short',
				maxlength: 	'Password is too long'
			}
		}
	});
});
```

## add script to the your html page:

```bash
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
```

Enjoy!
